<!DOCTYPE html>
<html>
  <head>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="PassengersDetailForm.css">

  </head>
  <body>
<?php
session_start();
$Seatreserve =  $_POST['seat'];

 ?>
    <div class="banner">
      <h1>Bus Seat Reservation</h1>
      
    </div>
        <div class="Formbox">
          <form action="ReservedApprove.php" method="post">
        <div >
        <h2>Passenger Information</h2>
        </div>

        <div class="item">
          <div class="name-item">
              Seat Number: <?php echo $Seatreserve; ?>
               <input type="hidden" id="custId" name="custSeat" value="<?php echo $Seatreserve; ?>">
          </div>
          <p>Name</p>
          <div class="name-item">
            <input type="text" name="Fname" placeholder="First" />
            <input type="text" name="Lname" placeholder="Last" />
          </div>
        </div>
        <div class="item">
          <p>Age</p>
            <input type="text" name="age" placeholder="Age" />
        </div>

        <div class="">
          <h2>Contact Information</h2>
        </div>
        <div class="item">
          <p>Email</p>
          <input type="text" name="Email"/>
        </div>
        <div class="item">
          <p>Phone</p>
          <input type="text" name="Contact"/>
        </div>
        <div class="btn-block">
                 <button type="submit">SEND</button>
               </div>
      </form>
    </div>
  </body>
</html>

