<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="home/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="home/css/tiny-slider.css" rel="stylesheet">
		<link href="home/css/style.css" rel="stylesheet">
		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
        @include('home.header')
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Shop</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">

		      		<!-- Start Column 1 -->
					 @foreach($product as $products) 
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="{{url('product_details',$products->id)}}">
							<img src="/products/{{$products->image}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">{{$products->title}}</h3>
							<strong class="product-price">{{$products->price}}</strong>TL

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
					@endforeach
					<!-- End Column 1 -->
					   
				</div> 
				<span class="row col-12 col-md-4 col-lg-3 mb-5">
					{!! $product->withQueryString()->links('pagination::bootstrap-5') !!}
				</span>		
		</div>


		<!-- Start Footer Section -->
        @include('home.footer')
		<!-- End Footer Section -->	


		<script src="home/js/bootstrap.bundle.min.js"></script>
		<script src="home/js/tiny-slider.js"></script>
		<script src="home/js/custom.js"></script>
	</body>

</html>
