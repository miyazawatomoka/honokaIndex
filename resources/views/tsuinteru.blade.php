<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tsuinteru</title>
    <link rel="stylesheet"  href="{{ asset('/css/app.css') }}">
  </head>
  <body>
    <div class="tsu-container ui centered grid ">
      <div class="tsu-uploader">
        <div class="row">
          <div id="uploader">
            <div class="uploader-preview-container">
              <img id="preview" class="uploader-img ui centered rounded image"/>
            </div>
            <div class="uploader-button-group">
              <input id="img-select" type="file" accept="image/png,image/jpeg,image/gif/">
              <button id = "img-select-button" class="ui primary button">选择图片</button>
              <button class="ui primary button" id = "upload-image">上传图片</button>
            </div>
          </div>
        </div>
        <div id="tsu-result" class="row tsu-result">
          <p>限定上传文件类型: jpg, gif, png</p>
        </div>
      </div>
    </div>
    <div class="tsu-footbar">
      <div class="tsu-foot-info">
        <span>honoka.cc</span>
        <span>不保证稳定，随时会宕</span>
        <span>Email: honoka@honoka.cc</span>
      </div>
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/vendor.js') }}"></script>
  </body>
</html>
