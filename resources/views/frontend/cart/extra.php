@extends('frontend.master')

@section('title')
cart
@endsection


@section('body')
<div class="cart">
     <div class="container">
         <div class="cart-top">
            <a href="{{ route('/') }}">home</a>
         </div> 
            {{ route('parts') }}
         <div class="col-md-9 cart-items">
             <h2>My Shopping Bag (2)</h2>
                <script>$(document).ready(function(c) {
                    $('.close1').on('click', function(c){
                        $('.cart-header').fadeOut('slow', function(c){
                            $('.cart-header').remove();
                        });
                        });   
                    });
               </script>
             <div class="cart-header">
                 <div class="close1"><a href="#"></a></div>
                 <div class="cart-sec">
                 @foreach($cartProducts as $cartProduct)
                        <div class="cart-item cyc">
                             <img src="{{ asset($cartProduct->options->image) }}"/>
                        </div>
                       <div class="cart-item-info">
                             <h3>{{ $cartProduct->name }}<span>Model No: 3578</span></h3>
                             <h4><span>TK.</span>{{ $cartProduct->price }}</h4>
                             <p class="qty">Qty ::{{ $cartProduct->qty }}</p>
                             <input min="1" type="number" id="quantity" name="quantity" value="{{ $cartProduct->qty }}" class="form-control input-small">
                       </div>
                       <div class="clearfix"></div>
                        <div class="delivery">
                             <p>Service Charges:: Rs.100.00</p>
                             <span>Delivered in 2-3 bussiness days</span>
                             <div class="clearfix"></div>
                        </div>
                                   
                  </div>
             </div>
             <script>$(document).ready(function(c) {
                    $('.close2').on('click', function(c){
                            $('.cart-header2').fadeOut('slow', function(c){
                        $('.cart-header2').remove();
                    });
                    });   
                    });
             </script>
             <div class="cart-header2">
                 <div class="close2"> </div>
                  <div class="cart-sec">
                        <div class="cart-item">
                             <img src="{{ asset($cartProduct->options->image) }}"/>
                        </div>
                       <div class="cart-item-info">
                             <h3>{{ $cartProduct->name }}<span>Model No: 8768</span></h3>
                             <h4><span>TK. </span>{{ $cartProduct->price }}</h4>
                             <p class="qty">Qty ::</p>
                             <input min="1" type="number" id="quantity" name="quantity" value="{{ $cartProduct->qty }}" class="form-control input-small">
                       </div>
                       <div class="clearfix"></div>
                        <div class="delivery">
                             <p>Service Charges:: Rs.100.00</p>
                             <span>Delivered in 2-3 bussiness days</span>
                             <div class="clearfix"></div>
                        </div>                      
                  </div>
              </div>        
         </div>
         @endforeach   
         
         <div class="col-md-3 cart-total">
             <a class="continue" href="#">Continue to basket</a>
             <div class="price-details">
                 <h3>Price Details</h3>
                 <span>Total</span>
                 <span class="total">6200.00</span>
                 <span>Discount</span>
                 <span class="total">---</span>
                 <span>Delivery Charges</span>
                 <span class="total">150.00</span>
                 <div class="clearfix"></div>                
             </div> 
             <h4 class="last-price">TOTAL</h4>
             <span class="total final">6350.00</span>
             <div class="clearfix"></div>
             <a class="order" href="#">Place Order</a>
             <div class="total-item">
                 <h3>OPTIONS</h3>
                 <h4>COUPONS</h4>
                 <a class="cpns" href="#">Apply Coupons</a>
                 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
             </div>
            </div>
     </div>
</div>
@endsection