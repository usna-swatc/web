<?php
# MIDN Jake Woods, 197068, SWAT-C
# This script was made using several components from a
# a previous project for IT360 MIDN V Xu, S Barkley,
# and J Williams contributed to the original project.

# NOT FUNCTIIONAL!!! Needs a databse component to keep a user logged in
#
# Developer note: Before implementing the DB, recommend checking that
# the O-Droid has mysql or SQLite installed. If not possible, consider
# an alternative DB implementation.

// auth.inc.php - This file will be used to authenticate and logon users.
  session_start();                  # Start the Session
  $sessionid = session_id();        # Retrieve the session id

  // LOGON THE USER (if requested)  # Check to see if user/password were sent
  if (isset($_POST['username']) && isset($_POST['password'])) {
                                    # Validate the user/password combination
    if (!logon($_POST['username'], $_POST['password'], $sessionid)) {
      header('Location: login.php');# Redirect the user to the login page
      die;                          # End the script (just in case)
    }
  }

  // VERIFY THE USER IS LOGGED ON
  $user = verify($sessionid);  # Verify the user, return username or ''
  if ($user == '') {                # User was not successfully verified!
    header('Location: login.php');  # Redirect the user to the login page
    die;                            # End the script (just in case)
  }

  // if($user != '') {
  //   echo "success <pre>";
  //   print_r($_SESSION);
  //   echo "</pre>";
  //   // $_REQUEST['logoff'] = true;
  // }

  // LOGOFF THE USER
  if (isset($_REQUEST['logoff'])) { # Did the user request to logoff?
    logoff($sessionid);        # Remove the row with this sessionid
    header('Location: logout.php');  # Redirect the user to the login page
    die;                            # End the script (just in case)
  }

  header("Location: home.php");
////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////
// Function verifies that the username / password combination is valid, and
function logon($username, $password, $sessionid) {
  $result = 'usna';
  if($username == 'usna'){
    if($password == 'goats1845!')
      $result = 'usna';
  }
  return $result;
}

function verify($sessionid) {

}

function logoff($sessionid) {

}

?>
