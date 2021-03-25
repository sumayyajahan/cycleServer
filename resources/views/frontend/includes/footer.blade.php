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

<div class="footer">
     <div class="container wrap">
        <div class="logo2">
             <a href="{{ route('/') }}"><img src="{{ asset('/') }}assets/images/logo2.png" alt=""/></a>
        </div>
        <div class="ftr-menu">
             <ul>
                 <li><a href="{{ route('bicycles') }}">BICYCLES</a></li>
                 <li><a href="{{ route('parts') }}">PARTS</a></li>
                 <li><a href="{{ route('accessories') }}">ACCESSORIES</a></li>
                 <li><a href="{{ route('accessories') }}">EXTRAS</a></li>
             </ul>
        </div>
        <div class="clearfix"></div>
     </div>
</div>