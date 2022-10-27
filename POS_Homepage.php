<!DOCTYPE html>
<html>
	<head>
	
		<title>Menu</title>
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
			
	 /*card effect */
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
			
            .btn-group button {
              background-color: #ADD8E6; /* light blue background */
              border: 1px solid black; /* black border */
              color: black; /* Black text */
              padding: 50px 24px; /* Some padding */
              cursor: pointer; /* Pointer/hand icon */
              float: left; /* Float the buttons side by side */
            }

            /* Clear floats (clearfix hack) */
            .btn-group:after {
              content: "";
              clear: both;
              display: table;
            }

            .btn-group button:not(:last-child) {
              border-right: none; /* Prevent double borders */
            }

            /* Add a background color on hover */
            .btn-group button:hover {
              background-color: #f1f1f1;
            }
		</style>
		
		<script>
		</script>
	
	</head>
	<body>
		<div class = "header">
			<h1>7 Brunch</h1>
			<p>Menu</p>
		</div>
		
		<div class = "topnav">
        <a href = "https://codd.cs.gsu.edu/~bpo1/POS_Home.php">Home</a>	
			<a href = "https://codd.cs.gsu.edu/~bpo1/POS_Drinks.php">Drinks</a>		
			<a href = "https://codd.cs.gsu.edu/~bpo1/POS_Apps.php"> Appetizers</a>	
			<a href = "https://codd.cs.gsu.edu/~bpo1/POS_Entree.php">Entrées</a>
			<a href = "https://codd.cs.gsu.edu/~bpo1/POS_More.php" style = "float: right">More</a>
		</div>
		
		<div class = "row">
				<div class = "card">
					<h2>Tables</h2>
					<div class = "card">
                    	<div class="btn-group" style="width:100%">
                          <button style="width:25%" onclick="location.href='https://codd.cs.gsu.edu/~bpo1/POS_SampleTableClick.php';">1</button>
                          <button style="width:25%" onclick="location.href='https://codd.cs.gsu.edu/~bpo1/POS_SampleTableClick.php';">2</button>
                          <button style="width:25%" onclick="location.href='https://codd.cs.gsu.edu/~bpo1/POS_SampleTableClick.php';">3</button>
                          <button style="width:25%" onclick="location.href='https://codd.cs.gsu.edu/~bpo1/POS_SampleTableClick.php';">4</button>
                        </div>
                        <div class="btn-group" style="width:100%">
                          <button style="width:25%" onclick="location.href='https://codd.cs.gsu.edu/~bpo1/POS_SampleTableClick.php';">5</button>
                          <button style="width:25%" onclick="location.href='https://codd.cs.gsu.edu/~bpo1/POS_SampleTableClick.php';">6</button>
                          <button style="width:25%" onclick="location.href='https://codd.cs.gsu.edu/~bpo1/POS_SampleTableClick.php';">7</button>
                          <button style="width:25%" onclick="location.href='https://codd.cs.gsu.edu/~bpo1/POS_SampleTableClick.php';">8</button>
                        </div>
                        <div class="btn-group" style="width:100%">
                          <button style="width:25%" onclick="location.href='https://codd.cs.gsu.edu/~bpo1/POS_SampleTableClick.php';">9</button>
                          <button style="width:25%" onclick="location.href='https://codd.cs.gsu.edu/~bpo1/POS_SampleTableClick.php';">10</button>
                          <button style="width:25%" onclick="location.href='https://codd.cs.gsu.edu/~bpo1/POS_SampleTableClick.php';">11</button>
                          <button style="width:25%" onclick="location.href='https://codd.cs.gsu.edu/~bpo1/POS_SampleTableClick.php';">12</button>
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
