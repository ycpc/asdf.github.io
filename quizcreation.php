
<?php
	
	global $pageid;
	
	$pageid = $_POST['pageid'];

	include "database.php";


    $link = databaseeditconnect("LEMonadestand20Laugh");

    echo "success";

	if (quizinput($pageid, $link)){

		header("Location: courses/" . $pageid);	
		echo "success!";

	}

	mysqli_close($link);


?>

<!--

	-->