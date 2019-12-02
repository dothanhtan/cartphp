<?php 
session_start();
include_once("../model/product.php");
include_once("header.php");
if (!isset($_SESSION["lsCart"])) {    
	$lsCart = array();
}
else {
	$lsCart = unserialize($_SESSION["lsCart"]);
}
if (isset($_REQUEST["key"]))
	$key = $_REQUEST["key"];
$lsproduct = Product::GetProductFromDB($key);
?>


<!-- ========================= SECTION MAIN ========================= -->
<?php if($key == null) { ?>
<section class="section-main bg padding-y">
<div class="container">

<div class="row">
	<aside class="col-md-3">
		<nav class="card">
			<ul class="menu-category">
				<li><a href="#">Cây nóng lạnh</a></li>
				<li><a href="#">Máy lọc nước</a></li>
				<li><a href="#">Quạt điều hòa</a></li>
				<li><a href="#">Thiết bị mùa đông</a></li>
				<li><a href="#">Thiết bị nhà bếp</a></li>
				<li><a href="#">Thiết bị vệ sinh</a></li>
				<li class="has-submenu"><a href="#">More</a>
					<ul class="submenu">
						<li><a href="#">Tủ đông - Tủ mát</a></li>
						<li><a href="#">Lọc đầu nguồn</a></li>
						<li><a href="#">Lọc tinh khiết</a></li>
						<li><a href="#">Ấm nước</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</aside> <!-- col.// -->
	<div class="col-md-9">
		<article class="banner-wrap">
            <div id="slideshow" class="carousel slide" data-ride="carousel">
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/slideshow_1.jpg" alt="" style="height: 300px" class="w-100 rounded">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/slideshow_2.jpg" alt="" style="height: 300px" class="w-100 rounded">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/slideshow_3.jpg" alt="" style="height: 300px" class="w-100 rounded">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/slideshow_4.jpg" alt="" style="height: 300px" class="w-100 rounded">
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#slideshow" data-slide="prev">
                        <span><i class="carousel-control-prev-icon"></i></span>
                    </a>
                    <a class="carousel-control-next" href="#slideshow" data-slide="next">
                        <span><i class="carousel-control-next-icon"></i></span>
                    </a>
                </div>
            </div>
		</article>
	</div> <!-- col.// -->
</div> <!-- row.// -->
</div> <!-- container //  -->
</section>
<?php } ?>
<!-- ========================= SECTION MAIN END// ========================= -->

<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y-sm">
<div class="container">

<header class="section-heading">
	<a href="#" class="btn btn-outline-primary float-right">Xem tất cả</a>
	<h3 class="section-title">Sản phẩm phổ biến</h3>
</header><!-- sect-heading -->

	
<div class="row">
	<?php foreach ($lsproduct as $key => $value){?>
	<div class="col-md-3">
		 <div class="overlay">
			<form action="giohang" method="post">
				<button type="submit" name="addcart" style="background-color:transparent; border:none;" data-toggle="tooltip" title="Thêm vào giỏ" value="<?php echo $value->idproduct ?>"><i class="fa fa-shopping-cart"></i></button>
			</form>
			<a href="chitiet?idproduct=<?php echo $value->idproduct ?>" data-toggle="tooltip" title="Xem chi tiết">
				<i class="fa fa-eye"></i> 
			</a>                                                   
		</div>
		<div href="#" class="card card-product-grid">
			<a href="#" class="img-wrap"> <img src="<?php echo $value->image?>"> </a>
			<figcaption class="info-wrap">
				<a href="#" class="title" style="height: 50px"><?php echo $value->nameproduct?></a>
				<div class="price mt-1"><?php echo $value->price ?>₫</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
	<?php } ?>
</div> <!-- row.// -->

</div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ========================= -->


<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y bg">
<div class="container">

<div class="row">
<div class="col-md-6">
	<h3>Hãy tải ứng dụng ngay bây giờ</h3>
</div>
<div class="col-md-6 text-md-right">
	<a href="#"><img src="../images/appstore.png" height="40"></a>
</div>
</div> <!-- row.// -->
</div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ======================= -->

<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top">
	<div class="container">
		<section class="footer-top padding-y">
			<div class="row">
				<aside class="col-md col-6">
					<h6 class="title">Brands</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Adidas</a></li>
						<li> <a href="#">Puma</a></li>
						<li> <a href="#">Reebok</a></li>
						<li> <a href="#">Nike</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Company</h6>
					<ul class="list-unstyled">
						<li> <a href="#">About us</a></li>
						<li> <a href="#">Career</a></li>
						<li> <a href="#">Find a store</a></li>
						<li> <a href="#">Rules and terms</a></li>
						<li> <a href="#">Sitemap</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Help</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Contact us</a></li>
						<li> <a href="#">Money refund</a></li>
						<li> <a href="#">Order status</a></li>
						<li> <a href="#">Shipping info</a></li>
						<li> <a href="#">Open dispute</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Account</h6>
					<ul class="list-unstyled">
						<li> <a href="#"> User Login </a></li>
						<li> <a href="#"> User register </a></li>
						<li> <a href="#"> Account Setting </a></li>
						<li> <a href="#"> My Orders </a></li>
					</ul>
				</aside>
				<aside class="col-md">
					<h6 class="title">Social</h6>
					<ul class="list-unstyled">
						<li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
						<li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
						<li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
						<li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
					</ul>
				</aside>
			</div> <!-- row.// -->
		</section>	<!-- footer-top.// -->

		<section class="footer-bottom border-top row">
			<div class="col-md-2">
				<p class="text-muted"> &copy; 2010 Song Than Company </p>
			</div>
			<div class="col-md-8 text-md-center">
				<a class="px-2" href="mailto:thanhtan280198@gmail.com">thanhtan280198@gmail.com</a>
				<a class="px-2" href="tel:+879-332-9375">+879-332-9375</a>
				<span  class="px-2">15 Van The Nam, Thuy Thanh</span>
			</div>
			<div class="col-md-2 text-md-right text-muted">
				<i class="fab fa-lg fa-cc-visa"></i>
				<i class="fab fa-lg fa-cc-paypal"></i>
				<i class="fab fa-lg fa-cc-mastercard"></i>
			</div>
		</section>
	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->

</body>
</html>