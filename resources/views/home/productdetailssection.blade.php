
<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">{{$product->title}}</h2>
						<p>{{$product->description}}</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/truck.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Quantity</h3>
									<p>{{$product->title}}</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Catagory</h3>
									<p>{{$product->catagory}}</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Price</h3>
									<p>{{$product->price}}TL</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/return.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Discount Price</h3>
									<p>{{$product->discountprice}}</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="/products/{{$product->image}}" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
                
				



				<div class="why-choose-section  row justify-content-center">
				<h1 class="text-center">Quantity</h1>

		  <form action="{{url('/add_cart',$product->id)}}"class="form-group row justify-content-center" method="POST" enctype="multipart/form-data">
    @csrf
		<div class="form-group form-group-default d-flex align-items-center justify-content-center col-lg-3">
        <div class="input-group">
            <!-- Quantity Input -->        
            <button type="button" onClick="decrementQuantity()" class="btn btn-danger">-</button>

            <input
                id="quantity"
                name="req_quantity"
                type="number"
                class="form-control"
                value="1"  
                min="1"
                required
            />
            <!-- Artır ve Azalt Butonları -->
            <button type="button" onClick="incrementQuantity()" class="btn btn-success">+</button>
        </div>
    </div> 
    <button type="submit" class="btn btn-black btn-lg py-3 col-lg-5 btn-block">Add To Cart</button>
</form>


</div>


		<script type="text/javascript">
			var quantityInput = document.getElementById('quantity');

			// + butonuna basıldığında çalışacak fonksiyon
			function incrementQuantity() {
				let currentValue = parseInt(quantityInput.value);
				quantityInput.value = currentValue + 1; 
			}

			// - butonuna basıldığında çalışacak fonksiyon
			function decrementQuantity() {
				let currentValue = parseInt(quantityInput.value);
				if (currentValue > 1) {  
					quantityInput.value = currentValue - 1; 
				}
			}
		</script>