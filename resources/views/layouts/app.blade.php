<html>

  <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('js/accordion.js') }}"></script>
  </head>

  <body>
    <div class="navigationtop">
      <div class="wrap">
        <div class="homepage">
          Mercian Arms Industries
        </div>
      </div>
    </div>
    <div class="navigation2top">
      <div class="wrap">
        <a href="{{route('dashboard.index')}}">Home</a>
        <a href="{{route('products.index')}}">Products</a>
        <a href="{{route('affiliated.index')}}">Affiliated Companies</a>
        <a href="{{route('restrictions.index')}}">IDM Restrictions</a>
      </div>
    </div>
    <div class="universalbody">
      <div class="homepagedivider">
        @yield('main')
        @yield('create')
      </div>
    </div>
  </body>

</html>
