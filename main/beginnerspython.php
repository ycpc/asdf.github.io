<!--
  Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->
  <!--Beginners Python Course Home Page-->
<?php 

 include "database.php"; 

session_start();
 $link = databaseeditconnect("LEMonadestand20Laugh");

 

  mysqli_select_db($link, "ycpcmain");


if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{

}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = md5(mysqli_real_escape_string($link, $_POST['password']));
     
    $checklogin = mysqli_query($link, "SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");
     
    if(mysqli_num_rows($checklogin) == 1)
    {
        $row = mysqli_fetch_array($checklogin);
        $email = $row['EmailAddress'];
         
        $_SESSION['Username'] = $username;
        $_SESSION['EmailAddress'] = $email;
        $_SESSION['LoggedIn'] = 1;
         

    }
    else
    {
       header("location: courselogin" );
       die();
    }
}
else
{
   header("location: courselogin" );
   die();
}

 
  mysqli_close($link);

?>
<?php

global $percent2; 
$pagesarray = array(1000,1301, 1302, 1303, 1201, 1101, 1401, 1304, 1305, 1306, 1204, 1104, 1404, 1307, 1308, 1309, 1207, 1107, 1407, 1310, 1311, 1312, 1210, 1110, 1410);

$percent2 = "10%"; 

$count = 0;
foreach($pagesarray as $val) {

    if (isset($_COOKIE[$val])){

      	$count = $count + 1;

    }
}

$count = ($count / 24) * 100;
$count = round($count, 2);
$percent2 = $count . '%';
 ?>

<!--
Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
PARTICULAR PURPOSE.
-->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  
    "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  

<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

  <head>

    <title>Beginners Python Course</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Eric Zhao and Youth Competitive Programming Circle contributors.">
<meta charset="UTF-8">

<link href = "../css/bootstrap.min.css" rel = "stylesheet" type="text/css">
<link href = "../css/courseStyles.css" rel = "stylesheet" type="text/css">
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href = "../css/perfect-scrollbar-0.4.10.min.css" type="text/html">
<link rel="apple-touch-icon-precomposed" href="img/squarelogo.png">
    <link rel="icon" href="img/squarelogo.png">
<style>

.sidebar-nav li a {
  color:rgb(90, 90, 90);
  background: #fff;
  display:block;
  text-decoration:none
}
#sidebar-nav li a:hover {color:#fff !important; background-color:#0099cc!important;}
.nopadding{
	padding-left:0% !important;
	padding-right:0% !important;
		margin-left:0% !important;
 	margin-right:0% !important;
}

</style>
<script type="text/javascript">
  (function(){window['reEmbedit'] = window['reEmbedit'] || {}; window['reEmbedit'].setupPlaylist = 
  window['reEmbedit'].setupPlaylist||function(){(window['reEmbeditQ']=window['reEmbeditQ']||[]).push(arguments)}
  var b=document.getElementsByTagName("script")[0],a=document.createElement("script");a.async=1;
  a.src="https://static.reembedit.com/data/scripts/g_852_fc6ea5e4b8e552b6a9b70c856f4e3732.js";
  b.parentNode.insertBefore(a,b)})();
</script>




  </head>

  <body style = "height:100%; padding-bottom:0%;">  

    <div class="navbar-wrapper">

	<div class="container">

		<div class="navbar navbar-default navbar-fixed-top" role="navigation">	
		<div class="container">

			<div class="navbar-header">

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

		            <span class="sr-only">Toggle navigation</span>

		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>

				</button>

				<a class="navbar-brand" rel="home" href="#" title="Youth Competitive Programming Circle" style = " padding-right:0px !important;"><img style="max-width:180px; margin-top: -12px;" src="../img/logocourse.png"></a>

			</div>

            <div class="navbar-collapse collapse" id = "navbar-right">

                <ul class="nav navbar-nav " style = "text-align:left">

                        <li><a href = "courses"><span class = "glyphicon glyphicon-chevron-left"></span>&nbsp;&nbsp;Back to Course Home</a></li>
<li><a href = "logout" style = "color:#ff7f7f"> Sign Out </a></li>


                </ul>

            </div>

		</div>

	</div>

