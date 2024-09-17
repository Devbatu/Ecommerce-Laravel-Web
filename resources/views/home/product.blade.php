<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Crafted with excellent material.</h2>
						<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. </p>
						<p><a href="shop.html" class="btn">Explore</a></p>
					</div> 
					<!-- End Column 1 -->
					@php
						$i = 0;
					@endphp

					@foreach($product as $products) 
						@php
							$i++;
						@endphp
						
						@if($i <= 3)
							<!-- Start Column -->
							<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
								<a class="product-item" href="{{url('product_details',$products->id)}}">
									<img src="/products/{{$products->image}}" class="img-fluid product-thumbnail">
									<h3 class="product-title">{{ $products->title }}</h3>
									<strong class="product-price">${{ $products->price }}</strong>TL
									<span class="icon-cross">
										<img src="images/cross.svg" class="img-fluid">
									</span>
								</a>
							</div>
							<!-- End Column -->
						@else
							@break
						@endif
						@endforeach	


				</div>
			</div>
		</div>