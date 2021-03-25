@extends('frontend.master')

@section('title')
bicycles
@endsection


@section('body')
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
                
                     <div class="parts1">
                         @foreach($products as $product)
                         <a href="{{ route('single', ['id'=>$product->id]) }}">
                         <div class="part-sec">  

                             <img src="{{ asset($product->product_image) }}" alt=""/>
                             <div class="part-info">
                                 <a href="#"><h5>{{$product->product_name}}<span>${{$product->product_price}}</span></h5></a>
                                 <a class="add-cart" href="{{ route('single', ['id'=>$product->id]) }}">Quick View</a>
                                 <a class="qck" href="{{ route('single', ['id'=>$product->id]) }}">BUY NOW</a>
                             </div>
                         </div></a>
                         @endforeach
                        
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
                 
                 </div>
             </div>
             @include('frontend.includes.left')          
             <div class="clearfix"></div>
         </div>
      </div>
</div>
@endsection