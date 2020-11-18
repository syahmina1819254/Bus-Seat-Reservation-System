$(document).ready(function() {
  $("input[type='radio']").click(function() {

    $('#btnCheck').prop("disabled", !this.checked);

    var radioVal = $("input[name='seat']:checked").val();
    var priceText;
    var seatText;

    if(radioVal % 3 == 1) {
      priceText = "RM 35.00";
      seatText = parseInt(radioVal) + " (Single seat)";
    } else {
      priceText = "RM 30.00";
      seatText = parseInt(radioVal) + " (Double seat)";
    }

    $('#seatNo').html(seatText);
    $('#price').html(priceText);
  });
});
