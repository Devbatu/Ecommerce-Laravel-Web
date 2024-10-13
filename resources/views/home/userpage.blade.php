
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="home/favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="home/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="home/css/tiny-slider.css" rel="stylesheet">
		<link href="home/css/style.css" rel="stylesheet">
		<title>DevBatu Shop</title>
		<style>
			.product-thumbnail {
    width: 100%; /* Kapsayıcısının genişliğine göre ayarlar */
    height: 250px; /* Sabit bir yükseklik ayarlar */
    object-fit: cover; /* Resmi kesmeden, içeriği kapsayıcıya uydurur */
}
		</style>
	</head>

	<body>
		<!-- Start Header/Navigation -->
         @include('home.header')
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
        @include('home.hero')
		<!-- End Hero Section -->

		<!-- Start Product Section -->
        @include('home.product')
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
        @include('home.whyus')
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
        @include('home.wehelp')
		<!-- End We Help Section -->

		<!-- Start Popular Product -->
        @include('home.popularproduct')
		<!-- End Popular Product -->

		<!-- Start Testimonial Slider -->
        @include('home.testimonialslider')
		<!-- End Testimonial Slider -->

		<!-- Start Blog Section -->
        @include('home.blog')
		<!-- End Blog Section -->	

		<!-- Start Footer Section -->
        @include('home.footer')
		<!-- End Footer Section -->	


		<script src="home/js/bootstrap.bundle.min.js"></script>
		<script src="home/js/tiny-slider.js"></script>
		<script src="home/js/custom.js"></script>
	</body>

</html>
