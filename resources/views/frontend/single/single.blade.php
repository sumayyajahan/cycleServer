@extends('frontend.master')

@section('title')
parts
@endsection


@section('body')
<div class="product">
     <div class="container">
         <div class="ctnt-bar cntnt">
             <div class="content-bar">
                 <div class="single-page">
                     <div class="product-head">
                        <a href="{{ route('/') }}">Home</a> <span>::</span>   
                        </div>
                     <!--Include the Etalage files-->
                        <link rel="stylesheet" href="{{ asset('/') }}assets/css/etalage.css">
                        <script src="{{ asset('/') }}assets/js/jquery.etalage.min.js"></script>
                <script>
            jQuery(document).ready(function($){

                $('#etalage').etalage({
                    thumb_image_width: 400,
                    thumb_image_height: 400,
                    source_image_width: 800,
                    source_image_height: 1000,
                    show_hint: true,
                    click_callback: function(image_anchor, instance_id){
                        alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                    }
                });

            });
        </script>
                        <!--//details-product-slider-->
                     <div class="details-left-slider">
                         <div class="grid images_3_of_2">
                          <ul id="etalage">
                            <li>
                                <a href="optionallink.html">
                                    <img class="etalage_thumb_image" src="{{ asset($product->product_image) }}" class="img-responsive" />
                                    <img class="etalage_source_image" src="{{ asset($product->product_image) }}" class="img-responsive" title="" />
                                </a>
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="{{ asset($product->product_image) }}" class="img-responsive" />
                                <img class="etalage_source_image" src="{{ asset($product->product_image) }}" class="img-responsive" title="" />
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="{{ asset($product->product_image) }}" class="img-responsive"  />
                                <img class="etalage_source_image" src="{{ asset($product->product_image) }}"class="img-responsive"  />
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="{{ asset($product->product_image) }}" class="img-responsive"  />
                                <img class="etalage_source_image" src="{{ asset($product->product_image) }}"class="img-responsive"  />
                            </li>
                        </ul>
                        </div>
                     </div>
                     <div class="details-left-info">
                            <h3>{{ $product->product_name }}</h3>
                                <h4>Model No: 3498</h4>
                            <h4></h4>
                            <p><label>TK.</label> {{ $product->product_price }} <a href="#">Click for offer</a></p>
                            <p class="size">SIZE ::</p>
                            <a class="length" href="#">XS</a>
                            <a class="length" href="#">M</a>
                            <a class="length" href="#">S</a>
                            <div class="btn_form">
                            <form action="{{ route('add-to-cart') }}" method="post">
                               {{ csrf_field() }}
                                <a href="{{ route('add-to-cart') }}">buy now</a>
                                
                                <div class="col-sm-2">
                                <input class="form-control" type="number" name="qty" value="1" min="1">
                                </div>

                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="submit" name="submit" value="Add to cart" class="btn">
                            </form>
                            </div>
                            <div class="bike-type">
                            <p>TYPE  ::<a href="#">MOUNTAIN BIKE</a></p>
                            <p>BRAND  ::<a href="#">SPORTS SCOTTY</a></p>
                            </div>
                            <h5>Description  ::</h5>
                            <p class="desc">{{ $product->long_description }}</p>
                     </div>
                     <div class="clearfix"></div>                   
                  </div>
              </div>
          </div>
          <div class="single-bottom2">
              <h6>Related Products</h6>
             <div class="product">
                     <div class="product-desc">
                          <div class="product-img product-img2">
                             <img src="{{ asset('/') }}assets/images/s1.jpg" class="img-responsive " alt=""/>
                         </div>
                         <div class="prod1-desc">
                                <h5><a class="product_link" href="{{ route('bicycles') }}">Road Bike</a></h5>
                                <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>                                   
                         </div>
                         <div class="clearfix"></div>
                     </div>
                     <div class="product_price">
                            <span class="price-access">$300.51</span>                               
                            <a class="button1" href="{{ route('add-to-cart') }}"><span>Add to cart</span></a>
                     </div>
                        <div class="clearfix"></div>
             </div>
             <div class="product">
                     <div class="product-desc">
                          <div class="product-img product-img2">
                             <img src="{{ asset('/') }}assets/images/s2.jpg" class="img-responsive " alt=""/>
                         </div>
                         <div class="prod1-desc">
                                <h5><a class="product_link" href="{{ route('bicycles') }}">Mountain Bike</a></h5>
                                <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>                                   
                         </div>
                         <div class="clearfix"></div>
                     </div>
                     <div class="product_price">
                            <span class="price-access">$1500.51</span>                              
                            <a class="button1" href="{{ route('add-to-cart') }}"><span>Add to cart</span></a>
                     </div>
                  <div class="clearfix"></div>
             </div>
             <div class="product">
                     <div class="product-desc">
                          <div class="product-img product-img2">
                             <img src="{{ asset('/') }}assets/images/s3.jpg" class="img-responsive " alt=""/>
                         </div>
                         <div class="prod1-desc">
                                <h5><a class="product_link" href="{{ route('bicycles') }}">Single Speed Bike</a></h5>
                                <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>                                   
                         </div>
                         <div class="clearfix"></div>
                     </div>
                     <div class="product_price">
                            <span class="price-access">$800.51</span>                               
                            <a class="button1" href="{{ route('add-to-cart') }}"><span>Add to cart</span></a>
                     </div>
                 <div class="clearfix"></div>
              </div>
         </div> 
     </div>
</div>
@endsection