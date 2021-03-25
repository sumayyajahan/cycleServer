@extends('frontend.homemaster')

@section('title')
Home
@endsection


@section('body')
<script src="{{ asset('/') }}assets/js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
        auto: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="parts">
     <div class="container">
         <h2>BIKE-PARTS ALL</h2>
         <div class="bike-parts-sec">
              <div class="bike-parts">
                 <div class="top">
                     <ul>
                         <li><a href="{{ route('/') }}">home</a></li>
                         <li><a href="#"> / </a></li>
                         <li><a href="#">parts</a></li>
                     </ul>               
                 </div>
                 <div class="bike-apparels">
                 @foreach($products as $product)
                     <div class="parts1">
                         <a href="{{ route('single', ['id'=>$product->id]) }}">
                         <div class="part-sec">  

                             <img src="{{ asset($product->product_image) }}" alt=""/>
                             <div class="part-info">
                                 <a href="#"><h5>{{$product->product_name}}<span>${{$product->product_price}}</span></h5></a>
                                 <a class="add-cart" href="{{ route('single', ['id'=>$product->id]) }}">Quick View</a>
                                 <a class="qck" href="{{ route('single', ['id'=>$product->id]) }}">BUY NOW</a>
                             </div>
                         </div></a>
                         <a href="{{ route('single', ['id'=>$product->id]) }}"><div class="part-sec">                    
                             <img src="{{ asset($product->product_image) }}" alt=""/>
                             <div class="part-info">
                                 <a href="#"><h5>{{$product->product_name}}<span>${{$product->product_price}}</span></h5></a>
                                 <a class="add-cart" href="{{ route('single', ['id'=>$product->id]) }}">Quick View</a>
                                 <a class="qck" href="{{ route('single', ['id'=>$product->id]) }}">BUY NOW</a>
                             </div>
                         </div></a>
                         <a href="{{ route('single', ['id'=>$product->id]) }}"><div class="part-sec none1">                  
                             <img src="{{ asset('/') }}assets/images/p2.jpg" alt=""/>
                             <div class="part-info">
                                 <a href="#"><h5>Speed Cassette<span>$200.00</span></h5></a>
                                 <a class="add-cart" href="{{ route('single', ['id'=>$product->id]) }}">Quick View</a>
                                 <a class="qck" href="single.html">BUY NOW</a>
                             </div>
                         </div></a>
                         <a href="{{ route('single', ['id'=>$product->id]) }}"><div class="part-sec none1">                  
                             <img src="{{ asset('/') }}assets/images/p4.JPG" alt=""/>
                             <div class="part-info">
                                 <a href="#"><h5>Road Bike Pedals<span>$200.00</span></h5></a>
                                 <a class="add-cart" href="{{ route('single', ['id'=>$product->id]) }}">Quick View</a>
                                 <a class="qck" href="{{ route('single', ['id'=>$product->id]) }}">BUY NOW</a>
                             </div>
                         </div></a>
                         <div class="clearfix"></div>
                     </div>
                     
                     <div class="parts2">
                         <a href="{{ route('single', ['id'=>$product->id]) }}"><div class="part-sec">                    
                             <img src="{{ asset('/') }}assets/images/p5.JPG" alt=""/>
                             <div class="part-info">
                                 <a href="#"><h5>Rear Derailleur<span>$200.00</span></h5></a>
                                 <a class="add-cart" href="{{ route('single', ['id'=>$product->id]) }}">Quick View</a>
                                 <a class="qck" href="{{ route('single', ['id'=>$product->id]) }}">BUY NOW</a>
                             </div>
                         </div></a>
                         <a href="{{ route('single', ['id'=>$product->id]) }}"><div class="part-sec">                    
                             <img src="{{ asset('/') }}assets/images/p6.JPG" alt=""/>
                             <div class="part-info">
                                 <a href="#"><h5>Race XC Crankset<span>$200.00</span></h5></a>
                                 <a class="add-cart" href="{{ route('single', ['id'=>$product->id]) }}">Quick View</a>
                                 <a class="qck" href="{{ route('single', ['id'=>$product->id]) }}">BUY NOW</a>
                             </div>
                         </div></a>
                         <a href="{{ route('single', ['id'=>$product->id]) }}"><div class="part-sec none1">                  
                             <img src="{{ asset('/') }}assets/images/p7.JPG" alt=""/>
                             <div class="part-info">
                                 <a href="#"><h5>Aero Handlebars<span>$200.00</span></h5></a>
                                 <a class="add-cart" href="{{ route('single', ['id'=>$product->id]) }}">Quick View</a>
                                 <a class="qck" href="{{ route('single', ['id'=>$product->id]) }}">BUY NOW</a>
                             </div>
                         </div></a>
                         <a href="{{ route('single', ['id'=>$product->id]) }}"><div class="part-sec none1">                  
                             <img src="{{ asset('/') }}assets/images/p8.jpg" alt=""/>
                             <div class="part-info">
                                 <a href="#"><h5>Grip Tires<span>$200.00</span></h5></a>
                                 <a class="add-cart" href="{{ route('single', ['id'=>$product->id]) }}">Quick View</a>
                                 <a class="qck" href="single.html">BUY NOW</a>
                             </div>
                         </div></a>
                         <div class="clearfix"></div>
                     </div>
                     
                     <div class="parts3">
                         <a href="{{ route('single', ['id'=>$product->id]) }}"><div class="part-sec">                    
                             <img src="{{ asset('/') }}assets/images/p9.jpg" alt=""/>
                             <div class="part-info">
                                 <a href="#"><h5>Bike Wheelset<span>$200.00</span></h5></a>
                                 <a class="add-cart" href="{{ route('single', ['id'=>$product->id]) }}">Quick View</a>
                                 <a class="qck" href="{{ route('single', ['id'=>$product->id]) }}">BUY NOW</a>
                             </div>
                         </div></a>
                         <a href="{{ route('single', ['id'=>$product->id]) }}"><div class="part-sec">                    
                             <img src="{{ asset('/') }}assets/images/p10.jpg" alt=""/>
                             <div class="part-info">
                                 <a href="#"><h5>MTB Chainring<span>$200.00</span></h5></a>
                                 <a class="add-cart" href="{{ route('single', ['id'=>$product->id]) }}">Quick View</a>
                                 <a class="qck" href="{{ route('single', ['id'=>$product->id]) }}">BUY NOW</a>
                             </div>
                         </div></a>
                         <a href="{{ route('single', ['id'=>$product->id]) }}"><div class="part-sec none1">                  
                             <img src="{{ asset('/') }}assets/images/p11.jpg" alt=""/>
                             <div class="part-info">
                                 <a href="#"><h5>Suspensions<span>$200.00</span></h5></a>
                                 <a class="add-cart" href="{{ route('single', ['id'=>$product->id]) }}">Quick View</a>
                                 <a class="qck" href="{{ route('single', ['id'=>$product->id]) }}">BUY NOW</a>
                             </div>
                         </div></a>
                         <a href="{{ route('single', ['id'=>$product->id]) }}"><div class="part-sec none1">                  
                             <img src="{{ asset('/') }}assets/images/p12.jpg" alt=""/>
                             <div class="part-info">
                                 <a href="#"><h5>Helmets<span>$200.00</span></h5></a>
                                 <a class="add-cart" href="{{ route('single', ['id'=>$product->id]) }}">Quick View</a>
                                 <a class="qck" href="{{ route('single', ['id'=>$product->id]) }}">BUY NOW</a>
                             </div>
                         </div></a>
                         <div class="clearfix"></div>
                     </div>
                     
                     <div class="parts4">
                         <a href="{{ route('single', ['id'=>$product->id]) }}"><div class="part-sec bottom-line">                    
                             <img src="{{ asset('/') }}assets/images/p13.jpg" alt=""/>
                             <div class="part-info">
                                 <a href="#"><h5>Middle Frames<span>$200.00</span></h5></a>
                                 <a class="add-cart" href="{{ route('single', ['id'=>$product->id]) }}">Quick View</a>
                                 <a class="qck" href="{{ route('single', ['id'=>$product->id]) }}">BUY NOW</a>
                             </div>
                         </div></a>
                         <a href="{{ route('single', ['id'=>$product->id]) }}"><div class="part-sec bottom-line">                    
                             <img src="{{ asset('/') }}assets/images/p14.jpg" alt=""/>
                             <div class="part-info">
                                 <a href="#"><h5>Brooks Saddle<span>$200.00</span></h5></a>
                                 <a class="add-cart" href="{{ route('single', ['id'=>$product->id]) }}">Quick View</a>
                                 <a class="qck" href="{{ route('single', ['id'=>$product->id]) }}">BUY NOW</a>
                             </div>
                         </div></a>
                         <a href="{{ route('single', ['id'=>$product->id]) }}"><div class="part-sec bottom-line none1">                  
                             <img src="{{ asset('/') }}assets/images/p15.jpg" alt=""/>
                             <div class="part-info">
                                 <a href="#"><h5>Motocross braces<span>$200.00</span></h5></a>
                                 <a class="add-cart" href="{{ route('single', ['id'=>$product->id]) }}">Quick View</a>
                                 <a class="qck" href="{{ route('single', ['id'=>$product->id]) }}">BUY NOW</a>
                             </div>
                         </div></a>
                         <a href="{{ route('single', ['id'=>$product->id]) }}"><div class="part-sec none1">                  
                             <img src="{{ asset('/') }}assets/images/p16.JPG" alt=""/>
                             <div class="part-info">
                                 <a href="#"><h5>Bike Pumps<span>$200.00</span></h5></a>
                                 <a class="add-cart" href="{{ route('single', ['id'=>$product->id]) }}">Quick View</a>
                                 <a class="qck" href="{{ route('single', ['id'=>$product->id]) }}">BUY NOW</a>
                             </div>
                         </div></a>
                         <div class="clearfix"></div>
                     </div>
                 @endforeach
                 </div>
             </div>
             @include('frontend.includes.left')          
             <div class="clearfix"></div>
         </div>
      </div>
