<!--
  Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->
<?php 

 include "database.php"; 

 //start session

session_start();
 $link = databaseeditconnect("LEMonadestand20Laugh");

 

  mysqli_select_db($link, "ycpcmain");

//login
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
       header("location: https://www.ycpc.us/course" );
       die();
    }
}
else
{
   header("location: https://www.ycpc.us/course" );
   die();
}



//Setting the ype of page (Video Lecture, Quiz, Etc.)

  global $pagetype;

  $pagetype = "Courses";

  if (isset($_GET['id'])){

    global $pageid;

    $pageid = mysqli_real_escape_string($link, $_GET['id']);  
    $pagesarray = rowdatabaseretrieve("maincoursestorage", "mainid", $link);


    //if ((!sqldataitemexists("maincoursestorage", "linkref", databaseviewconnect(), 'mainid LIKE "' . $pageid . '";'))&&(!(floor(($id%1000)/100)==5))){
    if ((array_search($pageid, $pagesarray))==false){
      header("Location: ../courses");
      die();  
    }else{

      if  ($pageid < 10000){

        global $title;
        global $name;
        global $location;
        global $materialid;
        global $linkref;

        $materialid = $pageid;
        $title = idproccessor($pageid);
        $name = $title;
        $linkref = coursedatainitialize($pageid);

        if (!((floor(($pageid%1000)/100))==5)){

          $location = coursedatainitialize($pageid);        
        
        }

        if (!(isset($_COOKIE[$pageid]))){

          setcookie($pageid , "yes", time()+3600*35040, "/");
        }

      }else{

        header("Location: ../courses");
        die();

      }


    }

  }else{

    $title = "Courses Mainpage";

  }

 
  mysqli_close($link);
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

    <?php include "includecode/head.html"; ?>


  </head>

  <body style = "padding-bottom:0%; overflow-x: hidden;">  

    <?php 

      global $pageid;
     
      

      if (isset($pageid)){
          

        switch (floor($pageid/1000)){

          case(1):
include "includecode/courses/beginnersPythonNavbar.html"; 


        include "includecode/courses/beginnersPythonSidebar.html";

break;
case(5):
include "includecode/courses/begJavaNavbar.html"; 


        include "includecode/courses/begJavaSide.html";

break;
case(4):
include "includecode/courses/AdvWebDevNavbar.html"; 


        include "includecode/courses/AdvWebDevSide.html";

break;

case(3):
    include "includecode/courses/webFundNavbar.html"; 


        include "includecode/courses/webFundSide.html";

break;

}
        echo '





        <div class = "container extrapadding">

        <div class = "panel panel-default">';

      }else{
include "includecode/courses/coursenavbar.html"; 
        echo '<style> body{background-color:#0099CC !important;}</style><div class = "container" style = "padding-top:80px; width:100%; background-color:#0099CC !important;">

        <div class="container" style = " width:100%;"> ';

      } 
      //Create sidebar depending on course type
      if (isset($pageid)){

        switch (floor($pageid/1000)){

          case(1):
              $sideMenu = "includecode/courses/beginnersPythonSideMenu.html";
              break;
          case(3):
              $sideMenu = "includecode/courses/webFundamentalsSideMenu.html";
              break;
          case(4):
              $sideMenu = "includecode/courses/AdvWebDevSideMenu.html";
              break;
           case(5):
              $sideMenu = "includecode/courses/begJavaSideMenu.html";
              break;         
        }
      }
      //Create course site depending on course type
      if (isset($pageid)){

        switch (floor(($pageid%1000)/100)){

          case(1):
            include "includecode/quiz.html.php";
            include "includecode/mediasidebar.html";
            include "includecode/courses/quickNavigation.html";  
                        include "includecode/courses/game.html";
                        echo "</div> </div>";
                        include $sideMenu;
            break;

          case(2):
            include "includecode/studyguide.html.php";
            include "includecode/mediasidebar.html";
             include "includecode/courses/game.html";           
            include "includecode/courses/quickNavigation.html";    
            echo "</div> </div>";
                        include $sideMenu;
            break;

          case(3):
           
            include "includecode/video.html.php";
            include "includecode/mediasidebar.html";
             include "includecode/courses/game.html";           
            include "includecode/courses/quickNavigation.html";    
            echo "</div> </div>";
                        include $sideMenu;
            break;

          case(4):
            include "includecode/miniproject.html.php";
            include "includecode/courses/quickNavigation.html";    
            include "includecode/courses/game.html";      
            echo "</div> </div>";  
                        include $sideMenu; 
            break;

          case(5):
            include "includecode/quizcreator.html.php";
                        echo "</div> </div>";
                        include $sideMenu;
            break;

          } 
 
      }else{

        include "includecode/courses/coursehome.html.php";
        echo "</div> </div>";

      }

      
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