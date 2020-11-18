<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bus Seat Reservation</title>
    <link rel="stylesheet" href="bus.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="bus.js"></script>
  </head>
  <?php
    session_start();
    
    $departure = $_POST['departure'];
    $arrival = $_POST['arrival'];
    $date = $_POST['date'];
  
    $_SESSION['details'] = array('departure'=>$departure, 'arrival'=>$arrival, 'date'=>$date);
  ?>

  <body>
    <form action="details.php" method="post">
      <div class="header">
        <h1>Bus Seat Reservation</h1>
      </div>

      <div class="container">
        <div class="column" id="bus_center">
          <div class="bus_seat">
            <div class="row" id="steering">
              <img src="img/steering.png" alt="Steering">
            </div>
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
          </div>
        </div>
    
        <div class="column" id="seat_center">
          <div class="book">
            <b class="seatText">Chosen seat: </b>
            <h1 class="seatText" id="seatNo"></h1> <br>

            <b class="priceText">Price: </b>
            <h1 class="priceText" id="price"></h1> <br>

            <input type="submit" disabled id="btnCheck" value="Book Now">
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
