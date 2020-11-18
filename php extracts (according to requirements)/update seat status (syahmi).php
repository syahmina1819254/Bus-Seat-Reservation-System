//Requirement(s): 4
//This .php code updates the seat status after a user has booked it. The seat will then become reserved.
<?php
  session_start();

  $found = false;
  for($i = 0; $i < 10; $i++) {
    for($j = 0; $j < 3; $j++) {
      if($_SESSION['seats'][$i][$j][1] == $seatNo) {
        $_SESSION['seats'][$i][$j][2] = 1;
        $found = true;
        break;
      }
    }
    if($found) break;
  }
 ?>