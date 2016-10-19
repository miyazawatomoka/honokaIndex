<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Honoka</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet"  href="{{ asset('assets/css/devPage.css') }}">
  </head>
  <body>
    <div class="bg">
      <div id="music-player" class="music-player">
        <div id="music-button" class="music-button">
          <span class="glyphicon glyphicon-music"></span>
        </div>
        <div id="player" class="player" data-hidden="true">
          <iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=330 height=450 src="http://music.163.com/outchain/player?type=0&id=395560509&auto=1&height=430"></iframe>
        </div>
      </div>
      <div id="footbar" class="footbar">
        <div class="us">
            <span>如果奇迹有颜色的话</span>
            <span>我想...</span>
            <span>那么一定是橙色吧...</span>
        </div>
        <div class="honokacc">
          <span>honoka.cc</span>
          <span>Email: honoka@honoka.cc</span>
        </div>
      </div>
    </div>
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/javascript/devPage.js') }}"></script>
  </body>
</html>
