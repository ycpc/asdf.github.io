<!--
  Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->

<?php

	global $pageid;
	// Connect to data with view perms
	function databaseviewconnect(){

		$link = mysqli_connect('localhost', 'read', 'Ericrox28'); 

		if (!$link) 

		{ 

		  $error = 'unable to connect to the server.'; 
		   
		   mysqli_close($link);

		  include 'error.html.php'; 

		  exit(); 

		} 

		if (!mysqli_set_charset($link, 'utf8')) 

		{ 

		  $error = 'unable to set up database encoding.'; 
		    mysqli_close($link);
		  include 'error.html.php'; 

		  exit(); 

		} 

		return $link;

	}
	// connect to data with edit perms
	function databaseeditconnect($password){

		$link = mysqli_connect('localhost', 'root', $password); 

		if (!$link) 

		{ 

		  $error = 'unable to connect to the server OR the password is not correct.'; 
		    mysqli_close($link);
		  include 'error.html.php'; 

		  exit(); 

		} 

		if (!mysqli_set_charset($link, 'utf8')) 

		{ 

		  $error = 'unable to set up database encoding.'; 

		  include 'error.html.php'; 
		    mysqli_close($link);
		  exit(); 

		} 

		return $link;

	}

	// retreive an entire column, but sort it.
	function sortedrowdatabaseretrieve($utable, $urow, $link){

		if (!mysqli_select_db($link, 'ycpcmain'))  

		{  

		  $error = 'Unable to locate the database.';  

		  include 'error.html.php';  
		    mysqli_close($link);
		  exit();  

		}  

		$result = mysqli_query($link, ("SELECT " . $urow . " FROM " . $utable . " ORDER BY  `maincoursestorage`.`Order`"));  
		
		if (!$result)  

		{  

		  $error = 'unable to fix this: ' . mysqli_error($link);  
		    mysqli_close($link);
		  include 'error.html.php';  

		  exit();  

		}

		while ($row = mysqli_fetch_array($result))  

		{  

		  $returninfo[] = $row[$urow];   

		}

		return $returninfo;

	}

	// get an entire column of data
	function rowdatabaseretrieve($utable, $urow, $link){

		if (!mysqli_select_db($link, 'ycpcmain'))  

		{  

		  $error = 'Unable to locate the database.';  

		  include 'error.html.php';  
		    mysqli_close($link);
		  exit();  

		}  

		$result = mysqli_query($link, ("SELECT " . $urow . " FROM " . $utable));  
		
		if (!$result)  

		{  

		  $error = 'unable to fix this: ' . mysqli_error($link);  
		    mysqli_close($link);
		  include 'error.html.php';  

		  exit();  

		}

		while ($row = mysqli_fetch_array($result))  

		{  

		  $returninfo[] = $row[$urow];   

		}

		return $returninfo;

	}


	//check if item exists
	function sqldataitemexists($utable, $urow, $link, $condition){

		if (!mysqli_select_db($link, 'ycpcmain'))  

		{  

		  $error = 'Unable to locate the database.';  

		  include 'error.html.php';  

	       mysqli_close($link);

		  exit();  

		}  
		
		$variablestring = ("SELECT " . $urow . " FROM " . $utable . ' WHERE ' . $condition);
		
		$result = mysqli_query($link, $variablestring);  
		
		if (!$result)  

		{  

		  return False;

		  exit();

		}

		while ($row = mysqli_fetch_array($result))  

		{  

		  $returninfo[] = $row[$urow];   

		}

		if (!isset($returninfo)){

			return False;

			exit();

		}


		if (count($returninfo) == 0){

			return False;

		  	exit();  

		} elseif (count($returninfo) == 1){

			return True;

		} else {

			return True;

		}

	}

	// retrieve specific square
	function specificdatabaseretrieve($utable, $urow, $link, $condition){

		if (!mysqli_select_db($link, 'ycpcmain'))  

		{  

		  	$error = 'Unable to locate the database.';  

		  	include 'error.html.php';  

	    	mysqli_close($link);

		  	exit();  

		}  


		$variablestring = ("SELECT " . $urow . " FROM " . $utable . ' WHERE ' . $condition);
		$result = mysqli_query($link, $variablestring);  
		
		if (!$result)  

		{  

		 	$error = 'unable to fix this: ' . mysqli_error($link);  

			include 'error.html.php';  

		    mysqli_close($link);

			exit();  

		}


		while ($row = mysqli_fetch_array($result))  

		{  

		  $returninfo[] = $row[$urow];   

		}

		if (!isset($returninfo)){
			return False;
		    mysqli_close($link);
			exit();
		}

		if (count($returninfo) == 0){

			$error = 'unable to find anything matching the query conditions. D:';  

		  	include 'error.html.php';  

		    mysqli_close($link);

		  	exit();  

		} elseif (count($returninfo) == 1){

			$returner = $returninfo[0];

			return $returner;

		} else {

			return $returninfo;
		}

	}


