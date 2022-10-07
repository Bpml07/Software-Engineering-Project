<!DOCTYPE html>
<html>
	<head>
	
		<title>Point of Sale</title>
		<meta charset="utf-8">
		<meta name = "viewport" content = "width=device-width, initial-scale=1">
		<style>
			*{
			box-sizing: border-box;
			}
		
			body
			{
				font-family: Arial;
				padding: 10px;
				background: #f1f1f1;
			}
			
			
/* styling */

	/* header */
			.header
			{
				padding: 30px;
				text-align: center;
				background: white;
			}
	
			.header h1
			{
				font-size: 50px;
			}
	/* topnav bar */
			.topnav
			{
				overflow: hidden;
				background-color: black;
				
			}
	/* topnav links */
			.topnav a 
			{
				float: left;
				display: block;
				color: white;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}
	/* topnav hover color */
			.topnav a:hover
			{
				background-color: #ddd;
				color: black;
			}
			/*
	/* columns (body) */
			.leftcolumn
			{
				float: left;
				width: 75%;
			}
			
			.rightcolumn
			{
				float: left;
				width: 25%;
				background=color: #f1f1f1;
				padding-left: 20px;
			}
			
	/* card effect /*
			.card
			{
				background-color: white;
				padding: 20px;
				margin-top: 20px;
			}
			
	/* clear floats after columns */
			.row:after
			{
				content: "";
				display: table;
				clear: both;
			}
	
	/* responsive layout effects */
			@media screen and (max-width:800px)
			{
				.leftcolumn, .rightcolumn
				{
					width: 100%;
					padding: 0;
				}
			}
			
			@media screen and (max-width:400px)
			{
				.leftcolumn, .rightcolumn
				{
					width: 100%;
					float: none;
				}
			}
			
	/* footer */
			.footer
			{
				background-color: lightgrey;
				padding: 20px;
				margin-top: 20px;
				text-align: right;
			}
			
			.center 
			{
			  display: block;
			  margin-left: auto;
			  margin-right: auto;
			  width: 50%;
			}
			
		</style>
		
		<script>

		</script>
	
	</head>
	<body>
		<div class = "header">
			<h1>Point of Sale</h1>
			<p>Help Your Business Reach Its Full Potential</p>
		</div>
		
		<div class = "topnav">
			<a href = "https://codd.cs.gsu.edu/~bpo1/POS_Homepage.php">Home</a>
			<a href = "https://codd.cs.gsu.edu/~bpo1/POS_Contact.php">Contact Us</a>
			<a href = "https://codd.cs.gsu.edu/~bpo1/POS_About.php" style = "float: right">About</a>
		</div>
		
		<div class = "row">
			<div class = "leftcolumn">
			
				<div class = "card">
					<h2>Point of Sale</h2>
					<h5>Why Does Your Business Need Our Software?</h5>
					<img src="./pics/oculusquest.png" class = "center" style = "height: 500px; width: 50%;">
					<h6>Team7 POS in Action.</h6>
					<p>Many food-service related establishments are losing vast amounts of potential revenue every day and the problem is freely passing right under management’s noses.
					The culprit of this issue is the use of outdated point of sale (POS) softwares, or even worse the lack of POS utilization. Using an outdated POS can potentially slow
					down table turnover due to an increased amount of time a server performs various tasks and human error. For instance, some fallacies may include defining which table
					a customer or party is sitting at, entering and tracking food/drink orders, item add-ons and substitution, sending order tickets to the kitchen and bar, and many other
					service-based actions via a POS system. A slow and inefficient POS can be detrimental to the restaurant’s goal to meet maximum sales standards leading to risks. 
					Planning, implementing, creating and executing a complex, yet easy-to-navigate POS software is the main goal of this project as to reduce errors and theft, while improving
					service speed and organization for consumers in search of memorable experiences.
					</p>
				</div>
				
				<div class = "card">
					<h2>How Will Our Product Help You?</h2>
					<h5>Efficiency, Time-Management, Cost-Cutting, and More!</h5>
					<p>Our POS is designed to make handling your business easier, while at the same time improving your profits, increasing employee morale, and making the day-to-day
					easier and more enjoyable for management, employees, AND customers. We offer all the basics, plus more! [EXPAND ON FEATURES HERE]</p>
				</div>
				
			</div>
			
			<div class = "rightcolumn">
			
				<div class = "card">
					<h2>VR News</h2>
					<div class = "img" style = "height: 150px;">
						<img src ="images/PointOfSalePic.webp" class = "center" style = "height: 400px; width: 100%;">
					</div>
				
				</div>
				
			</div>
		</div>
		
		<div class = "footer">
			<p>
				<h5>&copy2021 Team7, All Rights Reserved</h5> 
			</p>
		</div>
	</body>
</html>