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
		<h2>Appetizers</h2>
		<div class="card">
			<div class="btn-group" style="width:100%">
				<div class="button">
					<div class="id" style="border:none;padding:0px; display:none;">5</div>
					<div class="name" style="border:none;padding:0px"> Mini Quiche</div>
					<div class="price" style="border:none;padding:0px;padding-top:10px">$5.00</div>
				</div>
				<div class="button">
					<div class="id" style="border:none;padding:0px; display:none;">6</div>
					<div class="name" style="border:none;padding:0px"> Deviled Eggs</div>
					<div class="price" style="border:none;padding:0px;padding-top:10px">$6.00</div>
				</div>
				<div class="button">
					<div class="id" style="border:none;padding:0px; display:none;">7</div>
					<div class="name" style="border:none;padding:0px"> Cinnamon Roll</div>
					<div class="price" style="border:none;padding:0px;padding-top:10px">$10.00</div>
				</div>
				<div class="button">
					<div class="id" style="border:none;padding:0px; display:none;">8</div>
					<div class="name" style="border:none;padding:0px"> Mini French Toast</div>
					<div class="price" style="border:none;padding:0px;padding-top:10px">$8.00</div>
				</div>

			</div>
			<div class="btn-group" style="width:100%">
				<div class="button">
					<div class="id" style="border:none;padding:0px; display:none;">9</div>
					<div class="name" style="border:none;padding:0px"> Grilled Cheese Sliders</div>
					<div class="price" style="border:none;padding:0px;padding-top:10px">$6.00</div>
				</div>

			</div>
		</div>
		<h2>Entrées</h2>
		<div class="card">
			<div class="btn-group" style="width:100%">
				<div class="button">
					<div class="id" style="border:none;padding:0px; display:none;">10</div>
					<div class="name" style="border:none;padding:0px"> Veggie Omelette</div>
					<div class="price" style="border:none;padding:0px;padding-top:10px">$4.00</div>
				</div>
				<div class="button">
					<div class="id" style="border:none;padding:0px; display:none;">11</div>
					<div class="name" style="border:none;padding:0px"> The Infinity Omelette</div>
					<div class="price" style="border:none;padding:0px;padding-top:10px">$12.00</div>
				</div>
				<div class="button">
					<div class="id" style="border:none;padding:0px; display:none;">12</div>
					<div class="name" style="border:none;padding:0px"> Classic American Breakfast</div>
					<div class="price" style="border:none;padding:0px;padding-top:10px">$6.00</div>
				</div>
				<div class="button">
					<div class="id" style="border:none;padding:0px; display:none;">13</div>
					<div class="name" style="border:none;padding:0px"> Maple-Glazed Salmon</div>
					<div class="price" style="border:none;padding:0px;padding-top:10px">$5.00</div>
				</div>

			</div>
			<div class="btn-group" style="width:100%">
				<div class="button">
					<div class="id" style="border:none;padding:0px; display:none;">14</div>
					<div class="name" style="border:none;padding:0px"> Pancake Stacker</div>
					<div class="price" style="border:none;padding:0px;padding-top:10px">$3.00</div>
				</div>
				<div class="button">
					<div class="id" style="border:none;padding:0px; display:none;">15</div>
					<div class="name" style="border:none;padding:0px"> Good Morning Burger</div>
					<div class="price" style="border:none;padding:0px;padding-top:10px">$6.00</div>
				</div>
				<div class="button">
					<div class="id" style="border:none;padding:0px; display:none;">16</div>
					<div class="name" style="border:none;padding:0px"> Mega Croissant</div>
					<div class="price" style="border:none;padding:0px;padding-top:10px">$7.00</div>
				</div>
				<div class="button">
					<div class="id" style="border:none;padding:0px; display:none;">17</div>
					<div class="name" style="border:none;padding:0px"> Kid's Meal</div>
					<div class="price" style="border:none;padding:0px;padding-top:10px">$4.00</div>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="footer">
	<p>
	<h5>&copy2021 Team7, All Rights Reserved</h5>
	</p>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="main.js"></script>
</body>

</html>