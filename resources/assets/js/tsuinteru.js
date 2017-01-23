function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function fileUpload() {
  var messageBox = $("#tsu-result > p"),
      uploadImageButton = $("#upload-image")
  uploadImageButton.addClass("loading").attr('disabled','disabled');
  var formData = new FormData();
  formData.append('picture', $('#img-select')[0].files[0]);
  $.ajax({
    url: '/api/v1/tsuinteru',
    type: 'POST',
    cache: false,
    data: formData,
    processData: false,
    contentType: false
  }).done(function(res) {
    uploadImageButton.removeClass("loading").removeAttr('disabled');
    if (res.hasOwnProperty("twintails")) {
      twintails = res.twintails

      if (twintails > 0.8) {
        messageBox.text('活捉一只双马尾')
      }
      else if (twintails > 0.15) {
        messageBox.text('感觉有些像诶，目测双马尾可能性为:' + (twintails*100).toFixed(2)+ '%.')
      }
      else {
        messageBox.text("你可能遇到了假的双马尾")
      }
    }
    else{
      messageBox.text("出现错误，请再次提交")
    }
  }).fail(function(err) {
    uploadImageButton.removeClass("loading").removeAttr('disabled');
    messageBox.text("出现错误，请刷新重试")
  });
}

$("#img-select").change(function(){
    readURL(this);
});

$("#img-select-button").click(function(){
  $("#img-select").click();
})

$("#upload-image").click(function(){
  fileUpload();
})