</div>

</div>

    	

<div class = "container" style = "padding-top:80px; height:100%; width:100% !important;">

        <div class="container" style = "width:100%;"><div style = "padding:1%; ">

<div class = "row">
    <div class = "col-sm-5" style = "background-color: rgba(0, 153, 204,0.8) !important; text-align:center;">

</div>
<div class = "col-sm-7">
</div>
</div>




</div>
<div class = "row" style = "margin-left:0% !important; width:100%;">

	<div class = "col-sm-5"  style = "padding-left:5px; padding-right:5px;">
        <br>
    <div style = "background-color: rgba(0, 153, 204,0.8) !important; text-align:center;">
         </div>  <h1 style = "margin-top:-10px; margin-bottom: 20px; color:#FFFFFF; font-family:monoglyceride; font-size:370% !important; text-align:center;" id = "titletext"><b>Beginners Python:</b></h1> 
		<br><div class = "row panel panel-default">

			<div class = "panel-body" style = "padding:5%; color: #0099CC; padding-left:10%;">


<p style = "font-size:30px;">About This Course:</p>
<p style = "color: rgb(90, 90, 90);">The YCPC Beginners Python Course is designed to help people get into programming and programmers who have programmed before a fresh review of the basics. Python’s user-friendly syntax makes Python a great language to start off with, and will help build a firm foundation for future programming endeavors.</p>
			</div>

		</div>


<div class = "row panel panel-default">

            <div class = "panel-body" style = "padding:5%; color: #0099CC; padding-left:10%;">
<p style = "font-size:30px; color:#428bca;">Curriculum:</p>
    <ul style = "color:rgb(90, 90, 90); padding-left:20px;">
                
                <li>Intro, Variables, Assignments</li>
<li>Functions, Logic, and Conditionals</li>
<li>Interactive Applications, Buttons, Input Fields</li>
<li>Canvas Drawing, Timers</li>
<li>Basics of lists, Keyboard Control</li>
<li>Mouse input, more lists, dictionaries, images</li>
<li>Classes and Tiled Images</li>
<li>More classes, Sprites</li>
<li>Animation</li>
</ul>
            </div>

        </div>






	</div>

	<div class = "col-sm-6 col-sm-offset-1" style = "height:100%; color:white; padding-left:5px; padding-right:5px;">



				<div class="row panel panel-default" style = "color:rgb(90, 90, 90);">

			    	<div class = "panel-body">

				    	<div class="span5">

				          	<h4><p style="color:#428bca;">Beginners Python</p><a href = "courses/1301" class = "btn btn-success pull-right" style = "margin-left:16px;">Get Started</a></h4>

				          	<p>The gateway into programming: 12 video lectures, 4 study guides, 4 tests, and 4 miniprojects of pure python. Built by: Kevin Vuong, Eric Zhao, Nelson He, Jason Ku.</p>

				    	</div>

				      	<div class="span3">

				          Progress: <span class="pull-right strong"><?php global $percent2; $percent2 = $percent2;echo $percent2; ?></span>

							<div class="progress progress-striped active grayback">
				 
							  	<div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style = <?php global $percent2; global $percentage; $percentage = '"width: ' . $percent2 . ';"'; echo $percentage; ?>>
							  		

							    	<span class="sr-only"> <?php global $percent2; $percent2 = $percent2;echo $percent2; ?>Complete

							    	</span>

							    </div>
								    	
							</div>	

				      	</div>

			      	</div>		      	


			    </div>

