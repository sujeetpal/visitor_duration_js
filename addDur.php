<?php
include 'connection.php';
$duration = $_POST['duration'];
mysqli_query($conn,"INSERT INTO duration VALUES('','$duration')");
 ?>