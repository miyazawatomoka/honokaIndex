$('#music-button').click(function() {
  player = $('#player')
  if (player.data('hidden') == true) {
    $('#player').fadeIn(500, function(){
      player.data('hidden', false)
    })
  }
  else {
    $('#player').fadeOut(500, function(){
      player.data('hidden', true)
    })
  }
});


(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-78784544-1', 'auto');
ga('send', 'pageview');
