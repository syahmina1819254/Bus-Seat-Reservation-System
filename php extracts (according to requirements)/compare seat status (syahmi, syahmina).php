//Requirement(s): 3, 4
//This .php code compares the status of seats in the array, if reserved, then it won't be available.
//The radio button sends the seat number for pricing matters, and allows users to choose seats according to their types.
<?php
	for ($i = 0; $i < 10; $i++) {
	  print '<div class="row">' .
	  '<label class="single">';
	  if($_SESSION['seats'][$i][0][1] == 0)
	  {
		print '<input type="radio" name="seat" value="'. $_SESSION['seats'][$i][0][0] . '">' .
			  '<img src="img/seat.png" alt="Seat1">';
	  } else {
		print '<img src="img/seattaken.png" alt="Seat1">';
	  }
	  print '</label>' .

	  '<label>';
	  if($_SESSION['seats'][$i][1][1] == 0)
	  {
		print '<input type="radio" name="seat" value="'. $_SESSION['seats'][$i][1][0] . '">' .
			  '<img src="img/seat.png" alt="Seat1">';
	  } else {
		print '<img src="img/seattaken.png" alt="Seat1">';
	  }
	  print '</label>' .

	  '<label>';
	  if($_SESSION['seats'][$i][2][1] == 0)
	  {
		print '<input type="radio" name="seat" value="'. $_SESSION['seats'][$i][2][0] . '">' .
			  '<img src="img/seat.png" alt="Seat1">';
	  } else {
		print '<img src="img/seattaken.png" alt="Seat1">';
	  }
	  print '</label>' .
	  '</div>';
	}
?>