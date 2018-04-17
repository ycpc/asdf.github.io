<!--
  Copyright (c) 2014, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->
<?php 

 include "database.php"; 

session_start();
 $link = databaseeditconnect("LEMonadestand20Laugh");

 

  mysqli_select_db($link, "ycpcmain");


if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
    header("location: courses" );
       die();
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
     
    $checklogin = mysqli_query($link, "SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");
     
    if(mysqli_num_rows($checklogin) == 1)
    {
        $row = mysqli_fetch_array($checklogin);
        $email = $row['EmailAddress'];
         
        $_SESSION['Username'] = $username;
        $_SESSION['EmailAddress'] = $email;
        $_SESSION['LoggedIn'] = 1;
            header("location: courses" );
       die();
         

    }
    else
    {
        global $error;
           $error = "        <div class = 'row alert alert-danger' role='alert' style = 'padding-left:10%; '>


                <h1>Wrong email and password combination.</h1>
                <p>Please try again</p>

        

        </div>";
    }
}
else
{

}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  
    "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  

<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

  <head>

<title>YCPC Courses Login</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Eric Zhao and Youth Competitive Programming Circle contributors.">
<meta charset="UTF-8">
<link href = "../css/courseStyles.css" rel = "stylesheet" type="text/css">
<link href = "../css/bootstrap.min.css" rel = "stylesheet" type="text/css">
<link rel="apple-touch-icon-precomposed" href="img/squarelogo.png">
    <link rel="icon" href="img/squarelogo.png">
<style type="text/css">
body { 
  background: url(img/courseLockedScreenBackground.jpg) no-repeat center center fixed !important; 
  -webkit-background-size: cover !important;
  -moz-background-size: cover !important;
  -o-background-size: cover !important;
  background-size: cover !important;
}
    html, body {  height: 100%; overflow:hidden; }
    body { margin:0; padding:0; }
</style>
</head>

<body>


        <?php 
        global $error;
        echo $error;
        ?>

<div class="col-md-6 col-md-offset-3"  style = 'top:20%;'>
    <div class="modal-dialog" style="margin-bottom:20%; width:100% !important; margin-left:0px;">
        <div class="modal-content" style = "width:100% !important;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="courselogin">
                            <fieldset>
                                <div class="form-group">
                                    <input required class="form-control" maxlength="20" placeholder="Username" name="username" id = "username" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input required class="form-control" maxlength="30" minlength="10" placeholder="Password" name="password" id = "password" type="password" value="">
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="Login" id="Login" value="Sign in" class="btn btn-sm btn-info"></input>
<a class="btn btn-sm btn-success" href= "register">Register</a>
                            <a class = "btn btn-sm btn-default pull-right" href = "https://www.ycpc.us">Back to Home</a>
                            </fieldset>

                        </form>
                    </div>
                </div>
    </div>
</div>



    
<script src="js/bootstrap.min.js"></script>

  </body>  
<!--
Copyright (c) 2014, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
PARTICULAR PURPOSE.
-->
</html>