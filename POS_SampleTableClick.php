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
              padding: 35px 24px; /* Some padding */
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
			<p>TABLE NUMBER HERE</p>
		</div>
		
		<div class = "topnav">
        <a href = "https://codd.cs.gsu.edu/~bpo1/POS_Homepage.php">Tables</a>	
		</div>
		
		<div class = "row">
				<div class = "card">
					<h2>Drinks</h2>
					<div class = "card">
                    	<div class="btn-group" style="width:100%">
                          <button onclick="listAdd('Coke')" style="width:25%">Coke</button>
                          <button onclick="listAdd('Sprite')" style="width:25%">Sprite</button>
                          <button onclick="listAdd('Coffee')" style="width:25%">Coffee</button>
                          <button onclick="listAdd('Hot Chocolate')" style="width:25%">Hot Chocolate</button>
                        </div>
                    </div>
                    <h2>Appetizers</h2>
					<div class = "card">
                    	<div class="btn-group" style="width:100%">
                          <button onclick="listAdd('Mini Quiche')" style="width:25%">Mini Quiche</button>
                          <button onclick="listAdd('Deviled Eggs')" style="width:25%">Deviled Eggs</button>
                          <button onclick="listAdd('Cinnamon Roll')" style="width:25%">Cinnamon Roll</button>
                          <button onclick="listAdd('Mini French Toast')" style="width:25%">Mini French Toast</button>
                        </div>
                        <div class="btn-group" style="width:100%">
						<p id="addToList"> </p>
                          <button onclick="listAdd('Grilled Cheese Slider')" style="width:25%">Grilled Cheese Sliders</button>
                        </div>
                    </div>
                    <h2>Entrées</h2>
					<div class = "card">
                    	<div class="btn-group" style="width:100%">
                          <button onclick="listAdd('Veggie Omelette')" style="width:25%">Veggie Omelette</button>
                          <button onclick="listAdd('The Infinity Omelette')" style="width:25%">The Infinity Omelette</button>
                          <button onclick="listAdd('Classic American Breakfast')" style="width:25%">Classic American Breakfast</button>
                          <button onclick="listAdd('Maple-Glazed Salmon')" style="width:25%">Maple-Glazed Salmon</button>
                        </div>
                        <div class="btn-group" style="width:100%">
                          <button onclick="listAdd('Pancake Stacker')" style="width:25%">Pancake Stacker</button>
                          <button onclick="listAdd('Good Morning Burger')" style="width:25%">Good Morning Burger</button>
                          <button onclick="listAdd('Mega Croissant')" style="width:25%">Mega Croissant</button>
                          <button onclick="listAdd('Kids Meal')" style="width:25%">Kid's Meal</button>
                        </div>

						
                    </div>

					<!-- Ordered List -->
					<u1 id="orderList">
					
					<!-- Creates an "orderList" -->
					<script>

						function listAdd(text){
							listNode = document.getElementById('orderList');
							liNode = document.createElement('LI');
							txtNode = document.createTextNode(text);
							liNode.appendChild(txtNode);
							listNode.appendChild(liNode);
						}
    				</script>
		
		<!-- button to submit to database -->
		<div class = "footer">
			<p>
				<h5>&copy2021 Team7, All Rights Reserved</h5> 
			</p>
		</div>
		<form action="POSDatabase_Connection.php" method="POST">
		<input type="hidden" name="query" value="INSERT INTO public.&quot;orders&quot; (customer_order) VALUES(ARRAY ['TEST', 'TEST2'])" />
        <input type="submit" name="button1"
                class="button" value="Submit" />
    </form>
	</body>	
</html>