<?php
# MIDN Jake Woods, 197068, SWAT-C
# This script was made using several components from a
# a previous project for IT360 MIDN V Xu, S Barkley,
# and J Williams contributed to the original project.
class Page
{
  // class Page's attributes
  public $content;
  private $title = 'United States Naval Academy: SWAT-C';
  private $keywords = 'USNA, SWAT-C, AI, Drone';
  private $xmlheader = "<!DOCTYPE html><html>";

  //constructor
  public function __construct($title) {
    $this->__set("title", $title);
  }

  //set private attributes
  public function __set($varName, $varValue) {
    $varValue = trim($varValue);
    $varValue = strip_tags($varValue);
    if (!get_magic_quotes_gpc()){
      $varValue = addslashes($varValue);
    }
    $this->$varName = $varValue;
  }

  //get function - nothing special for now
  public function __get($varName) {
    return $this->$varName;
  }

  //output the page
  public function display()
  {
    echo $this->xmlheader;
    echo "<head>\n";
    $this -> displayTitle();
    $this -> displayKeywords();
    $this -> displayStyles();
    echo "</head>\n<body>\n";
    $this -> displayContentHeader();
    echo $this->content;
    $this -> displayContentFooter();
    echo "</body>\n</html>\n";
  }

  //output the title
  public function displayTitle() {
    echo '<title style="text-align:center;"> '.$this->title.' </title>';
  }

  public function displayKeywords() {
    echo "<meta name=\"keywords\" content=\"$this->keywords\" />";
  }

  //display the embedded stylesheet
  public function displayStyles() {
    ?>
      <link href="css/Raleway" rel="stylesheet">
      <link rel="stylesheet" href="css/bootstrap.min.css">

      <style>
        h1 {
          text-align: center;
        }
        p.center {
          text-align: center;
        }
        p.right {
          text-align: right;
        }
        body {
          font-family: 'Raleway', sans-serif;
        }
        div.row {
          margin-bottom: 10px;
          margin-left: 10px;
          margin-right: 10px;
        }
        pre {
          white-space: pre-wrap;
        }
      </style>
    <?php
  }

  //display the header part of the visible page
  public function displayContentHeader() {
    ?>
      <h1 class="header"><br>Squad With Autonomous Teammates - Challenge<br><br></h1>
    <?php
  }

  //display the footer part of the visible page
  public function displayContentFooter() {
    ?>
      <p class="footer center"><br>United States Naval Academy<br><br></p>
    <?php
  }
}
?>
