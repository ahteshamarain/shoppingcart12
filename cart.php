<?php 

include("config.php");
include("include/header.php");
include("include/navbar.php");


?>
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-price">Quantity</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<?php 

				$current_user_id = $_SESSION['user_id'];
				$userid = mysqli_query($connection, "SELECT `user_id` from `cart` where `user_id` = '$current_user_id'");
				if(mysqli_num_rows($userid) > 0){
					$cart_id = mysqli_fetch_assoc($userid);
					// print_r($cart_count);
				}

				if($cart_id['total_cart'] == $current_user_id){
					
				
				?>
							<tbody id="ctab">
					
							</tbody>
							<?php 
							}else{
							?>
							<tbody id="ctab">

							<?php 
				

					echo '
					<tr class="table-body-row">
                <td class="product-remove delete" data-id="'.$row['cart_id'].'" ><i class="far fa-window-close"></i></td>
                <td class="product-image"><img src="admin/upload/' . $row['pimage'] . '" alt=""></td>
                <td class="product-name">' . $row['pro_name'] . '</td>
                <td class="product-price">$' . $row['Pro_price'] . '</td>
                <td class="product-price">' . $row['pquantity'] . '</td>
                <td class="product-total">$' . $row['ptotal'] . '</td>
                </tr>
					';
				}
							?>
							</tbody>
						</table>
					</div>
				</div>
				

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td>$500</td>
								</tr>
								<tr class="total-data">
									<td><strong>Shipping: </strong></td>
									<td>$45</td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td>$545</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="cart.php" class="boxed-btn">Update Cart</a>
							<a href="checkout.php" class="boxed-btn black">Check Out</a>
						</div>
					</div>

					<div class="coupon-section">
						<h3>Apply Coupon</h3>
						<div class="coupon-form-wrap">
							<form action="index.php">
								<p><input type="text" placeholder="Coupon"></p>
								<p><input type="submit" value="Apply"></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->
	<?php 
include("include/footer.php");
?>
<script src="js/addcart.js"></script>