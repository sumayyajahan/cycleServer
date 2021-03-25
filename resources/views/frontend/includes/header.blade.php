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


<div class="banner-bg banner-sec">  
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
                          
                          <li class="dropdown1"><a href="{{ route('bicycles') }}">BICYCLES</a>
                              <ul class="dropdown2">
                                    <li><a href="{{ route('bicycles') }}">FIXED / SINGLE SPEED</a></li>
                                    <li><a href="{{ route('bicycles') }}">CITY BIKES</a></li>
                                    <li><a href="{{ route('bicycles') }}">PREMIMUN SERIES</a></li>                                              
                              </ul>
                          </li>

                          <li class="dropdown1"><a href="{{ route('parts') }}">PARTS</a>
                             <ul class="dropdown2">
                                    <li><a href="{{ route('parts') }}">CHAINS</a></li>
                                    <li><a href="{{ route('parts') }}">TUBES</a></li>
                                    <li><a href="{{ route('parts') }}">TIRES</a></li>
                                    <li><a href="{{ route('parts') }}">DISC BREAKS</a></li>
                              </ul>
                         </li>      
                         <li class="dropdown1"><a href="{{ route('accessories') }}">ACCESSORIES</a>
                             <ul class="dropdown2">
                                    <li><a href="{{ route('accessories') }}">LOCKS</a></li>
                                        <li><a href="{{ route('accessories') }}">HELMETS</a></li>
                                        <li><a href="{{ route('accessories') }}">ARM COVERS</a></li>
                                        <li><a href="{{ route('accessories') }}">JERSEYS</a></li>
                              </ul>
                         </li>               
                         <li class="dropdown1"><a href="{{ route('accessories') }}">EXTRAS</a>
                             <ul class="dropdown2">
                                    <li><a href="{{ route('accessories') }}">CLASSIC BELL</a></li>
                                    <li><a href="{{ route('accessories') }}">BOTTLE CAGE</a></li>
                                    <li><a href="{{ route('accessories') }}">TRUCK GRIP</a></li>
                              </ul>
                         </li>
                          <a class="shop" href="{{ route('cart') }}"><img src="{{ asset('/') }}assets/images/cart.png" alt=""/></a>

                          
                      </ul>
                 </div>
                 <div class="clearfix"></div>
             </div>
      </div>                 
</div>