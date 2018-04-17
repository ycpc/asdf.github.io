<?php include "webComponents/copyrightNotice.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="google-site-verification" content="F9jFXchA0UmR6INYHd72FBpHd_KwqghtGiSsbqt2QFo" />
  <title>Youth Competitive Programming Circle</title>
  <meta name="description" content="Youth Competitive Programming Circle's Home Page">
  <?php include "webComponents/genericHeader.php"; include "webComponents/indexThemeHeader.php"; include "webComponents/jsReferences.php";?>
  <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
  <div id="fb-root"></div>
</head>

<body style = "overflow-x: hidden; overflow-y: scroll !important; zoom:1;">
  <div id="fb-root"></div>
  <?php include "webComponents/navbarStandard.php"; ?>
  <?php include "webComponents/index/header.php"; ?>
  <?php include "webComponents/index/whoarewe.php"; ?>
  <?php include "webComponents/index/sponsors.php"; ?>
  <?php include "webComponents/index/mcc.php"; ?>
  <?php include "webComponents/index/bridge.php"; ?>
  <?php include "webComponents/index/courses.php"; ?>
  <?php include "webComponents/contactFormFooter.php";?>
  <?php include "webComponents/fatFooter.php";?>
  
<!-- Quantcast Tag -->
<script type="text/javascript">
var _qevents = _qevents || [];

(function() {
var elem = document.createElement('script');
elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
})();

_qevents.push({
qacct:"p-ShPtXD9GUV605"
});
</script>

<noscript>
<div style="display:none;">
<img src="//pixel.quantserve.com/pixel/p-ShPtXD9GUV605.gif" border="0" height="1" width="1" alt="Quantcast"/>
</div>
</noscript>
<!-- End Quantcast tag -->

 
  <script src="js/thirdPartyScripts/wow.min.js"></script>  
  <script>
    if(window.location.hash) { 
      //set the value as a variable, and remove the #
      var hash_value = window.location.hash.replace('#', '');
     
      //show the value with an alert pop-up
      if(hash_value == "donate"){
        document.getElementById('donate').style.visibility='visible';
        document.getElementById('donate').style.position='static';
        document.getElementById('bluetrans').style.paddingTop='0px';
      }
    }
  </script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-93626039-1', 'auto');
    ga('send', 'pageview');

  </script>
</body>
</html>
