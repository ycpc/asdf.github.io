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

<title>YCPC Courses Registration</title>

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
    html, body { height: 100%; overflow:hidden; }
    body { margin:0; padding:0; }

</style>
</head>

<body style = "background-color:#0099CC;">



    <?php
   
   include "database.php";



 $link = databaseeditconnect("LEMonadestand20Laugh");

 

  mysqli_select_db($link, "ycpcmain");

session_start();
if(!empty($_POST['username']) && !empty($_POST['password']))
{
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
     
     $checkusername = mysqli_query($link, "SELECT * FROM users WHERE Username = '".$username."'");
      
     if(mysqli_num_rows($checkusername) == 1)
     {


                    echo "        <div class = 'row alert alert-danger' role='alert' style = 'padding-left:10%;'>


               <h1>Error</h1>
                <p>Sorry, that username is taken. Please go back and try again.</p>

        

        </div>";

     }
     else
     {
        $registerquery = mysqli_query($link, ("INSERT INTO users(Username, Password, EmailAddress) VALUES ('" . $username . "', '" . $password . "', '" . $email . "')"));
        if($registerquery)
        {
            echo "        <div class = 'row alert alert-success' role='alert' style = 'padding-left:10%; '>


               <h1>Success</h1>
                <p>Your account was successfully created. Please <a href='courselogin'>click here to login</a>.</p>

        

        </div>";

        }
        else
        {
            echo "        <div class = 'row alert alert-danger' role='alert' style = 'padding-left:10%; '>


                <h1>Oops, something went wrong</h1>
                <p>Please try again</p>

        

        </div>";
        }       
     }
}

    ?>


<div class="col-md-6 col-md-offset-3"   style = 'top:20%; '>
    <div class="modal-dialog"  style="margin-bottom:20%; width:100% !important; margin-left:0px;">
        <div class="modal-content" style = "width:100% !important;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Register</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="register" name="loginform" id="loginform">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" required placeholder="Username" maxlength="20" name="username" id = "username" type="text" autofocus="">
   
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required placeholder="E-mail" maxlength="30" name="email" id = "email" type="email" autofocus="">

                                </div>
                                <div class="form-group">
                                    <input class="form-control" required placeholder="Password" maxlength="30" minlength="10" name="password" id = "password" type="password" value="">
   
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="register" id="register" value="Register" class="btn btn-sm btn-success"></input>
                            <a class="btn btn-sm btn-info" href= "courselogin">Back to Sign In</a>
                            <a class = "btn btn-sm btn-default pull-right" href = "https://www.ycpc.us">Back to Home</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
    </div>
</div>
  </body>  
<!--
Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
PARTICULAR PURPOSE.
-->
</html>