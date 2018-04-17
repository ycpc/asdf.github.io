<?php
include "webComponents/copyrightNotice.php";
class YCPCStaticPage
{
  // Already established
  private $title, $description, $linkToContent, $cssSegmentChoice;

  // Creating the activity
  public function YCPCStaticPage($title, $description, $linkToContent="webComponents/error.php", $cssSegmentChoice="webComponents/coursesStaticStyle.php") 
  {
    $this->title = $title;
    $this->description = $description;
    $this->linkToContent = $linkToContent;
    $this->cssSegmentChoice = $cssSegmentChoice;
  }
 
  public function generateHTML()
  {
    
  }

} 
?>