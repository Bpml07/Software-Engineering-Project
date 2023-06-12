<?php
include_once('includes/header.php')
?>
<div class="offcanvas offcanvas-end" tabindex="-1" id="cart" aria-labelledby="cartLabel">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title" id="cartLabel">Cart</h5>
		<div class="btn-close" data-bs-dismiss="offcanvas"></div>
	</div>
	<div class="offcanvas-body">
		<ul class="cart-items navbar-nav justify-content-end flex-grow-1 pe-3">

		</ul>
		<ul>
			<li class="nav-item">


				<div class="container d-flex justify-content-between">
					<h6>
						SUBTOTAL
					</h6>
					<h6 class="cart-total-price">

					</h6>
				</div>
				<hr />
			</li>
			<li class="nav-item">
				<div class="container d-flex">
					<h6 class="check-out-item">

						<script>

						</script>

					</h6>
				</div>
				<hr />
			</li>
		</ul>
	</div>
</div>


<div class="topnav d-flex justify-content-between">
	<a href="<?= HOST ?>POS_Homepage.php">Tables</a>
	<div class="text-white " role="button" style="padding:14px 16px" data-bs-toggle="offcanvas" data-bs-target="#cart">
		Cart
	</div>
</div>

<div class="row  w-100 m-0">
	<div class="card">
		<h2>Drinks</h2>
		<div class="card">
			<div class="btn-group" style="width:100%">
				<div class="button">
					<div class="id" style="border:none;padding:0px; display:none;">1</div>
					<div class="name" style="border:none;padding:0px"> Coke</div>
					<div class="price" style="border:none;padding:0px;padding-top:10px">$2.00</div>
				</div>
				<div class="button">
					<div class="id" style="border:none;padding:0px; display:none;">2</div>
					<div class="name" style="border:none;padding:0px"> Sprite</div>
					<div class="price" style="border:none;padding:0px;padding-top:10px">$2.00</div>
				</div>
				<div class="button">
					<div class="id" style="border:none;padding:0px; display:none;">3</div>
					<div class="name" style="border:none;padding:0px"> Coffee</div>
					<div class="price" style="border:none;padding:0px;padding-top:10px">$3.00</div>
				</div>
				<div class="button">
					<div class="id" style="border:none;padding:0px; display:none;">4</div>
					<div class="name" style="border:none;padding:0px"> Hot Chocolate</div>
					<div class="price" style="border:none;padding:0px;padding-top:10px">$4.00</div>
				</div>

			</div>
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
		<input type="hidden" name="query" value="INSERT INTO public.&quot;orders&quot; (customer_order) VALUES(ARRAY [print_r($orderList)])" />
        <input type="submit" name="button1"
                class="button" value="Submit" />
    </form>
	<!-- <?php
		print_r($orderList);
	?> -->
	</body>	
</html>