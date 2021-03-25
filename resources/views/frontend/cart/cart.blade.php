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
            @php($sum=0)
            @foreach($cartProducts as $cartProduct)
            <div class="cart-header">
                <div class="close1"><a href="{{ route('delete-cart', ['id' => $cartProduct->rowId]) }}"></a></div>
                <div class="cart-sec">

                    <div class="cart-item cyc">
                        <img src="{{ asset($cartProduct->options->image) }}"/>
                    </div>
                    <div class="cart-item-info">
                        <h3>{{ $cartProduct->name }}<span>Model No: 3578</span></h3>
                        <h4><span>TK.</span>{{ $cartProduct->price }}</h4>
                        <p class="qty">Qty ::{{ $cartProduct->qty }}</p>
                        <h4><span>TOTAL PRICE:</span>{{ $total = $cartProduct->price*$cartProduct->qty }}</h4>
                        <form action="{{ route('update-cart') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="col-sm-2">
                            <input min="1" type="number" id="quantity" name="quantity" value="{{ $cartProduct->qty }}" class="form-control input-small">
                            <input min="1" type="hidden" name="rowId" value="{{ $cartProduct->rowId }}" class="form-control input-small">
                            <input type="submit" name="btn" value="Update" class="form-control input-small">
                            </div>

                        </form>
                    </div>
                    <div class="clearfix"></div>
                    <div class="delivery">
                        <p>Service Charges:: Rs.100.00</p>
                        <span>Delivered in 2-3 bussiness days</span>
                        <div class="clearfix"></div>
                    </div>
                    <script>$(document).ready(function(c) {
                            $('.close2').on('click', function(c){
                                $('.cart-header2').fadeOut('slow', function(c){
                                    $('.cart-header2').remove();
                                });
                            });
                        });
                    </script>

                </div>
                @php($sum = $sum + $total)
                @endforeach
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>Total Price</th>
                    <td>TK.{{ $sum }}</td>
                </tr>
                <tr>
                    <th>Vat</th>
                    <td>TK.{{ $vat = $sum * 0.15 }}</td>
                </tr>
                <tr>
                    <th>Grand Total</th>
                    <td>TK.{{ $grandTotal = $sum+$vat }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-3 cart-total">
            <a class="continue" href="{{ route('/') }}">Continue to basket</a>
            <div class="price-details">
                <h3>Price Details</h3>
                <span>Total</span>
                <span class="total">{{ $sum }}</span>
                <span>Discount</span>
                <span class="total">---</span>
                <span>Vat</span>
                <span class="total">{{ $vat = $sum * 0.15 }}</span>
                <span>Delivery Charges</span>
                <span class="total">{{ $delivery_charge = 150.00 }}</span>
                <div class="clearfix"></div>
            </div>
            <h4 class="last-price">TOTAL</h4>
            <span class="total final">{{ $Total = $sum+$vat+$delivery_charge }}</span>
            <div class="clearfix"></div>
            <a class="order" href="{{ route('checkout') }}">Place Order</a>
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