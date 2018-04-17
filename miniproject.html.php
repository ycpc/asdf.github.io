<!--
  Copyright (c) 2014, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->

<?php

    global $linkref;
    global $linkref1;
    global $linkref2;
    global $linkref3;

    $width = (((strpos($linkref, '~'))-(strpos($linkref, '|')))-1);

    $linkref1 = substr($linkref, 0, (strpos($linkref,'|')));

    $linkref2 = substr($linkref, ((strpos($linkref,'|'))+1), $width);

    $linkref3 = substr($linkref, ((strpos($linkref, '~'))+1));

?>
    <h2 class = "page-header nicepadding"><?php global $name; echo $name; ?></h2>

    <p></p>

<div id="content" style = "margin-left:3%; margin-right:3%; margin-top:1%; margin-bottom:1%; overflow:hidden;">
    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs" style = "border-bottom-color:#0099CC; border-bottom-width:0px;">
        <li class="active"><a href="#prompt" data-toggle="tab">Prompt</a></li>
        <li><a href="#walkthrough" data-toggle="tab">Walkthrough</a></li>
        <li><a href="#code" data-toggle="tab">Answer Code</a></li>
        <li><a href="#skulpt" data-toggle="tab">Your Code</a></li>
    </ul>
    <div id="my-tab-content" class="tab-content">
        <div class="tab-pane active" id="prompt">
            <div style = "margin-bottom:2%;"><iframe style = "width:100%; height:100vh;" frameBorder="0" src=<?php global $linkref1; echo $linkref1; ?>></iframe> </div>
        </div>
        <div class="tab-pane" id="walkthrough" >
            <div style = "margin-bottom:2%;"><iframe style = "width:100%; height:100vh; margin-left:-3%;" frameBorder="0" src=<?php global $linkref2; echo $linkref2; ?>></iframe> </div>
        </div>
        <div class="tab-pane" id="code">
            <div style = "margin-bottom:2%;"><iframe style = "width:100%; height:100vh;" frameBorder="0" src=<?php global $linkref3; echo $linkref3; ?>></iframe> </div>
        </div>
        <div class="tab-pane panel" id="skulpt" style = "background:white !important;">

        	<br>
        	
        <div class = "row alert alert-danger" role="alert">


                If you want to save or load your code, please open <a href = "http://codeskulptor.org">codeskulptor.org</a> in another tab.
        

        </div>

<br>

            <div style = "margin-bottom:2%; margin-left:-5% !important; width:110%; background: white !important" id = "codeskulpt"><iframe frameBorder="0" id = "skulpter" style = "margin:0%; padding: 0%; width:100%; height:100vh;" src="http://www.codeskulptor.org/"></iframe> </div>
        </div>
    </div>
</div>
 
 
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script>    

























		


</div>