// processs the id
	function idproccessor($id){

		$courseid = floor($id/1000);

		$typeid = floor(($id%1000)/100);

		$partid = 1;

		$chapterid = floor($id%100);

		switch ($courseid){

			case(1): 

				$coursename =  "Beginners Python";
				break;

			case(2):

				$coursename =  "";
				break;

			case(3):

				$coursename =  "Web Fundamentals";
				break;

			case(4):


				$coursename =  "Advanced Web Development";	
				break;
			case(5):

				$coursename =  "Beginners Java";
				break;

			case(6):

				$coursename =  "";
				break;

			case(7):

				$coursename =  "";
				break;

			case(8):

				$coursename =  "";
				break;
			
		}

		switch ($typeid){

			case(1):

				$typename = "Quiz";
				switch($chapterid){
					case(1):
						$chapterid = "Unit 1";
						break;
					case(4):
						$chapterid = "Unit 2";
						break;
					case(7):
						$chapterid = "Unit 3";
						break;
					case(10):
						$chapterid = "Unit 4";
						break;
				}
				break;

			case(2):

				$typename = "Study Guide";
				switch($chapterid){
					case(1):
						$chapterid = "Unit 1";
						break;
					case(4):
						$chapterid = "Unit 2";
						break;
					case(7):
						$chapterid = "Unit 3";
						break;
					case(10):
						$chapterid = "Unit 4";
						break;
				}
				break;

			case(3):

				$chapterid = "Chapter " . $chapterid; 
				$typename = "Video Lecture";
				break;

			case(4):

				$typename = "MiniProject";
				switch($chapterid){
					case(1):
						$chapterid = "Unit 1";
						break;
					case(4):
						$chapterid = "Unit 2";
						break;
					case(7):
						$chapterid = "Unit 3";
						break;
					case(10):
						$chapterid = "Unit 4";
						break;
				}


				break;

			case(5):

				$typename = "Make Quiz";
				switch($chapterid){
					case(1):
						$chapterid = "Unit 1";
						break;
					case(4):
						$chapterid = "Unit 2";
						break;
					case(7):
						$chapterid = "Unit 3";
						break;
					case(10):
						$chapterid = "Unit 4";
						break;
				}				
				break;

		}

		if ($partid == 1){

			$partname = "";

		}else{

			$partname = "Part: " . $partid;

		}

		$name = ($coursename . " : " . $chapterid . " : " . $typename . " " . $partname);

		return $name;

	}


	// get course data link from course id
	function coursedatainitialize($id){

		global $pagetype;

		$location = specificdatabaseretrieve("maincoursestorage", "linkref", databaseviewconnect(), 'mainid LIKE "' . $id . '";');

		return $location;

	}

	// verify if quiz input is valid and then insert values into database
	function quizinput($pageid, $link){

		if ($_POST['questionid'] > 3){

		    $error = 'unable to fix this:' . "Wrong question type.";  

	  		include 'error.html.php';  

	 	 	exit();

		}

		mysqli_select_db($link, "ycpcmain");

		$questionid= (mysqli_escape_string($link, $_POST['questionid'])*100) + 1;

		$mainid = mysqli_escape_string($link, ($pageid-400));

		$questionid = (($mainid * 1000) + $questionid);



		$variableexists = sqldataitemexists("quizarchive", "questionid", $link, "questionid LIKE " . '"' . $questionid . '"');

		while ($variableexists != False){

			$questionid = $questionid + 1;

			$variableexists = sqldataitemexists("quizarchive", "questionid", $link, "questionid LIKE " . '"' . $questionid . '"');
			
			
		}

		echo mysqli_query($link, ("SELECT " . "questionid" . " FROM " . "maincoursestorage" . ' WHERE ' . "mainid LIKE " . ($questionid)));

		if (mysqli_query($link, ("SELECT " . "questionid" . " FROM " . "maincoursestorage" . ' WHERE ' . "mainid LIKE " . ($questionid)))){

		    $error = 'unable to fix this:' . "Something took up the slot already.";  

	  		include 'error.html.php';  

	 	 	exit();

		}

		// take input values and store them in the database as question and answers in the quizarchive

		$text= mysqli_escape_string($link, $_POST['text']);

		$codetext = mysqli_escape_string($link, $_POST['codetext']);

		$answer1 = mysqli_escape_string($link, $_POST['answer1']);

		$answer2 = mysqli_escape_string($link, $_POST['answer2']);

		$answer3 = mysqli_escape_string($link, $_POST['answer3']);

		$answer4 = mysqli_escape_string($link, $_POST['answer4']);

		$order = "INSERT INTO quizarchive(questionid, text, codetext, answer1, answer2, answer3, answer4) VALUES ('{$questionid}', '{$text}', '{$codetext}', '{$answer1}', '{$answer2}', '{$answer3}', '{$answer4}')";

		$result = mysqli_query($link, $order);  //order executes

		echo $order;

		if(!$result){

		    $error = 'unable to fix this: Yo bettah check yoself FOO ' . mysql_error();  

		    mysqli_close($link);

	  		include 'error.html.php';  

	 	 	exit();  
		}
		return True;
		
	}




?>