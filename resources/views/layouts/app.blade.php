<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet"  href="{{ asset('/css/app.css') }}">
    <title></title>
  </head>
  <body>
    <div class = "app-header">
      <div class="mask">
      </div>
      <div class="nav">
        <ul>
          <li><a href="{{ url('/') }}">主站</a></li>
          <li><a href="http://www.baidu.com">占位</a></li>
        </ul>
      </div>
      <div class="uns-box">
        @if (Auth::guest())
          <ul>
            <li><a href="{{ url('/login') }}">登陆</a></li>
            <li><a href="{{ url('/register') }}">注册</a></li>
          </ul>
        @else
          <a href="www.baidu.com">
            <img class="avatar-img ui circular image" src="{{ Auth::user()->getAvatar() }}">
          </a>
        @endif
      </div>
    </div>

    @yield('content')

    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/vendor.js') }}"></script>
  </body>
</html>
