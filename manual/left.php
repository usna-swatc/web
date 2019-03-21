<?php
# MIDN Jake Woods, 197068, SWAT-C

  $file = "../commands.txt";
  $content = "" . date("Y/m/d") . " " . date("h:i:sa") . " Left\n";
  file_put_contents($file,$content, FILE_APPEND);

  header("Location:../manual.php");
  exit;
?>
