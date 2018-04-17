<!--
  Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->
<?php
session_start();
$quizid = ($_GET['id']);
include "database.php";
$title = idproccessor($quizid);
$pagetype = "Courses";
$name = $title;
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>';
	include "includecode/head.html";
	echo '    <style type="text/css">body{background:top center no-repeat fixed url("img/topbackimage.png") !important; background-color:#0099CC !important; background-position: 0 40px !important;}}</style>
</head>
<body onload="disable()">  ';
	include "includecode/load.html";
	include "includecode/navbarStandard.html"; 
	echo '<div class = "container extrapadding">
	<div class = "panel panel-default">
		<div id= "main" class = "panel-body" style="color:#808080;" >
			<h2 class = "page-header nicepadding">'; echo $name; echo ' Results</h2>
			<p></p>
			<form class="form-horizontal" style = "padding-left:30px; padding-right:30px">
				<fieldset>';
					$link = databaseviewconnect();
					$questions = specificdatabaseretrieve("quizarchive", "questionid", $link, 'questionid LIKE "' . $quizid . '%"');
					$questionnumber = 0;
					if ((count($questions) == 0)||(count($questions) == 1)){
						$error = 'Error'; 
						mysqli_close($link);
						include 'error.html.php'; 
						exit(); 
					}
					$grade = 0;
					$questionnumber = 0;
					$total = 0;
					foreach ($questions as $id) {
						$questionnumbere = $questionnumbere + 1;
						$questionnumber = $questionnumbere . ".";
						$questionid = floor($id%1000);
						$typeid = floor(($id%1000)/100);
						switch ($typeid){
							case(1):
							$questiontext = htmlspecialchars(specificdatabaseretrieve("quizarchive", "text", $link, 'questionid LIKE "' . $id . '"'));
							$helptext = htmlspecialchars(specificdatabaseretrieve("quizarchive", "codetext", $link, 'questionid LIKE "' . $id . '"'));
							$answer1 = htmlspecialchars(specificdatabaseretrieve("quizarchive", "answer1", $link, 'questionid LIKE "' . $id . '"'));
							$answer2 = htmlspecialchars(specificdatabaseretrieve("quizarchive", "answer2", $link, 'questionid LIKE "' . $id . '"'));
							$answer3 = htmlspecialchars(specificdatabaseretrieve("quizarchive", "answer3", $link, 'questionid LIKE "' . $id . '"'));
							$answer4 = htmlspecialchars(specificdatabaseretrieve("quizarchive", "answer4", $link, 'questionid LIKE "' . $id . '"'));
							$variablecontent1 = (($questionnumber*1000)+$questionid+100000);
							$variablecontent2 = (($questionnumber*1000)+$questionid+200000);
							$variablecontent3 = (($questionnumber*1000)+$questionid+300000);
							$variablecontent4 = (($questionnumber*1000)+$questionid+400000);
							if (strpos($answer1,'#CCCC#') !== false) {
								$arrayentered = $variablecontent1;
								$correctanswer = 1;
								$answer1 = substr($answer1, 6);
							}
							if (strpos($answer2,'#CCCC#') !== false) {
								$arrayentered = $variablecontent2;
								$correctanswer = 2;
								$answer2 = substr($answer2, 6);
							}				
							if (strpos($answer3,'#CCCC#') !== false) {
								$arrayentered = $variablecontent3;
								$correctanswer = 3;
								$answer3 = substr($answer3, 6);
							}					
							if (strpos($answer4,'#CCCC#') !== false) {
								$arrayentered = $variablecontent4;
								$correctanswer = 4;
								$answer4 = substr($answer4, 6);
							}	
							$qid = (($questionnumber*1000)+$questionid);
							$myresults = $_POST["{$qid}"];
							$answered = (($myresults-($questionnumber*1000)-$questionid)/100000);
							if($myresults == $arrayentered){
								$correct = true;
								$total = $total + 1;
								$grade = $grade + 1;				    
							}else{
								$correct = false;
								$total = $total + 1;					
							}
							
							include("includecode/quizcomp/multipleradioanswer.php");
							break;
							
							case(2):
							$questiontext = htmlspecialchars(specificdatabaseretrieve("quizarchive", "text", $link, 'questionid LIKE "' . $id . '"'));
							$helptext = htmlspecialchars(specificdatabaseretrieve("quizarchive", "codetext", $link, 'questionid LIKE "' . $id . '"'));
							$answer1 = htmlspecialchars(specificdatabaseretrieve("quizarchive", "answer1", $link, 'questionid LIKE "' . $id . '"'));
							$answer2 = htmlspecialchars(specificdatabaseretrieve("quizarchive", "answer2", $link, 'questionid LIKE "' . $id . '"'));
							$answer3 = htmlspecialchars(specificdatabaseretrieve("quizarchive", "answer3", $link, 'questionid LIKE "' . $id . '"'));
							$answer4 = htmlspecialchars(specificdatabaseretrieve("quizarchive", "answer4", $link, 'questionid LIKE "' . $id . '"'));
							$variablecontent1 = (($questionnumber*1000)+$questionid+100000);
							$variablecontent2 = (($questionnumber*1000)+$questionid+200000);
							$variablecontent3 = (($questionnumber*1000)+$questionid+300000);
							$variablecontent4 = (($questionnumber*1000)+$questionid+400000);
							$check1 = "";
							$check2 = "";
							$check3 = "";
							$check4 = "";
							if ($_POST["{$variablecontent1}"]){
								$check1 = "checked";
							}
							if ($_POST["{$variablecontent2}"]){
								$check2 = "checked";
							}
							if ($_POST["{$variablecontent3}"]){
								$check3 = "checked";
							}
							if ($_POST["{$variablecontent4}"]){
								$check4 = "checked";
							}									
							if (strpos($answer1,'#CCCC#') !== false) {
								$answer1 = substr($answer1, 6);
								if (($_POST["{$variablecontent1}"])==$variablecontent1){
									$correct1 = true;
								}else{
									$correct1 = false;
								}
							}else{
								if (($_POST["{$variablecontent1}"])!=$variablecontent1){
									$correct1 = true;
								}else{
									$correct1 = false;
								}
							}					
							if (strpos($answer2,'#CCCC#') !== false) {
								$answer2 = substr($answer2, 6);
								if (($_POST["{$variablecontent2}"])==$variablecontent2){
									$correct2 = true;
								}else{
									$correct2 = false;
								}
							}else{
								if (($_POST["{$variablecontent2}"])!=$variablecontent2){
									$correct2 = true;
								}else{
									$correct2 = false;
								}
							}				
							if (strpos($answer3,'#CCCC#') !== false) {
								$answer3 = substr($answer3, 6);
								if (($_POST["{$variablecontent3}"])==$variablecontent3){
									$correct3 = true;
								}else{
									$correct3 = false;
								}
							}else{
								if (($_POST["{$variablecontent3}"])!=$variablecontent3){
									$correct3 = true;
								}else{
									$correct3 = false;
								}
							}				
							
							if (strpos($answer4,'#CCCC#') !== false) {
								$answer4 = substr($answer4, 6);
								if (($_POST["{$variablecontent4}"])==$variablecontent4){
									$correct4 = true;
								}else{
									$correct4 = false;
								}
							}else{
								if (($_POST["{$variablecontent4}"])!=$variablecontent4){
									$correct4 = true;
								}else{
									$correct4 = false;
								}
							}				
							if (($correct1)&&($correct2)&&($correct3)&&($correct4)){
								$correct = true;
								$grade = $grade + 1;
								$total = $total + 1;
							}else{
								$correct = false;
								$total = $total + 1;					
							}
							include("includecode/quizcomp/multiplecheckboxanswer.php");				
							break;
							case(3):
							$variableid1 = (($questionnumber*1000)+$questionid);
							$questiontext = htmlspecialchars(specificdatabaseretrieve("quizarchive", "text", $link, 'questionid LIKE "' . $id . '"'));
							$answer1 = specificdatabaseretrieve("quizarchive", "answer1", $link, 'questionid LIKE "' . $id . '"');
							if (strpos($answer1,'#CCCC#') !== false) {
								$answer1 = substr($answer1, 6);
							}					
							
							$answer = mysqli_escape_string($link, $_POST[$variableid1]);
							
							if ($answer == $answer1){
								$correct = true;
								$grade = $grade + 1;
								$total = $total + 1;
							}else{
								$correct = false;
								$total = $total + 1;
							}
							include("includecode/quizcomp/textinputanswer.php");
							break;
						}
					}
					echo '	      
					<div class="form-group">
						<div class="col-md-12">  
							'; echo '<p style = "text-align:right;">Your score: ' . $grade . '/' . $total . '</p><a href = "../courses/'; echo $quizid;
							echo '" class="btn btn-success pull-right">Back To Quiz</a>
						</div>
					</div>
				</fieldset>
			</form>
			<!--Extra </div on purpose -->
		</div>
	</div>
	';
	include "includecode/mediasidebar.html";
	echo '
</div> 
</div>
<script>
	function disable() {
		document.getElementById("disabledinput").disabled = true;
	}
	
</script>
';
include "includecode/footer.html"; 
session_start();
$link = databaseeditconnect("LEMonadestand20Laugh");
$username = ($_SESSION['Username']);
mysqli_select_db($link, "ycpcmain");
$finalscore = ($grade / $total) * 100;
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
	
	$previousscore = mysqli_query($link, 'SELECT Q' .  $quizid . '` FROM users WHERE Username LIKE "' . $username . '"');
	if ($previousscore < $finalscore){
		
		mysqli_query($link, 'UPDATE users SET `Q' .  $quizid . '` = "' . $finalscore . '" WHERE Username LIKE "' . $username . '"');
	}
	
	
}else{
	header("location: error");
	die();
}
?>	
<script type="text/javascript">
	$(window).load(function () {
		$("#loader").fadeOut("fast");
	})
</script>
<script>
	$(document).ready(function() { 
		$("#loader").fadeOut("fast");
	})
</script>
</body>
</html>
