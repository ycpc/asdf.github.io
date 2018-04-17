$(function(){
  var $window = $(window);
  var scrollTime = 0.3;
  var scrollDistance = 280;
  $window.on("mousewheel DOMMouseScroll", function(event){
    event.preventDefault(); 
    var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
    var scrollTop = $window.scrollTop();
    var finalScroll = scrollTop - parseInt(delta*scrollDistance);
    TweenMax.to($window, scrollTime, {
      scrollTo : { y: finalScroll, autoKill:true },
        ease: Power1.easeOut,
        overwrite: 5              
      });
  });
});