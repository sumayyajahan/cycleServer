<script src="{{asset('/')}}assets/js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="banner-bg banner-bg1">  
      <div class="container">
             <div class="header">
                   <div class="logo">
                         <a href="{{ route('/') }}"><img src="{{ asset('/') }}assets/images/logo.png" alt=""/></a>
                   </div>                            
                  <div class="top-nav">                                      
                        <label class="mobile_menu" for="mobile_menu">
                        <span>Menu</span>
                        </label>
                        <input id="mobile_menu" type="checkbox">
                       <ul class="nav">
                        @foreach($categories as $category)
                          <li class="dropdown1"><a href='{{ route('bicycles', ['id'=>$category->id]) }}'>{{ $category->category_name }}</a>
                              @if(! $category->subCategory->isEmpty())
                              <ul class="dropdown2">
                                @foreach($category->subCategory as $subcategory)
                                    <li><a href='{{ route('bicycles', ['id'=>$subcategory->id]) }}'>{{ $subcategory->subcategory_name }}</a></li> 
                                @endforeach
                              </ul>
                              @endif  
                          </li>
                        @endforeach
                          <a class="shop" href="{{ route('add-to-cart') }}"><img src="{{ asset('/') }}assets/images/cart.png" alt=""/></a>
                      </ul>
                 </div>
                 <div class="clearfix"></div>
             </div>
      </div>     
     <div class="caption">
         <div class="slider">
                       <div class="callbacks_container">
                           <ul class="rslides" id="slider">
                                <li><h1>HANDMADE BICYCLE</h1></li>
                                <li><h1>SPEED BICYCLE</h1></li> 
                                <li><h1>MOUINTAIN BICYCLE</h1></li> 
                          </ul>
                          <p>You <span>create</span> the <span>journey,</span> we supply the <span>parts</span></p>
                          <a class="morebtn" href="{{ route('bicycles') }}">SHOP BIKES</a>
                      </div>
                  </div>
     </div>
     <div class="dwn">
        <a class="scroll" href="#cate"><img src="{{ asset('/') }}assets/images/scroll.png" alt=""/></a>
     </div>              
</div>