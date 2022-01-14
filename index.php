<?php include 'connection.php'; ?>
<html>
<head>
  <title>Duration</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script> startTime = new Date(); </script>
</head>
<body onbeforeunload="myFunc()">
  <h1>Finding Time spent on this page</h1>
  <br>
  <h3>Following are results:</h3>
  <?php
  $select = mysqli_query($conn,"SELECT * FROM duration");
  while($s = mysqli_fetch_array($select)){
    $dur = $s['time'];
    $dur = $dur/1000;
    echo $dur.' seconds <br>';
  }
  ?>
  <script>
  function myFunc(){
    endTime = new Date();
    $.ajax({
      url:'addDur.php',
      method:'POST',
      data:{
        duration:endTime - startTime,
      }
    });
  }
  </script>
</body>
</html>