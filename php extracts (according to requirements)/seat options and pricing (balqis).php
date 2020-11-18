//Requirement(s): 3, 5
//This .php code determines the seat position in the row, and determines the pricing according to their type.
<?php
  $seatNo =  $_POST['seat'];

  if($seatNo % 3 == 1) {
	$priceText = "RM " . number_format(35.00 + (35.00 * 0.05), 2, '.', '');
	$seatText = $seatNo . " (Single seat)";
  } 
  
  else if($seatNo % 3 == 2) {
	$priceText = "RM " . number_format(35.00 + (35.00 * 0.05), 2, '.', '');
	$seatText = $seatNo . " (Double seat) (Aisle)";
  }
  
  else {
	$priceText = "RM " . number_format(30.00 + (30.00 * 0.05), 2, '.', '');
	$seatText = $seatNo . " (Double seat) (Window)";
  }
?>