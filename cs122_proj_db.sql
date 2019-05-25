DROP Database cs122_proj;
CREATE Database cs122_proj; 

CREATE TABLE Teacher (TeacherID int, Primary Key (TeacherID));
CREATE TABLE Subject (SubjectID int, Name varchar(255),  PRIMARY KEY(SubjectID));
CREATE TABLE Section (SectionName varchar(255),  PRIMARY KEY(SectionName));

CREATE TABLE Student(StudentID int, SectionName varchar(255), PRIMARY KEY(StudentID), 
		FOREIGN KEY(SectionName) References Section(SectionName));

CREATE TABLE Teacher_subject (TeacherID int, SubjectID int, PRIMARY KEY(TeacherID, SubjectID), 
		FOREIGN KEY(TeacherID) References Teacher(TeacherID), FOREIGN KEY (SubjectID) REFERENCES Subject(SubjectID) );

CREATE TABLE Requirement(RequirementID varchar(255), TeacherID int, SubjectID int,  PRIMARY KEY(RequirementID), 
		FOREIGN KEY(TeacherID) References Teacher_subject(TeacherID), 
		FOREIGN KEY (SubjectID) REFERENCES Teacher_subject(SubjectID));

CREATE TABLE Handled_section(TeacherID int, SubjectID int, SectionName varchar(255),  PRIMARY KEY(TeacherID, SubjectID, SectionName), 
		FOREIGN KEY(TeacherID) References Teacher_subject(TeacherID), 
		FOREIGN KEY (SubjectID) REFERENCES Teacher_subject(SubjectID), 
		FOREIGN KEY (SectionName) REFERENCES Section(SectionName));

CREATE TABLE Grade(StudentID int, RequirementID varchar(255), Grade int, HPS int,  PRIMARY KEY(StudentID, RequirementID), 
		FOREIGN KEY(StudentID) References Student(StudentID), 
		FOREIGN KEY (RequirementID) REFERENCES Requirement(RequirementID));

CREATE TABLE Requirement_Percentage(SubjectID int, RequirementID varchar(255), Percentage int, PRIMARY KEY(SubjectID, RequirementID), 
		FOREIGN KEY (SubjectID) REFERENCES Teacher_subject(SubjectID), 
		FOREIGN KEY (RequirementID) REFERENCES Requirement(RequirementID));
