<?php include "webComponents/copyrightNotice.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us - Youth Competitive Programming Circle</title>
    <meta name="description" content="Youth Competitive Programming Circle's About Page">
  <?php include "webComponents/genericHeader.php"; include "webComponents/basicAlternateThemeHeader.php"; ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-template">
                    <h1>
                        Oops.
                    </h1>
                    <br><br>
                    <h2>
                        We were <?php
                        $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        $pageid = $_GET['id'];  
                        echo $pageid . " ";
                        if (isset($error)){echo $error;}else{echo "unable to find your link";} ?>
                    </h2>
                    <br><br>
                    <div class="error-actions">
                        <a href="https://www.ycpc.us" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                            Take Me Home </a><a href="https://www.ycpc.us/about#contact" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>