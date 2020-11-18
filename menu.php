<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="date.js"></script>
    <title>Bus Seat Reservation System</title>
  </head>
  <body>
    <div class="header">
      <h1>Bus Seat Reservation</h1>
    </div>

    <div class="formbox">
      <form action="bus.php" method="post">
        <div class="item">
          <p>Destination</p>
          <div class="name-item">
            <input type="text" name="departure" placeholder="From" required=/>
            <input type="text" name="arrival" placeholder="To" required=/>
          </div>
        </div>

        <div>
          <h2>Journey Date</h2>
          <div>
            <input type="date" name="date" id ="myDate" min="" required>
          </div>
        </div>
        <div class="formBtn"><input type="submit" value="Book Now" class="button"></div>
      </form>
    </div>
  </body>
</html>
