<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bus Seat Reservation</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <form action="PassengerDetailForm.html" method="post">
      <div class="container">
        <div class="column">
          <div class="bus_seat">
            <div class="row" id="steering">
              <img src="img/steering.png" alt="Steering">
            </div>
            <?php
            session_start();
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
          </div>
        </div>
		
		<div class="column">
            <input type="submit" value="Book Now">
        </div>
      </div>
    </form>
  </body>
</html>
