<head>
	<title>INPUT SCREEN 2</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	 <style type="text/css">
	 	.brand{
	 		background: #cbb09c !important;
	 	}
	 	.brand-text{
	 		color: #cbb09c !important;
	 	}
	 </style>
</head>

<body>
	<body class="grey lighten-4"> <!--BACKGROUND-->
		<nav class="white z-depth-0">
			<div class="container">
				<a href="#" class="brand-logo brand-text">Class List</a>
				<ul id="nav-mobile" class="right hide-on-small-and-down">

					<!--ADD BUTTON-->
					<li><a href="#" class="btn brand z-depth-0">Add a Class</a></li>

					<!--ADD BUTTON-->
					<li>
						<form action=remove_class.php method=POST>
							<input type=text placeholder=classname>
						<input type=hidden>
						<button name="Remove a class" type=submit>Delete a class</button>
	</form>
					<!-- <li><a href="#" class="btn brand z-depth-0">Remove a Class</a></li> -->
					
				</ul>
			</div>
		</nav>
		<table class = "grey lighten-4">
			 <table style= "width:80%">
				<tr>
					<th>Classes</th>
					<th>Section</th>
				</tr>	