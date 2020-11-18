$(document).ready(function() {
    var today = new Date().toISOString().split('T')[0];
    $('#myDate')[0].setAttribute('min', today);
});