<style type='text/css'>
#sidebar-nav li {color:rgb(90, 90, 90) !important; background-color:#fff !important;}
#sidebar-nav li a {color:rgb(90, 90, 90) !important; background-color:#fff !important;}
#sidebar-nav li a:hover {color:#fff !important; background-color:#0099cc !important;}
</style>
		<div class = "row" id = "lol" style="border-color:#fff; border-width:3px;padding:0%;">

  <ul class="sidebar-nav" style = "width:100% !important; z-index:10 !important;" id = "menu-toggle">

    <li class="sidebar-brand" style = "background-color:#fff !important; ">

        <a href="#" style = "background-color:#fff !important; ">Menu : Beginners Python</a>

    </li>


        <div class = "row" style = "background-color:#fff; margin-left:0%; margin-right:0%; border-color:#fff; border-top-color:#0099CC !important; border-width:1px; border-style:solid;">
        <div class = "col-sm-3 nopadding">
        <li class = "active"> 

          <a href="#">Unit 1   <span class="glyphicon arrow"></span></a>

          <ul class = "plainul">

            <li><a href="../courses/1301">Chapter 1</a></li>
            <li><a href="../courses/1302">Chapter 2</a></li>
            <li><a href="../courses/1303">Chapter 3</a></li>            
            <li><a href="../courses/1201">Unit Study Guide</a></li>
            <li><a href="../courses/1101">Unit Quiz</a></li>
            <li><a href="../courses/1401">Unit Miniproject</a></li>

          </ul>

        </li>
    </div>
    <div class = "col-sm-3 nopadding" style = "padding:left:5% !important; padding:right:5% !important;">
        <li class = "active"> 

          <a href="#">Unit 2   <span class="glyphicon arrow"></span></a>

          <ul class = "plainul">

            <li><a href="../courses/1304">Chapter 4</a></li>
            <li><a href="../courses/1305">Chapter 5</a></li>
            <li><a href="../courses/1306">Chapter 6</a></li>            
            <li><a href="../courses/1204">Unit Study Guide</a></li>
            <li><a href="../courses/1104">Unit Quiz</a></li>
            <li><a href="../courses/1404">Unit Miniproject</a></li>
        
          </ul>

        </li>
    </div>
    <div class = "col-sm-3 nopadding" style = "padding:left:5% !important; padding:right:5% !important;">
        <li class = "active"> 

          <a href="#">Unit 3   <span class="glyphicon arrow"></span></a>

          <ul class = "plainul">

            <li><a href="../courses/1307">Chapter 7</a></li>
            <li><a href="../courses/1308">Chapter 8</a></li>
            <li><a href="../courses/1309">Chapter 9</a></li>            
            <li><a href="../courses/1207">Unit Study Guide</a></li>
            <li><a href="../courses/1107">Unit Quiz</a></li>
            <li><a href="../courses/1407">Unit Miniproject</a></li>

          </ul>

        </li>
    </div>
    <div class = "col-sm-3 nopadding" style = "padding:left:5% !important; padding:right:5% !important;">
        <li class = "active"> 

          <a href="#">Unit 4   <span class="glyphicon arrow"></span></a>

          <ul class = "plainul">

            <li><a href="../courses/1310">Chapter 10</a></li>
            <li><a href="../courses/1311">Chapter 11</a></li>
            <li><a href="../courses/1312">Chapter 12</a></li>            
            <li><a href="../courses/1210">Unit Study Guide</a></li>
            <li><a href="../courses/1110">Unit Quiz</a></li>
            <li><a href="../courses/1410">Unit Miniproject</a></li>

          </ul>

        </li>
    </div>
      </li>

    </li>

  </ul>

</div>
	

<br>
<br>

			   </div>

</div>

</div> </div>   <?php include "includecode/bottom.html"; ?> <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="../js/jquery/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script src = "../js/courses.js"></script>


<script src="../js/jquery/jquery.metisMenu.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>

<script>

$(function(){

        var $window = $(window);
  var scrollTime = 0.4;
  var scrollDistance = 200;

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


	$(document).ready(function() {

		$(function(){
		  function stripTrailingSlash(str) {
		    if(str.substr(-1) == '/') {
		      return str.substr(0, str.length - 1);
		    }
		    return str;
		  }

		  var url = window.location.pathname;  
		  var activePage = stripTrailingSlash(url);

		  $('.nav li a').each(function(){  
		    var currentPage = stripTrailingSlash($(this).attr('href'));

		    if (activePage == currentPage) {
		      $(this).parent().addClass('active'); 
		    } 
		  });
		});

	});
</script>







    


    <!--Replacable image-->
  </body>  
<!--
Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
PARTICULAR PURPOSE.
-->
</html>