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
  <base href="/public">

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

		

		<div class="untree_co-section before-footer-section">
            <div class="container">
              <div class="row mb-5">
                <form class="col-md-12" method="post">
                  <div class="site-blocks-table">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Image</th>
                          <th class="product-name">Product</th>
                          <th class="product-price">Price</th>
                          <th class="product-quantity">Quantity</th>
                          <th class="product-total">Total</th>
                          <th class="product-remove">Remove</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                          $totalprice=0;
                        @endphp

                      
@foreach($cart as $cartItem)
    @php
        $product = $products->where('id', $cartItem->product_id)->first();

        if ($product) {
            $totalprice += $cartItem->price; 
        }
    @endphp

    @if($product)
        <tr>
            <td class="product-thumbnail">
                <img src="/products/{{$cartItem->image}}" alt="Image" class="img-fluid">
            </td>
            <td class="product-name">
                <h2 class="h5 text-black">{{$cartItem->product_title}}</h2>
            </td>
            <td>{{$product->discountprice}}TL</td>
            <td>{{$cartItem->quantity}}</td>
            <td>{{$cartItem->price}}TL</td> 
            <td><a href="{{url('remove_cart',$cartItem->id)}}" onclick="return confirm('Are you sure remove this product?')" class="btn btn-danger mb-5 btn-sm">X</a></td>
        </tr>
    @endif
@endforeach

                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
        
				<span class="row col-12 col-md-4 col-lg-3 mb-5">
        {{ $cart->withQueryString()->links('pagination::bootstrap-5') }}
				</span>		
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12">
                      <label class="text-black h4" for="coupon">Coupon</label>
                      <p>Enter your coupon code if you have one.</p>
                    </div>
                    <div class="col-md-8 mb-3 mb-md-0">
                      <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                    </div>
                    <div class="col-md-4">
                      <button class="btn btn-black">Apply Coupon</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 pl-5">
                  <div class="row justify-content-end">
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-12 text-right border-bottom mb-5">
                          <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                        </div>
                      </div>
                      
                      <div class="row mb-5">
                        <div class="col-md-6">
                          <span class="text-black">Total</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black">{{$totalprice}}TL</strong>
                        </div>
                      </div>
        
                      <div class="row">
                        <div class="col-md-12">
                          <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		

		<!-- Start Footer Section -->
        @include('home.footer')
        <!-- End Footer Section -->	


		<script src="home/js/bootstrap.bundle.min.js"></script>
		<script src="home/js/tiny-slider.js"></script>
		<script src="home/js/custom.js"></script>
	</body>

</html>
