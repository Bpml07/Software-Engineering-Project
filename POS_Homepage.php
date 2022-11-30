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
<div class="row w-100 m-0">
	<div class="card">
		<h2>Tables</h2>
		<div class="card">
			<div class="btn-group" style="width:100%">
				<button style="width:25%" onclick="location.href='<?= HOST ?>POS_SampleTableClick.php';">1</button>
				<button style="width:25%" onclick="location.href='<?= HOST ?>POS_SampleTableClick.php';">2</button>
				<button style="width:25%" onclick="location.href='<?= HOST ?>POS_SampleTableClick.php';">3</button>
				<button style="width:25%" onclick="location.href='<?= HOST ?>POS_SampleTableClick.php';">4</button>
			</div>
			<div class="btn-group" style="width:100%">
				<button style="width:25%" onclick="location.href='<?= HOST ?>POS_SampleTableClick.php';">5</button>
				<button style="width:25%" onclick="location.href='<?= HOST ?>POS_SampleTableClick.php';">6</button>
				<button style="width:25%" onclick="location.href='<?= HOST ?>POS_SampleTableClick.php';">7</button>
				<button style="width:25%" onclick="location.href='<?= HOST ?>POS_SampleTableClick.php';">8</button>
			</div>
			<div class="btn-group" style="width:100%">
				<button style="width:25%" onclick="location.href='<?= HOST ?>POS_SampleTableClick.php';">9</button>
				<button style="width:25%" onclick="location.href='<?= HOST ?>POS_SampleTableClick.php';">10</button>
				<button style="width:25%" onclick="location.href='<?= HOST ?>POS_SampleTableClick.php';">11</button>
				<button style="width:25%" onclick="location.href='<?= HOST ?>POS_SampleTableClick.php';">12</button>
			</div>
		</div>
	</div>
</div>

<?php
include_once('includes/footer.php');

?>