</div>

<!--/banner-->
<!---<div id="cate" class="categories">
     <div class="container">
         <h3>CATEGORIES</h3>
         <div class="categorie-grids">
         @foreach($products as $product)
             <a href="{{ route('bicycles',['id'=>$product->id]) }}"><div class="col-md-4 cate-grid grid1">
                 <h4>FIXED / SINGLE SPEED</h4>
                 <p>Are you ready for the 27.5 Revloution ?</p>
                 <a class="store" href="{{ route('bicycles',['id'=>$product->id] ) }}">GO TO STORE</a>
             </div></a>
         @endforeach
             <a href=""><div class="col-md-4 cate-grid grid2">
                 <h4>PREMIMUM SERIES</h4>
                 <p>Exclusive Bike Components</p>
                 <a class="store" href="">GO TO STORE</a>
             </div></a>
             <a href=""><div class="col-md-4 cate-grid grid3">
                 <h4>CITY BIKES</h4>
                 <p>Street Playground</p>
                 <a class="store" href="">GO TO STORE</a>
             </div></a>
             <div class="clearfix"></div>

         </div>
     </div>
</div>

<div class="bikes"> 
         <h3>POPULAR BIKES</h3>
         <div class="bikes-grids">           
             <ul id="flexiselDemo1">
                 <li>
                     <img src="{{ asset('/') }}assets/images/bik1.jpg" alt=""/>
                     <div class="bike-info">
                         <div class="model">
                             <h4>FIXED GEAR<span>$249.00</span></h4>                             
                         </div>
                         <div class="model-info">
                             <select>
                              <option value="volvo">OPTION</option>
                              <option value="saab">Option</option>
                              <option value="opel">Option</option>
                              <option value="audi">Option</option>
                             </select>
                             <a href="#">BUY</a>
                         </div>                      
                         <div class="clearfix"></div>
                     </div>
                     <div class="viw">
                        <a href="#">Quick View</a>
                     </div>
                 </li>
                 <li>
                 <img src="{{ asset($product->product_image ) }}" alt=""/>
                 <div class="bike-info">
                         <div class="model">
                             <h4>BIG BOY ULTRA<span>$249.00</span></h4>                          
                         </div>
                         <div class="model-info">
                             <select>
                              <option value="volvo">OPTION</option>
                              <option value="saab">Option</option>
                              <option value="opel">Option</option>
                              <option value="audi">Option</option>
                             </select>
                             <a href="#">BUY</a>
                         </div>                      
                         <div class="clearfix"></div>
                     </div>
                     <div class="viw">
                        <a href="#">Quick View</a>
                     </div>
                 </li>
                 <li>
                     <img src="{{ asset('/') }}assets/images/bik3.jpg" alt=""/>
                     <div class="bike-info">
                         <div class="model">
                             <h4>ROCK HOVER<span>$300.00</span></h4>                             
                         </div>
                         <div class="model-info">
                             <select>
                              <option value="volvo">OPTION</option>
                              <option value="saab">Option</option>
                              <option value="opel">Option</option>
                              <option value="audi">Option</option>
                             </select>
                             <a href="#">BUY</a>
                         </div>                      
                         <div class="clearfix"></div>
                     </div>
                     <div class="viw">
                        <a href="#">Quick View</a>
                     </div>
                 </li>
                 <li>
                     <img src="{{ asset('/') }}assets/images/bik4.jpg" alt=""/>
                     <div class="bike-info">
                         <div class="model">
                             <h4>SANSACHG<span>$249.00</span></h4>                           
                         </div>
                         <div class="model-info">
                             <select>
                              <option value="volvo">OPTION</option>
                              <option value="saab">Option</option>
                              <option value="opel">Option</option>
                              <option value="audi">Option</option>
                             </select>
                             <a href=" ">BUY</a>
                         </div>                      
                         <div class="clearfix"></div>
                     </div>
                     <div class="viw">
                        <a href="bicycles.html">Quick View</a>
                     </div>
                 </li>
                 <li>
                     <img src="{{ asset('/') }}assets/images/bik5.jpg" alt=""/>
                     <div class="bike-info">
                         <div class="model">
                             <h4>JETT MAC<span>$340.00</span></h4>                           
                         </div>
                         <div class="model-info">
                             <select>
                              <option value="volvo">OPTION</option>
                              <option value="saab">Option</option>
                              <option value="opel">Option</option>
                              <option value="audi">Option</option>
                             </select>
                             <a href="bicycles.html">BUY</a>
                         </div>                      
                         <div class="clearfix"></div>
                     </div>
                     <div class="viw">
                        <a href="">Quick View</a>
                     </div>
                 </li>
                 <li>
                      <img src="{{ asset('/') }}assets/images/bik6.jpg" alt=""/>
                      <div class="bike-info">
                         <div class="model">
                             <h4>SANSACHG<span>$249.00</span></h4>                           
                         </div>
                         <div class="model-info">
                             <select>
                              <option value="volvo">OPTION</option>
                              <option value="saab">Option</option>
                              <option value="opel">Option</option>
                              <option value="audi">Option</option>
                             </select>
                             <a href="">BUY</a>
                         </div>                      
                         <div class="clearfix"></div>
                     </div>
                     <div class="viw">
                        <a href="">Quick View</a>
                     </div>
                 </li>
            </ul>
                         
    </div>
</div>

<div class="contact">
    <div class="container">
        <h3>CONTACT US</h3>
        <p>Please contact us for all inquiries and purchase options.</p>
        <form method="POST" action="{{ route('contact') }}">
          {{ csrf_field() }}
             <input type="text" name="name" placeholder="NAME" required="">
             <input type="text" name="surname" placeholder="SURNAME" required="">           
             <input class="user" type="text" name="email" placeholder="USER@DOMAIN.COM" required=""><br>
             <textarea placeholder="MESSAGE" name="message" 
             ></textarea>
             <input type="submit" name="btn" value="SEND">
        </form>
    </div>
</div>--->


@endsection