'use strict';

window.SE = window.SE || {};
(function($){
  $(document).ready(function(){
    SE.refs = {
      cameraSVG: $('#camera-icon svg'),
      blackCameraSVG: $('#camera-icon #black-camera'),
      holder: $('#camera-icon'),
      hoverTarget: $('#camera-icon #hover-target'),
      towerLights: $('#tower-icon #lights'),
      towerBg: $('#tower-icon #tower-bg')
    }
    setInterval(SE.snapShot, 3000);
    SE.lightsOn();


  });
  SE.snapShot = function(){
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

  SE.lightsOn = function(){
    var refs = SE.refs;
    var $lights = refs.towerLights;
    var $bg = refs.towerBg;
    var prop = { opacity: 1 };
    var op = { loop: true, delay: 4000 };
    $lights.velocity(prop, op);
    // $bg.velocity(prop, op);
  }
})(jQuery)
