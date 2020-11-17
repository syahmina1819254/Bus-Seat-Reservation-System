<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="PassengersDetailForm.css">
    <title>Bus Seat Reservation System</title>
  </head>

  <body>
    <div class="banner">
      <h1>Bus Seat Reservation</h1>
    </div>

    <div class="Formbox">
      <form  action="seat.php" method="post">
        <div >
          <div class="item">
            <p>Destination</p>
            <div class="name-item">
              <input type="text" name="departure" placeholder="From" />
              <input type="text" name="arrival" placeholder="To" />
            </div>
          </div>

        <div >
        <h2>Journey Date</h2>
        <div>
          <input type="date"  name="date">
        </div>
        </div>
        <input type="submit"  value="Select Seat">

      </form>


    </div>

  </body>
</html>
