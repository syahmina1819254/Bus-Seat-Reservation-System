<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="confirm.css">
  </head>
  <body>
    <?php
    session_start();

    $seatNo =  $_POST['seatNo'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $found = false;
    for($i = 0; $i < 10; $i++) {
      for($j = 0; $j < 3; $j++) {
        if($_SESSION['seats'][$i][$j][0] == $seatNo) {
          $_SESSION['seats'][$i][$j][1] = 1;
          $found = true;
          break;
        }
      }
      if($found) break;
    }
    ?>
    <div class="header">
      <h1> Bus Seat Reservation </h1>
    </div>

    <br>
    <div class="box">
      <div class="Approve">
        <h3> Payment successful. Your seat has been booked.</h3>
      </div>

      <h4>Reservation Details</h4>

      <div class="details">
        <p><b>Name:</b> <?php echo $fname; ?> <?php echo $lname; ?>  </p>
        <p><b>Age:</b> <?php echo $age; ?></p>
        <p><b>Email:</b> <?php echo $email; ?></p>
        <p><b>Phone No.:</b> <?php echo $phone; ?></p>
        <p><b>Departure:</b> <?php echo $_SESSION['details']['departure']; ?></p>
        <p><b>Arrival:</b> <?php  echo $_SESSION['details']['arrival'];?></p>
        <p><b>Date:</b> <?php echo $_SESSION['details']['date']; ?></p>
      </div>
        
      <h2>Seat number: <?php echo $seatNo ?></h2>

      <form action="menu.php" method="post"><input type="submit" name="Home" value="Back to Home" class="button"></form>
    </div>
  </body>
</html>
