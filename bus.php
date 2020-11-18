<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bus Seat Reservation</title>
    <link rel="stylesheet" href="css/master.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <form action="PassengerDetailForm.php" method="post">
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
	   <H4>This seat price is : <span class="result"></span></h4>
    <H4>This seat type is : <span class="types"></span></h4>
      <script>

          $('input[type=radio]').click(function(e) {

              var seat = $("input[name='seat']:checked").val( );
              var price;
              var type;

              if (seat==1||seat==4||seat==7||seat==10||
              seat==13||seat==16||seat==19||seat==22||seat==25
              ||seat==28 ) {
                price="RM35.00";
                type="Single Seat";
              } else {
                 price="RM30.00";
                 type="Double Seat";
               }
              $('.result').html(price);
              $('.types').html(type);


          });
      </script>
  </body>
</html>
