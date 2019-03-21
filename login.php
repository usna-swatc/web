<?php
  # MIDN Jake Woods, 197068, SWAT-C
  # This script was made using several components from a
  # a previous project for IT360 MIDN V Xu, S Barkley,
  # and J Williams contributed to the original project.

  // Load the Page Class (inside of page.inc.php)

  # NOT FUNCTIONAL!!! This page will work great once auth.inc.php works

  require_once("page.inc.php");

  if(!isset($_SESSION)) {
    session_start();
  }

  if(isset($_SESSION['user'])) {
    header("Location: home.php");
    die;
  }

  // Create a Page object and set the Page title
  $page = new Page("Login");
  $page->content = '';

  // Add to the Page
  $page->content.="<div class=container>";
  $page->content.="<div class=row>";
  $page->content.='<div class=col-md-4></div> <div class=col-md-4>';
  $page->content.='<form action="auth.inc.php" method="POST">';
  $page->content.='<input type=text name=username class=form-control placeholder=Username required>';
  $page->content.='<input type=password name=password class=form-control placeholder=Password required>';
  $page->content.='<input type="submit" class=form-control value=Login>' . '</form>';
  $page->content.='<input type=button class=form-control value=Register onclick="location.href=\'register.php\'"> <br>';

  $page->content.='</div>';
  $page->content.='</div>';
  $page->content.='</div>';

  // Show the page
  $page->display();
?>
