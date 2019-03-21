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
  $page = new Page("Manual");
  $page->content = '';

  // Add to the Page
  $page->content.="<div class=container>";

  $page->content.="<div class=row>";
  $page->content.='<div class=col-md-4></div> <div class=col-md-4>';
  $page->content.='<form action="manual/ascend.php" method="REQUEST">';
  $page->content.='<input type=hidden name=ascend class=form-control>';
  $page->content.='<input type="submit" class=form-control value="Ascend">' . '</form> <br>';
  $page->content.='</div>';
  $page->content.="</div>";

  $page->content.="<div class=row>";
  $page->content.='<div class=col-md-4></div> <div class=col-md-4>';
  $page->content.='<form action="manual/descend.php" method="REQUEST">';
  $page->content.='<input type=hidden name=descend class=form-control>';
  $page->content.='<input type="submit" class=form-control value="Descend">' . '</form> <br>';
  $page->content.='</div>';
  $page->content.="</div>";

  $page->content.="<div class=row>";
  $page->content.='<div class=col-md-4></div> <div class=col-md-4>';
  $page->content.='<form action="manual/forward.php" method="REQUEST">';
  $page->content.='<input type=hidden name=forward class=form-control>';
  $page->content.='<input type="submit" class=form-control value="Forward">' . '</form> <br>';
  $page->content.='</div>';
  $page->content.="</div>";

  $page->content.="<div class=row>";
  $page->content.='<div class=col-md-4></div> <div class=col-md-4>';
  $page->content.='<form action="manual/back.php" method="REQUEST">';
  $page->content.='<input type=hidden name=back class=form-control>';
  $page->content.='<input type="submit" class=form-control value="Back">' . '</form> <br>';
  $page->content.='</div>';
  $page->content.="</div>";

  $page->content.="<div class=row>";
  $page->content.='<div class=col-md-4></div> <div class=col-md-4>';
  $page->content.='<form action="manual/right.php" method="REQUEST">';
  $page->content.='<input type=hidden name=right class=form-control>';
  $page->content.='<input type="submit" class=form-control value="Right">' . '</form> <br>';
  $page->content.='</div>';
  $page->content.="</div>";


  $page->content.="<div class=row>";
  $page->content.='<div class=col-md-4></div> <div class=col-md-4>';
  $page->content.='<form action="manual/left.php" method="REQUEST">';
  $page->content.='<input type=hidden name=left class=form-control>';
  $page->content.='<input type="submit" class=form-control value="Left">' . '</form> <br>';
  $page->content.='</div>';
  $page->content.="</div>";

  $page->content.="<div class=row>";
  $page->content.='<div class=col-md-4></div> <div class=col-md-4>';
  $page->content.='<form action="manual/stop.php" method="REQUEST">';
  $page->content.='<input type=hidden name=stop class=form-control>';
  $page->content.='<input type="submit" class=form-control value="Stop">' . '</form> <br>';
  $page->content.='</div>';
  $page->content.="</div>";

  $page->content.="<br/><br/>";

  $page->content.="<div class=row>";
  $page->content.='<div class=col-md-4></div> <div class=col-md-4>';
  $page->content.='<form action="home.php" method="REQUEST">';
  $page->content.='<input type=hidden name=home class=form-control>';
  $page->content.='<input type="submit" class=form-control value="Home">' . '</form> <br>';
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
