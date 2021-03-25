@extends('frontend.master')

@section('title')
accessories
@endsection

@section('body')
<div class="parts">
	 <div class="container">
		 <h2>BIKE-ACCESSORIES</h2>
		 <div class="bike-parts-sec">
		 @foreach($products as $product)
		 <div class="bike-parts acces">
			 <div class="top">
				 <ul>
					 <li><a href="{{ route('/') }}">home</a></li>
					 <li><a href="#"> / </a></li>
					 <li><a href="#">parts</a></li>
				 </ul>				 
			 </div>
			 <div class="bike-apparels">
				 <div class="parts1">
					 <a href="{{ route('single', ['id'=>$product->id]) }}"><div class="part-sec">					 
						 <img src="{{ asset($product->product_image) }}" alt=""/>
						 <div class="part-info">
							 <a href="#"><h5>{{ $product->product_name }}<span>TK.{{ $product->product_price }}</span></h5></a>
							 <a class="add-cart" href="single.html">Quick View</a>
							 <a class="qck" href="single.html">BUY NOW</a>
						 </div>
					 </div></a>
					 <a href="single.html"><div class="part-sec">					 
						 <img src="{{ asset('/') }}assets/images/a3.png" alt=""/>
						 <div class="part-info">
							 <a href="single.html"><h5>Cycling Helmets<span>$50.00</span></h5></a>
							 <a class="add-cart" href="single.html">Quick View</a>
							 <a class="qck" href="single.html">BUY NOW</a>
						 </div>
					 </div></a>
					 <a href="single.html"><div class="part-sec none2">					 
						 <img src="{{ asset('/') }}assets/images/a2.jpg" alt=""/>
						 <div class="part-info">
							 <a href="single.html"><h5>Handle Grips<span>$200.00</span></h5></a>
							 <a class="add-cart" href="single.html">Quick View</a>
							 <a class="qck" href="single.html">BUY NOW</a>
						 </div>
					 </div></a>
					 <a href="single.html"><div class="part-sec none1">					 
						 <img src="{{ asset('/') }}assets/images/a4.jpg" alt=""/>
						 <div class="part-info">
							 <a href="single.html"><h5>Hydration Pack Black<span>$200.00</span></h5></a>
							 <a class="add-cart" href="single.html">Quick View</a>
							 <a class="qck" href="single.html">BUY NOW</a>
						 </div>
					 </div></a>
					 <div class="clearfix"></div>
				 </div>
				 
				 <div class="parts2">
					 <a href="single.html"><div class="part-sec">					 
						 <img src="{{ asset('/') }}assets/images/a5.jpg" alt=""/>
						 <div class="part-info">
							 <a href="single.html"><h5>Electronics<span>$200.00</span></h5></a>
							 <a class="add-cart" href="single.html">Quick View</a>
							 <a class="qck" href="single.html">BUY NOW</a>
						 </div>
					 </div></a>
					 <a href="single.html"><div class="part-sec">					 
						 <img src="{{ asset('/') }}assets/images/a6.jpg" alt=""/>
						 <div class="part-info">
							 <a href="single.html"><h5>Bike Panniers <span>$200.00</span></h5></a>
							 <a class="add-cart" href="single.html">Quick View</a>
							 <a class="qck" href="single.html">BUY NOW</a>
						 </div>
					 </div></a>
					 <a href="single.html"><div class="part-sec none2">					 
						 <img src="{{ asset('/') }}assets/images/a7.jpg" alt=""/>
						 <div class="part-info">
							 <a href="single.html"><h5>Timbre Bell<span>$200.00</span></h5></a>
							 <a class="add-cart" href="single.html">Quick View</a>
							 <a class="qck" href="single.html">BUY NOW</a>
						 </div>
					 </div></a>
					 <a href="single.html"><div class="part-sec none1">					 
						 <img src="{{ asset('/') }}assets/images/a8.jpg" alt=""/>
						 <div class="part-info">
							 <a href="single.html"><h5>Back Stands<span>$200.00</span></h5></a>
							 <a class="add-cart" href="single.html">Quick View</a>
							 <a class="qck" href="single.html">BUY NOW</a>
						 </div>
					 </div></a>
					 <div class="clearfix"></div>
				 </div>
				 
				 <div class="parts3">
					 <a href="single.html"><div class="part-sec">					 
						 <img src="{{ asset('/') }}assets/images/a9.jpg" alt=""/>
						 <div class="part-info">
							 <a href="single.html"><h5>Disc Breaks<span>$200.00</span></h5></a>
							 <a class="add-cart" href="single.html">Quick View</a>
							 <a class="qck" href="single.html">BUY NOW</a>
						 </div>
					 </div></a>
					 <a href="single.html"><div class="part-sec">					 
						 <img src="{{ asset('/') }}assets/images/a10.jpg" alt=""/>
						 <div class="part-info">
							 <a href="#"><h5>Side Stands<span>$200.00</span></h5></a>
							 <a class="add-cart" href="single.html">Quick View</a>
							 <a class="qck" href="single.html">BUY NOW</a>
						 </div>
					 </div></a>
					 <a href="single.html"><div class="part-sec none2">					 
						 <img src="{{ asset('/') }}assets/images/a11.jpg" alt=""/>
						 <div class="part-info">
							 <a href="#"><h5>Mountain Bike Shoes<span>$200.00</span></h5></a>
							 <a class="add-cart" href="single.html">Quick View</a>
							 <a class="qck" href="single.html">BUY NOW</a>
						 </div>
					 </div></a>
					 <a href="single.html"><div class="part-sec none1">					 
						 <img src="{{ asset('/') }}assets/images/a12.jpg" alt=""/>
						 <div class="part-info">
							 <a href="single.html"><h5>Body Armours<span>$200.00</span></h5></a>
							 <a class="add-cart" href="single.html">Quick View</a>
							 <a class="qck" href="single.html">BUY NOW</a>
						 </div>
					 </div></a>
					 <div class="clearfix"></div>
				 </div>
				 
				 <div class="parts4">
					 <a href="single.html"><div class="part-sec bottom-line">					 
						 <img src="{{ asset('/') }}assets/images/a13.jpg" alt=""/>
						 <div class="part-info">
							 <a href="#"><h5>Mountain Bags<span>$200.00</span></h5></a>
							 <a class="add-cart" href="single.html">Quick View</a>
							 <a class="qck" href="single.html">BUY NOW</a>
						 </div>
					 </div></a>
					 <a href="v"><div class="part-sec bottom-line">					 
						 <img src="{{ asset('/') }}assets/images/a14.JPG" alt=""/>
						 <div class="part-info">
							 <a href="#"><h5>Bicycle Headlight<span>$200.00</span></h5></a>
							 <a class="add-cart" href="single.html">Quick View</a>
							 <a class="qck" href="single.html">BUY NOW</a>
						 </div>
					 </div></a>
					 <a href="single.html"><div class="part-sec bottom-line none2">					 
						 <img src="{{ asset('/') }}assets/images/a15.jpg" class="bottle" alt=""/>
						 <div class="part-info">
							 <a href="single.html"><h5>Water Bottles<span>$200.00</span></h5></a>
							 <a class="add-cart" href="single.html">Quick View</a>
							 <a class="qck" href="single.html">BUY NOW</a>
						 </div>
					 </div></a>
					 <a href="single.html"><div class="part-sec none1">					 
						 <img src="{{ asset('/') }}assets/images/a16.JPG" alt=""/>
						 <div class="part-info">
							 <a href="single.html"><h5>Bicycle Mirrors<span>$200.00</span></h5></a>
							 <a class="add-cart" href="single.html">Quick View</a>
							 <a class="qck" href="single.html">BUY NOW</a>
						 </div>
					 </div></a>
					 <div class="clearfix"></div>
				 </div>
				 
			 </div>
		 </div>
		 @endforeach
		 <div class="rsidebar span_1_of_left">
				 <section  class="sky-form">
					 <div class="product_right">
						 <h3 class="m_2">Categories</h3>
							<select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
								<option value="0">Frames</option>	
								<option value="1">Back Packs</option>
								<option value="2">Frame Bags</option>
								<option value="3">Panniers </option>
								<option value="4">Saddle Bags</option>								
						   </select>
						   <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
								<option value="1">Body Armour</option>
								<option value="2">Sub Category1</option>
								<option value="3">Sub Category2</option>
								<option value="4">Sub Category3</option>
						   </select>
						   <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
								<option value="1">Tools</option>
								<option value="2">Sub Category1</option>
								<option value="3">Sub Category2</option>
								<option value="4">Sub Category3</option>
						   </select>
						   <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
								<option value="1">Services</option>
								<option value="2">Sub Category1</option>
								<option value="3">Sub Category2</option>
								<option value="4">Sub Category3</option>
						   </select>
						   <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
								<option value="1">Materials</option>
								<option value="2">Sub Category1</option>
								<option value="3">Sub Category2</option>
								<option value="4">Sub Category3</option>
						   </select>
					  </div>
			 
					 <h4>components</h4>
					 <div class="row row1 scroll-pane">
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Frames(20)</label>
						 </div>
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Foks, Suspensions (48)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Breaks and Pedals (45)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tires,Tubes,Wheels (45)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Serevice Parts(12)</label>
						 </div>
					 </div>
					 <h4>Apparels</h4>
					 <div class="row row1 scroll-pane">
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Locks (20)</label>
						 </div>
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Speed Cassette (5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bike Pedals (7)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Handels (2)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (50)</label>
						 </div>
					 </div>
				 </section>
				 <section  class="sky-form">
						<h4>Brand</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Lezyne</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Marzocchi</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>EBC</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Oakley</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Jagwire</label>
									<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Yeti Cycles</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Vee Rubber</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Zumba</label>
								</div>
							</div>
				   </section>		      
				   <section  class="sky-form">
						<h4>Price</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>$50.00 and Under (30)</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100.00 and Under (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200.00 and Under (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$300.00 and Under (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$400.00 and Under (30)</label>
								</div>
							</div>
				   </section>		       
			 </div>	 
		 
		 <div class="clearfix"></div>
		 </div>
	  </div>
</div>
@endsection