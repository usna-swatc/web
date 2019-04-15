<?php
# MIDN Jake Woods, 197068, SWAT-C

  $file = "../commands.txt";
  $content = "" . date("Y/m/d") . " " . date("h:i:sa") . " Take Off\n";
  file_put_contents($file,$content, FILE_APPEND);

?>

<html>
  <script type="text/javascript" src="http://static.robotwebtools.org/EventEmitter2/current/eventemitter2.min.js"></script>
  <script type="text/javascript" src="http://static.robotwebtools.org/roslibjs/current/roslib.min.js"></script>
  <script type="text/javascript" type="text/javascript">
    var ros = new ROSLIB.Ros({
      url : 'ws://localhost:9090'
    });

    var takeOffClient = new ROSLIB.ActionClient({
      ros : ros,
      serverName : '/takeOff',
      actionName : 'goats-msgs/action/takeoff.action'
    });

    var goal = new ROSLIB.Goal({
      actionClient : takeoff.action,
      goalMessage : {
        pose.position.z: 50
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
