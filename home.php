<?php
  # MIDN Jake Woods, 197068, SWAT-C
  # This script was made using several components from a
  # a previous project for IT360 MIDN V Xu, S Barkley,
  # and J Williams contributed to the original project.
  if(!isset($_SESSION)) {
    session_start();
  }

  if(!isset($_SESSION['user'])) {
    //require_once("auth.inc.php");
  }

  // Load the Page Class (inside of page.inc.php)
  require_once("page.inc.php");

  // Create a Page object and set the Page title
  $page = new Page("Home");
  $page->content = '';

  // Add to the Page
  $page->content.="<div class=container>";

  $page->content.="<div class=row>";
  $page->content.='<div class=col-md-4></div> <div class=col-md-4>';
  $page->content.='<form action="missions.php" method="REQUEST">';
  $page->content.='<input type=hidden name=missions class=form-control>';
  $page->content.='<input type="submit" class=form-control value="Mission Selection">' . '</form> <br>';
  $page->content.='</div>';
  $page->content.="</div>";

  $page->content.="<div class=row>";
  $page->content.='<div class=col-md-4></div> <div class=col-md-4>';
  $page->content.='<form action="manual.php" method="REQUEST">';
  $page->content.='<input type=hidden name=manual class=form-control>';
  $page->content.='<input type="submit" class=form-control value="Manual Operation">' . '</form> <br>';
  $page->content.='</div>';
  $page->content.="</div>";

  $page->content.="<div class=row>";
  $page->content.='<div class=col-md-4></div> <div class=col-md-4>';
  $page->content.='<form action="basic.php" method="REQUEST">';
  $page->content.='<input type=hidden name=basic class=form-control>';
  $page->content.='<input type="submit" class=form-control value="Basic Tasks">' . '</form> <br>';
  $page->content.='</div>';
  $page->content.="</div>";

  $page->content.="<br/><br/>";

  # Logout not relevant until there is a login \_(``/)_/
  /*
  $page->content.="<div class=row>";
  $page->content.='<div class=col-md-4></div> <div class=col-md-4>';
  $page->content.='<form action="auth.inc.php" method="REQUEST">';
  $page->content.='<input type=hidden name=logoff class=form-control>';
  $page->content.='<input type="submit" class=form-control value=Logout>' . '</form> <br>';
  $page->content.='</div>';
  $page->content.="</div>";
  */

  $page->content.="</div>";

  // Show the page
  $page->display();
?>
