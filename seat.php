<?php
  session_start();
  header("Location: bus.php");

$Departure= $_POST['departure'];
  $Arrival= $_POST['arrival'];
  $Date= $_POST['date'];
 
  $_SESSION['details']=array('departure'=>$Departure,'arrival'=>$Arrival,'date'=>$Date);

  //first element is seat number, second element is seat status (0 is available, 1 is reserved)
  $seat = array(
    array(array(1, 0), array(2, 0), array(3, 0)),
    array(array(4, 0), array(5, 0), array(6, 0)),
    array(array(7, 0), array(8, 0), array(9, 0)),
    array(array(10, 0), array(11, 0), array(12, 0)),
    array(array(13, 0), array(14, 0), array(15, 0)),
    array(array(16, 0), array(17, 0), array(18, 0)),
    array(array(19, 0), array(20, 0), array(21, 0)),
    array(array(22, 0), array(23, 0), array(24, 0)),
    array(array(25, 0), array(26, 0), array(27, 0)),
    array(array(28, 0), array(29, 0), array(30, 0))
  );

  $_SESSION['seats'] = $seat;
?> 
 
