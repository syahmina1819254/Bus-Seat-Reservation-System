<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="form.css">
  </head>
  <body>
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
    <div class="header">
      <h1>Bus Seat Reservation</h1>
    </div>

    <div class="formbox">
      <form action="confirm.php" method="post">
        <div>
        <h2>Passenger Information</h2>
        </div>

        <div class="item">
          <p>Name</p>
          <div class="name-item">
            <input type="text" name="fname" placeholder="First" required/>
            <input type="text" name="lname" placeholder="Last" required/>
          </div>
        </div>
        
        <div class="item">
          <p>Age</p>
            <input type="number" name="age" required/>
        </div>

        <div class="">
          <h2>Contact Information</h2>
        </div>

        <div class="item">
          <p>Email</p>
          <input type="email" name="email" required/>
        </div>
        
        <div class="item">
          <p>Phone</p>
          <input type="tel" name="phone" required/>
        </div>

        <div class="">
          <h2>Seat Information</h2>
        </div>

        <div class="item">
          <p>Seat Number: <b><?php echo $seatText; ?></b></p>
          <p>Payment Amount (incl. 5% processing fee): <b><?php echo $priceText; ?></b></p>
        </div>

        <br>
        <div class="">
          <h2>Choose your preferred payment method: </h2>
        </div>

        <div class="payMethod">
          <div id="option">
            <input type="radio" name="seatNo" id="online" value="<?php echo $seatNo ?>" required/>
            <label for="online">Online Banking</label>
          </div>
          <br>
          <div id="option">
            <input type="radio" name="seatNo" id="credit" value="<?php echo $seatNo ?>" required/>
            <label for="credit">Credit/Debit Card</label>
          </div>
        </div>

        <div class="btn-block">
          <button type="submit">Confirm Payment</button>
        </div>
      </form>
    </div>
  </body>
</html>

