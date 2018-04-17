<!--
  Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
   THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
   KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
   IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
   PARTICULAR PURPOSE.
   -->
   <!--Libraries tab on website-->
 <?php
 	global $title;
	global $pagetype;
	$title = "Bridge Documentation";
	$pagetype = "Clubs";
 ?>
 <!--
 	CSS from https://getbootstrap.com/components/-->
 <!DOCTYPE html>
 <html>
 	<head>
 		<style type="css">body,html{background-color:white !important; }html,body
 {
    width: 100%;
     height: 100%;
     margin: 0px;
     padding: 0px;
     overflow-x: hidden; 
 }</style>
 		<?php 
 			include "includecode/head.html"; 
 		?>
 	</head>
 
 	<body style = "background-color:white !important;  padding-bottom:0%;">

 
       <?php include "includecode/navbarStandard.html"; ?>
 
 		
 		<?php
 			echo "<div style = 'margin-top:50px !important;'";
 			include "includecode/bridgeComponents.html";
 		?><br><br><br>
 <?php include "includecode/bottom.html"; ?>
 
 			</div>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
     <script>
 $(function() {
     var $window = $(window); //Window object
   var scrollTime = 0.3;
   var scrollDistance = 280;
 
     var scrollTween;
     $window.on("mousewheel DOMMouseScroll", function(event) {
         if (!($('.modal').is(':visible'))) { // don't interfere if a modal is open
             event.preventDefault();
 
            var delta = event.originalEvent.wheelDelta / 120 || -event.originalEvent.detail / 3;
            var scrollTop = $window.scrollTop();
            var finalScroll = scrollTop - parseInt(delta * scrollDistance);
            
            scrollTween = TweenMax.to($window, scrollTime, {
                scrollTo: {
                    y: finalScroll,
                    autoKill: true
                },
               ease: Power1.easeOut,
               overwrite: 5
            });
         }
     });
     
     // if you need to add click handlers or whatever, do it here
     
 });
     </script>
 	</body>
  
 </html>
