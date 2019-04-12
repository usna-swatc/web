<?php
# MIDN Jake Woods, 197068, SWAT-C

  $file = "../commands.txt";
  $content = "" . date("Y/m/d") . " " . date("h:i:sa") . " Track\n";
  file_put_contents($file,$content, FILE_APPEND);

?>

<html>
  <script type="text/javascript" src="http://static.robotwebtools.org/EventEmitter2/current/eventemitter2.min.js"></script>
  <script type="text/javascript" src="http://static.robotwebtools.org/roslibjs/current/roslib.min.js"></script>
  <script type="text/javascript" type="text/javascript">

    // connect to ROS, needs to be changed to the O-Droid
    var ros = new ROSLIB.Ros({
      url : 'ws://localhost:9090'
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

    var cmdTopic = new ROSLIB.Topic({
      ros : ros,
      name : '/cmd_topic',
      messageType : '../goats-msgs/Task.msg'
    })

    var msg = new ROSLIB.Message({
      target_group : 0,
      target_sys : 0,
      target_task : 'track.action'
    });
    cmdTopic.publish(msg);

    window.location.href = "../complex.php";

  </script>
</html>
