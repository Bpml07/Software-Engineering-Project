<?php
include_once('includes/header.php');

?>

<div class="cart-items" style="display:none"></div>
<div class=" topnav">
    <a href="<?= HOST ?>POS_Homepage.php">Tables</a>
</div>

<ul class="cart-items navbar-nav justify-content-end flex-grow-1 pe-3 pt-5">
    <div class="nav-item cart-row-0 pb-2">
        <div class="container d-flex">
            <div class="cart-item-desc w-100 px-2 d-flex justify-content-between align-items-center">
                <h6 class="cart-item-name" style="width:100px">Name</h6>

                <div class="d-flex justify-content-between">

                    <div class="cart-column">
                        <h6 style="width:100px">QUANTITY</h6>

                    </div>
                </div>
                <br>
                <h6 class="cart-price" style="width:100px">Price</h6>
                <br>

            </div>
        </div>
    </div>


</ul>
<ul class="ps-0">


    </div>
    <hr />

    <li class="nav-item">

        <div class="container d-flex justify-content-between">
            <h6>
                TOTAL
            </h6>
            <h6 class="cart-total-price " style="padding-right:25%">
            </h6>
        </div>
        <hr />
    </li>

</ul>


<?php

include_once('includes/footer.php');
?>