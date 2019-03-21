<?php
# MIDN Jake Woods, 197068, SWAT-C
# This script was made using several components from a
# a previous project for IT360 MIDN V Xu, S Barkley,
# and J Williams contributed to the original project.

# NOT FUNCTIONAL!!! This page will work great once auth.inc.php works

  if(!isset($_SESSION)) {
    session_start();
  }

  if(!isset($_SESSION['user'])) {
    require_once("auth.inc.php");
  }

  // Load the Page Class (inside of page.inc.php)
  require_once("page.inc.php");

  // Create a Page object and set the Page title
  $page = new Page("Logout");
  $page->content = '';

  // Add to the Page
  $page->content.="<div class=container>";
  $page->content.="<div class=row>";
  $page->content.='<div class=col-md-2></div> <div class=col-md-8>';
  $page->content.="<p class=center>You should be redirected to the login page shortly, but if not, click <a href=login.php>here</a>....</p>";
  $page->content.='</div>';
  $page->content.="</div>";
  $page->content.="</div>";

  // Show the page
  $page->display();

  session_destroy();

  header("Refresh: 3; url=home.php");
?>
