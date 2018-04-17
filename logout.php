<!--
  Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->
<?php 

include "database.php"; 
session_start();

$link1 = databaseeditconnect("LEMonadestand20Laugh");
$_SESSION = array(); 

session_destroy(); 

?>

<meta http-equiv="refresh" content="0;courses">