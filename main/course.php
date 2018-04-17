
<!--
  Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->

  <!--Signed out courses page-->
<?php 

include "database.php"; 

session_start();


if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
  header("location: courses" );
  die();

}


?>

<!--
Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
PARTICULAR PURPOSE.
-->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

        <title>YCPC Courses - Youth Competitive Programming Circle</title>
  <?php include "includecode/head.html"; ?>


</head>


  <body style = "padding-bottom:0%; overflow-x: hidden; background-color:#0099CC;">  


 <style>
 .lead{margin-top:-3%;font-size:15px;color:#8D8D8D;font-weight:400;}
 </style>

 <?php include "includecode/navbarStandard.html"; ?>




 <?php
 echo '<style> body{background-color:#0099CC !important;}</style><div  style = "background-image: url(img/topbackimage.png); background-repeat:repeat; background-attachment:fixed !important; height:100%; width:100%; position:relative; ">

<div  style = "background-color:rgba(0,153,204,0.5); height:100%; width:100%; position:relative; ">
 <div class = "container" style = "padding-top:80px; width:100%; background-color:none !important;">

 <div class="container" style = " width:100%;"> ';

 ?>
 <div class = "row" style = "margin-left:0% !important; margin-top:20px; width:100%; border-top-color:white; border-top-style:solid; border-top-width:0px; padding-bottom:2%; ">
   <h1 style = "margin-top:30px; margin-bottom: 40px; color:#FFFFFF; font-family:monoglyceride; text-align:center; line-height:80%" id = "titletext7"><b>YCPC Courses</b></h1> 

   
   <div class="row">
    <div class="col-lg-12">
      <div class="text-center">

        <a href="courselogin" class="btn btn-outline-inverse btn-lg btn-success" style = "width:auto; font-size:35px;font-family: 'sansthin'; color:#fff; text-overflow:ellipses">&nbsp;&nbsp;Get Started&nbsp;&nbsp;</a>
      </div>
    </div>
  </div><br><br>
  <div class = "col-lg-6">

   <div class = "row">



    <div class = "col-lg-11" style = "padding-left:0%; padding-right:0%;">

      <div class="container panel panel-default preview contenty1" style = "width:100%; margin-top:0px !important; text-align:center; overflow:hidden;">

        <div class="row">
          <div class="col-lg-6  ">

            <img class="img-responsive previewimage" style = "border-radius:12px !important;" src=" img/courses/coursevideo.png" alt="">

          </div>
          <div class="col-lg-6  previewpaddingtext">

            <div class="clearfix"></div>
            <h2 class="section-heading" style = "color:rgb(104, 104, 104); text-align:center;">Video Lectures</h2>
            <br>
            <p class="lead" style = "font-family: 'sansthin';">A 10-15 minute video lesson led by a student instructor that composes the basis of the course.</p>
          </div>

        </div>

      </div>

    </div>
    <div class="col-lg-1 col-lg-1 text-center">


    </div>
  </div>

  <div class = "row">
    <div class="col-lg-1 col-lg-1 text-center">


    </div>

    <div class = "col-lg-11" style = "padding-left:0%;  padding-right:0%;">

      <div class="container panel panel-default preview contenty1" style = " width:100%; text-align:center; overflow:hidden;">

        <div class="row">
          <div class="col-lg-6  previewpaddingtext">

            <div class="clearfix"></div>
            <h2 class="section-heading" style = "color:rgb(104, 104, 104); text-align:center;">Miniprojects</h2>
            <br>
            <p class="lead" style = "font-family: 'sansthin';">A project that helps introduce practical applications of the unit's topics, allowing a hands-on approach to mastering the course.</p>
          </div>
          <div class="col-lg-6 ">

            <img class="img-responsive previewimage" style = "border-radius:12px !important;"  src=" img/courses/miniproject.png" alt="">

          </div>
        </div>

      </div>

    </div>


  </div>
  
  <div class = "row">



    <div class = "col-lg-11" style = "padding-left:0%;  padding-right:0%;">

      <div class="container panel panel-default preview contenty1" style = " width:100%; text-align:center; overflow:hidden;">

        <div class="row">
          <div class="col-lg-6 previewpaddingtext">

            <img class="img-responsive previewimage" style = "border-radius:12px !important;" src=" img/courses/coursequiz.png" alt="">

          </div>
          <div class="col-lg-6  previewpaddingtext">

            <div class="clearfix"></div>
            <h2 class="section-heading" style = "color:rgb(104, 104, 104); text-align:center;">Quizzes</h2>
            <br>
            <p class="lead" style = "font-family: 'sansthin';">With multiple-choice, checkbox, and free response question types, quizzes provide a useful tool for self-assessment.</p>                    
          </div>

        </div>

      </div>

    </div>
    <div class="col-lg-1 col-lg-1 text-center">


    </div>
  </div>
  <div class = "row">
    <div class="col-lg-1 col-lg-1 text-center">


    </div>

    <div class = "col-lg-11" style = "padding-left:0%;  padding-right:0%;">

      <div class="container panel panel-default preview contenty1" style = " width:100%; text-align:center; overflow:hidden;">

        <div class="row">
          <div class="col-lg-6  previewpaddingtext">

            <div class="clearfix"></div>
            <h2 class="section-heading" style = "color:rgb(104, 104, 104); text-align:center;">Study Guide</h2>
            <br>
            <p class="lead" style = "font-family: 'sansthin';">A condensed overview of the unit's content and syntax, the study guide is a go-to reference for quick facts.</p>
          </div>
          <div class="col-lg-6 ">

            <img class="img-responsive previewimage" style = "border-radius:12px !important;"  src=" img/courses/coursestudy.png" alt="">

          </div>
        </div>

      </div>

    </div>


  </div>









</div>

<div class = "col-lg-offset-1 col-lg-5">

  <div class="row panel panel-default" style =" border-radius:20px!important;">

    <div class = "panel-body" style = 'border-radius:20px!important;'>

      <div class="row panel panel-default" style = 'border-radius:20px!important;'>

        <div class = "panel-body" style = 'border-radius:20px!important;'>

          <div class="span5">

            <h4><p style="color:#545454; margin-bottom:5px; margin-top:15px;">Beginners Python</h4>

            <p style = "margin-right:10px;">The YCPC Beginners Python Course is designed to help people get into programming and programmers who have programmed before a fresh review of the basics. Python’s user-friendly syntax makes Python a great language to start off with, and will help build a firm foundation for future programming endeavors.</p>

            <br>

            <p style = "margin-right:10px;"><b>Built by:</b> Kevin Vuong, Eric Zhao, Nelson He, Jason Ku</p>
          </div>

        </div>

      </div>

      <div class="row panel panel-default">

        <div class = "panel-body">

          <div class="span5">

            <h4><p style="color:#545454; margin-bottom:5px; margin-top:15px;">Web Fundamentals</h4>

            <p style = "margin-right:10px;">A course designed for students completely new to programming, this Web Fundamentals Course helps teach the basics of web development. In the course, students will learn HTML, CSS and JS - the basis of web development. The course will prepare students for more advanced server-side concepts like PHP and ASP.</p>
            <br>

            <p style = "margin-right:10px;"><b>Built by:</b> Victor Chan, Kevin Vuong, Eric Zhao, Camden Boshart</p>
          </div>

        </div>

      </div> 
      <div class="row panel panel-default">

        <div class = "panel-body">
          <div class="span5">

            <h4><p style="color:#545454; margin-bottom:5px; margin-top:15px;">Beginners Java</h4>

            <p style = "margin-right:10px;">YCPC's Java Course is geared towards those with a weak coding background. A bridge to Object Oriented Programming, Java's simple easy to learn syntax also makes the language very beginners-friendly. This course will not only establish a firm foundation but also cover advanced Object Oriented Programming concepts.</p>
            <br>

            <p style = "margin-right:10px;"><b>Built by:</b> Akash Kedia, Ashwin Gokhale, Jessica Ma, Poornima Velaverthipati, Pranav Garg, Yash Potdar, Sanjana Konduru, Kevin Vuong, Andrew Lu, Jason Ku</p>
          </div>

        </div>

      </div> 
    </div>
  </div>
</div>

</div>
</div>
</div>


<br>
<br>
<br>
<br>
<br>
<style>
.modal{
  overflow:auto;
}


.modal-dialog {
  width: 100% !important;
  height: 100% !important;
  padding: 0 !important;
  overflow:auto;
}

.modal-content {
  height: 100% !important;
  border-radius: 0 !important;
  overflow:auto;
}

.modal-body{
  width: 100% !important;
  height: 100% !important;
  overflow:auto;
  padding: 0 !important;
}

</style>
<div class="modal fade" id="1Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style = "margin-top:0%; margin-bottom:0%;">
    <div class="modal-content">
      <div class="modal-body" style = "padding-left:3% !important;">


        <h2>
          Web Site Terms and Conditions of Use<i style = 'color:red; position: absolute; top: 1%; right: 1%; font-size:40px; width:5%; height:5%;' data-dismiss="modal" class="fa fa-times-circle fa-3x pull-right"></i>
        </h2>

        <h3>
          1. Terms
        </h3>

        <p>
          By accessing this web site, you are agreeing to be bound by these 
          web site Terms and Conditions of Use, all applicable laws and regulations, 
          and agree that you are responsible for compliance with any applicable local 
          laws. If you do not agree with any of these terms, you are prohibited from 
          using or accessing this site. The materials contained in this web site are 
          protected by applicable copyright and trade mark law.
        </p>

        <h3>
          2. Use License
        </h3>

        <ol type="a">
          <li>
            Permission is granted to temporarily download one copy of the materials 
            (information or software) on Youth Competitive Programming Circle's web site for personal, 
            non-commercial transitory viewing only. This is the grant of a license, 
            not a transfer of title, and under this license you may not:

            <ol type="i">
              <li>modify or copy the materials;</li>
              <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
              <li>attempt to decompile or reverse engineer any software contained on Youth Competitive Programming Circle's web site;</li>
              <li>remove any copyright or other proprietary notations from the materials; or</li>
              <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
            </ol>
          </li>
          <li>
            This license shall automatically terminate if you violate any of these restrictions and may be terminated by Youth Competitive Programming Circle at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.
          </li>
        </ol>

        <h3>
          3. Disclaimer
        </h3>

        <ol type="a">
          <li>
            The materials on Youth Competitive Programming Circle's web site are provided "as is". Youth Competitive Programming Circle makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, Youth Competitive Programming Circle does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet web site or otherwise relating to such materials or on any sites linked to this site.
          </li>
        </ol>

        <h3>
          4. Limitations
        </h3>

        <p>
          In no event shall Youth Competitive Programming Circle or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on Youth Competitive Programming Circle's Internet site, even if Youth Competitive Programming Circle or a Youth Competitive Programming Circle authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.
        </p>

        <h3>
          5. Revisions and Errata
        </h3>

        <p>
          The materials appearing on Youth Competitive Programming Circle's web site could include technical, typographical, or photographic errors. Youth Competitive Programming Circle does not warrant that any of the materials on its web site are accurate, complete, or current. Youth Competitive Programming Circle may make changes to the materials contained on its web site at any time without notice. Youth Competitive Programming Circle does not, however, make any commitment to update the materials.
        </p>

        <h3>
          6. Links
        </h3>

        <p>
          Youth Competitive Programming Circle has not reviewed all of the sites linked to its Internet web site and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Youth Competitive Programming Circle of the site. Use of any such linked web site is at the user's own risk.
        </p>

        <h3>
          7. Site Terms of Use Modifications
        </h3>

        <p>
          Youth Competitive Programming Circle may revise these terms of use for its web site at any time without notice. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use.
        </p>

        <h3>
          8. Governing Law
        </h3>

        <p>
          Any claim relating to Youth Competitive Programming Circle's web site shall be governed by the laws of the State of California without regard to its conflict of law provisions.
        </p>

        <p>
          General Terms and Conditions applicable to Use of a Web Site.
        </p>



        <h2>
          Privacy Policy
        </h2>

        <p>
          Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.
        </p>

        <ul>
          <li>
            Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.
          </li>
          <li>
            We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law.       
          </li>
          <li>
            We will only retain personal information as long as necessary for the fulfillment of those purposes. 
          </li>
          <li>
            We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned. 
          </li>
          <li>
            Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date. 
          </li>
          <li>
            We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.
          </li>
          <li>
            We will make readily available to customers information about our policies and practices relating to the management of personal information. 
          </li>
        </ul>

        <p>
          We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained. 
        </p>        

      </div>
    </div>
  </div>
</div>
</div> </div>
<?php 





include "includecode/bottom.html";
include "includecode/footer.html"; 

?>




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