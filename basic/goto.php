<?php
# MIDN Jake Woods, 197068, SWAT-C

  $file = "../commands.txt";
  $content = "" . date("Y/m/d") . " " . date("h:i:sa") . " Go To\n";
  file_put_contents($file,$content, FILE_APPEND);


?>

<html>
  <p id="testing"></p>
  <script type="text/javascript" src="http://static.robotwebtools.org/EventEmitter2/current/eventemitter2.min.js"></script>
  <script type="text/javascript" src="http://static.robotwebtools.org/roslibjs/current/roslib.min.js"></script>
  <script type="text/javascript" type="text/javascript">
    function success(pos) {
      userlat = pos.coords.latitude;
      userlong = pos.coords.longitude;
      jQuery('#userlat').val(userlat);
      jQuery('#userlong').val(userlong);
    }
    // if error, defualt USNA
    function error(err) {
      userlat = 38.9836;
      userlong = -76.4823;
      jQuery('#userlat').val(userlat);
      jQuery('#userlong').val(userlong);
    }

    var ros = new ROSLIB.Ros({
      url : 'ws://localhost:9090'
    });

    var page = document.getElementById("testing")

    var userlat;
    var userlong;

    //get location of the user
    navigator.geolocation.getCurrentPosition(success, error);
page.innerHTML += "here";
    page.innerHTML += jQuery('#userlat').val();
    page.innerHTML += "a\n";
    page.innerHTML += jQuery('#userlong').val();
    page.innerHTML += "a\n";
page.innerHTML += "here";

    var goToClient = new ROSLIB.ActionClient({
      ros : ros,
      serverName : '/goto',
      actionName : 'goats-msgs/action/goto.action'
    });

    var goal = new ROSLIB.Goal({
      actionClient : goto.action,
      goalMessage : {
        lattitude: 50,
        longitude: 50
      }
    });

    goal.on('feedback', function(feedback) {
      console.log('Feedback: ' + feedback.sequence);
    });

    goal.on('result', function(result) {
      console.log('Final Result: ' + result.sequence);
    });

    ros.on('connection', function() {
      console.log('Connected to websocket server.');
    });

    ros.on('error', function(error) {
      console.log('Error connecting to websocket server: ', error);
    });

    ros.on('close', function() {
      console.log('Connection to websocket server closed.');
    });

    goal.send();
  </script>
</html>
