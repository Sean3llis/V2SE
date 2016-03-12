(function($){
  $(document).ready(function(){
    var playing = true;
    var $slideshow = $('#slideshow');

    $('#play-pause').click(function(e){
      var $playPause = $(e.target);
      playing ? pauseSlides($playPause) : playSlides($playPause);
      playing = !playing;
    })

    function playSlides($playPause){
      $playPause.addClass('fa-pause');
      $playPause.removeClass('fa-play');
      $slideshow.carousel('cycle');
    }

    function pauseSlides($playPause){
      $playPause.removeClass('fa-pause');
      $playPause.addClass('fa-play');
      $slideshow.carousel('pause');
    }
  });
})(jQuery);
