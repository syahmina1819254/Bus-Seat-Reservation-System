<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>


    <link rel="stylesheet" href="ReservedApprove.css">


  </head>
  <body>
    <?php
      session_start();
    $Seatreserve =  $_POST['custSeat'];
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $age= $_POST['age'];
    $Email= $_POST['Email'];
    $contact= $_POST['Contact'];

    function Price($seat)
    {
      if ($seat==1||$seat==4||$seat==7||$seat==10||
      $seat==13||$seat==16||$seat==19||$seat==22||$seat==25
      ||$seat==28 ) { echo "Single Seat";
      }
      else {
        echo "RM30(Double Seat)";
      }
    }
     ?>

      <div class="banner">
        <h1> Bus Seat Reservation </h1>
      </div>

      <br><br>
      <div class="box">

        <div class="Approve">
          <h3> Your Reservation have been approved ✅ </h3>


        </div>
        <h4>Reservation Detail</h4>

          <p>Name:    <?php echo $Fname; ?> <?php echo $Lname; ?>  </p>
          <p>Age :    <?php echo $age; ?></p>
          <p>Email:   <?php echo $Email; ?></p>
          <p>Contact: <?php echo $contact; ?></p>
          <p>Departure: <?php echo $_SESSION['details']['departure']; ?></p>
          <p>Arrival: <?php  echo $_SESSION['details']['arrival'];?></p>
          <p>Date: <?php echo $_SESSION['details']['date']; ?></p>
          <p>Seat number: <?php echo $Seatreserve ?></p>
          <p>Paid:  <?php Price($Seatreserve); ?></p>



        <br>
        <div class="button">
          <button type="button" onclick="document.location='index.html'" name="Homepage" > Home </button>

        </div>


      </div>
  </body>
</html>
