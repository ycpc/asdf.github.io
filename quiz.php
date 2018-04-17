<!--
  Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->


<?php
	// display questions and answers based off of database
	function questiongenerator($quizid) {

		$link = databaseviewconnect();

		$questions = specificdatabaseretrieve("quizarchive", "questionid", $link, 'questionid LIKE "' . $quizid . '%"');

		$questionnumber = 0;

		if ((count($questions) == 0)||(count($questions) == 1)){

					 $error = 'Error'; 
		    		mysqli_close($link);
		  			include 'error.html.php'; 

		  exit(); 


		}


		foreach ($questions as $id) {

			$questionnumber = $questionnumber + 1;

			$questionnumber = $questionnumber . ".";

			//echo $id;

			$questionid = floor($id%1000);

			$typeid = floor(($id%1000)/100);

			switch ($typeid){
				// multiple choice
				case(1):

					$questiontext = htmlspecialchars(specificdatabaseretrieve("quizarchive", "text", $link, 'questionid LIKE "' . $id . '"'));

					$helptext = htmlspecialchars(specificdatabaseretrieve("quizarchive", "codetext", $link, 'questionid LIKE "' . $id . '"'));

					$answer1 = htmlspecialchars(specificdatabaseretrieve("quizarchive", "answer1", $link, 'questionid LIKE "' . $id . '"'));

					$answer2 = htmlspecialchars(specificdatabaseretrieve("quizarchive", "answer2", $link, 'questionid LIKE "' . $id . '"'));

					$answer3 = htmlspecialchars(specificdatabaseretrieve("quizarchive", "answer3", $link, 'questionid LIKE "' . $id . '"'));

					$answer4 = htmlspecialchars(specificdatabaseretrieve("quizarchive", "answer4", $link, 'questionid LIKE "' . $id . '"'));

					$variableid1 = (($questionnumber*1000)+$questionid);

					$variableid2 = (($questionnumber*1000)+$questionid);

					$variableid3 = (($questionnumber*1000)+$questionid);

					$variableid4 = (($questionnumber*1000)+$questionid);

					$variablecontent1 = (($questionnumber*1000)+$questionid + 100000);

					$variablecontent2 = (($questionnumber*1000)+$questionid + 200000);

					$variablecontent3 = (($questionnumber*1000)+$questionid + 300000);

					$variablecontent4 = (($questionnumber*1000)+$questionid + 400000);	

					// establish answer
					if (strpos($answer1,'#CCCC#') !== false) {

					    $answer1 = substr($answer1, 6);

					}					

					if (strpos($answer2,'#CCCC#') !== false) {

					    $answer2 = substr($answer2, 6);

					}					

					if (strpos($answer3,'#CCCC#') !== false) {

					    $answer3 = substr($answer3, 6);

					}					

					if (strpos($answer4,'#CCCC#') !== false) {

					    $answer4 = substr($answer4, 6);

					}					

				   	include("includecode/quizcomp/multipleradio.php");



					break;
				
				case(2):
				// checkbox(multiple answers)

					$questiontext = htmlspecialchars(specificdatabaseretrieve("quizarchive", "text", $link, 'questionid LIKE "' . $id . '"'));

					$helptext = htmlspecialchars(specificdatabaseretrieve("quizarchive", "codetext", $link, 'questionid LIKE "' . $id . '"'));

					$answer1 = htmlspecialchars(specificdatabaseretrieve("quizarchive", "answer1", $link, 'questionid LIKE "' . $id . '"'));

					$answer2 = htmlspecialchars(specificdatabaseretrieve("quizarchive", "answer2", $link, 'questionid LIKE "' . $id . '"'));

					$answer3 = htmlspecialchars(specificdatabaseretrieve("quizarchive", "answer3", $link, 'questionid LIKE "' . $id . '"'));

					$answer4 = htmlspecialchars(specificdatabaseretrieve("quizarchive", "answer4", $link, 'questionid LIKE "' . $id . '"'));

					$variableid1 = (($questionnumber*1000)+$questionid);

					$variableid2 = (($questionnumber*1000)+$questionid);

					$variableid3 = (($questionnumber*1000)+$questionid);

					$variableid4 = (($questionnumber*1000)+$questionid);					

					$variablecontent1 = (($questionnumber*1000)+$questionid + 100000);

					$variablecontent2 = (($questionnumber*1000)+$questionid + 200000);

					$variablecontent3 = (($questionnumber*1000)+$questionid + 300000);

					$variablecontent4 = (($questionnumber*1000)+$questionid + 400000);	

					// mark right or wrong

					if (strpos($answer1,'#CCCC#') !== false) {

					    $answer1 = substr($answer1, 6);

					}					

					if (strpos($answer2,'#CCCC#') !== false) {

					    $answer2 = substr($answer2, 6);

					}					

					if (strpos($answer3,'#CCCC#') !== false) {

					    $answer3 = substr($answer3, 6);

					}					

					if (strpos($answer4,'#CCCC#') !== false) {

					    $answer4 = substr($answer4, 6);

					}					

					/* checkbox choice */

					$variables = array($questionnumber, $questiontext, $helptext, $answer1, $answer2, $answer3, $answer4);

					

				   include("includecode/quizcomp/multiplecheckbox.php");


					

					break;

				case(3):

				//free response

					$questiontext = htmlspecialchars(specificdatabaseretrieve("quizarchive", "text", $link, 'questionid LIKE "' . $id . '"'));

					$answer1 = specificdatabaseretrieve("quizarchive", "answer1", $link, 'questionid LIKE "' . $id . '"');

					$variableid1 = (($questionnumber*1000)+$questionid);

					if (strpos($answer1,'#CCCC#') !== false) {

					    $answer1 = substr($answer1, 6);

					}					

					/* checkbox choice */

					
				   include("includecode/quizcomp/textinput.php");

					break;

			}

		}

	}


	// mark right of wrong
	function multiplechoicegrader($questionid, $answer1, $answer2, $answer3, $answer4, $link){

		$rightanswer1 = specificdatabaseretrieve("quizarchive", "answer1", $link, 'questionid LIKE "' . $questionid . '"');

		$rightanswer2 = specificdatabaseretrieve("quizarchive", "answer2", $link, 'questionid LIKE "' . $questionid . '"');

		$rightanswer3 = specificdatabaseretrieve("quizarchive", "answer3", $link, 'questionid LIKE "' . $questionid . '"');

		$rightanswer4 = specificdatabaseretrieve("quizarchive", "answer4", $link, 'questionid LIKE "' . $questionid . '"');

		$correctanswer = 0;

		$correct = false;

		if ((strpos($rightanswer1,'#CCCC#') !== false)&&($answer1 = true)) {

			$correct = true;

		    $correctanswer = 1;

		}elseif ((strpos($rightanswer2,'#CCCC#') !== false)&&($answer2 = true)) {

			$correct = true;

		    $correctanswer = 2;

		}elseif ((strpos($rightanswer3,'#CCCC#') !== false)&&($answer3 = true)) {

			$correct = true;

		    $correctanswer = 3;

		}elseif ((strpos($rightanswer4,'#CCCC#') !== false)&&($answer4 = true)) {

			$correct = true;

		    $correctanswer = 4;

		}else{

			$temparray = array(strpos($rightanswer1,'#CCCC#'), strpos($rightanswer2,'#CCCC#'), strpos($rightanswer3,'#CCCC#'), strpos($rightanswer4,'#CCCC#'));
			$correctanswer = (array_search(false, $temparray))+1;

		}

		return array($correct, $correctanswer);

	}

	function checkboxgrader($questionid, $answer1, $answer2, $answer3, $answer4, $link){

		$rightanswer1 = specificdatabaseretrieve("quizarchive", "answer1", $link, 'questionid LIKE "' . $id . '"');

		$rightanswer2 = specificdatabaseretrieve("quizarchive", "answer2", $link, 'questionid LIKE "' . $id . '"');

		$rightanswer3 = specificdatabaseretrieve("quizarchive", "answer3", $link, 'questionid LIKE "' . $id . '"');

		$rightanswer4 = specificdatabaseretrieve("quizarchive", "answer4", $link, 'questionid LIKE "' . $id . '"');

		$wronganswer = array();

		$correct = true;

		if (!((strpos($rightanswer1,'#CCCC#') !== false)==($answer1))) {

			$correct = false;

		 	array_push($wronganswer, 1);
		}

		if ((strpos($rightanswer2,'#CCCC#') !== false)==($answer2)) {

			$correct = false;

			array_push($wronganswer, 2);

		}

		if ((strpos($rightanswer3,'#CCCC#') !== false)==($answer3 = true)) {

			$correct = false;

			array_push($wronganswer, 3);

		}


		if ((strpos($rightanswer4,'#CCCC#') !== false)==($answer4 = true)) {

			$correct = false;

			array_push($wronganswer, 4);

		}	

		return array($correct, $wronganswer);

	}

?>