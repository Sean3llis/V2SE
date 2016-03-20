'use strict';

(function($){
  $(document).ready(function(){
    window.SE = window.SE || {};
    SE.refs = {
      cameraSVG: $('#camera-icon svg'),
      blackCameraSVG: $('#camera-icon #black-camera'),
      holder: $('#camera-icon'),
      hoverTarget: $('#camera-icon #hover-target')
    }
    setInterval(snapShot, 3000);



  });
function snapShot(){
  var refs = SE.refs;
  var $camera = refs.blackCameraSVG;
  var $bg = refs.holder;
  if(!$camera.is(':animated') && !$bg.is(':animated')){
    $camera.css('opacity', 1);
    $camera.css('visibility', 'visible');
    $bg.css('backgroundColor', '#282828');
    $camera.velocity('stop').velocity({ opacity: 0 }, {duration: 1000, easing: 'easeOut' , complete: function(){
      $camera.css('visibility', 'hidden');
    }});
    $bg.velocity('stop').velocity({ backgroundColor: '#F5F5F5' }, {duration: 1000, easing: 'easeOut' })
  }
}
})(jQuery)
