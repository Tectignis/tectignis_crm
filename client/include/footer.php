<footer class="main-footer">
    <strong>&copy; 2022 <a href="https://tectignis.in">Tectignis IT Solutions</a>.</strong>
    All rights reserved.
  </footer>
<style>
</style>
  <script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->

<link rel="stylesheet" href="plugins/toastr/toastr.min.css">
<script src="plugins/toastr/toastr.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="dist/js/adminlte.js"></script>
  <?php
if($unread_count>0){
?>
<script>
  $(function() {
    toastr.info('You have <?php echo $unread_count; ?> new lead')
  });
</script>
<?php } ?>
<script>
      $(document).ready(function () {
          $('.toast-message').click(function () {
              jQuery.ajax({
              url:'update_message_status.php',
              success:function(){
                $('.toast-container').hide();
                window.location.href='lead.php';
              }
              })
              return false;
          });
          $(document).click(function () {
          });
      });
   </script>
    <script>
      date_default_timezone_set('Asia/Kolkata');
  $("#sideCollapse").click(function(){
    $(".sidebar-mini").toggleClass("sidebar-collapse");
  });
</script>
<?php 
$qreminder=mysqli_query($conn,"SELECT remainder_date,(DATE_FORMAT(remainder_date,'%M')) AS 'Month', (DATE_FORMAT(remainder_date,'%d')) as date FROM `lead` WHERE Firm_Name='$id'");
$freminder=mysqli_fetch_assoc($qreminder);
$year1= date('Y', strtotime($freminder['remainder_date']));
$month1= $freminder['Month'];
$date1= date('d', strtotime($freminder['remainder_date']));
$time1=date('H:i:s', strtotime($freminder['remainder_date']));
?>
<script>

var countDownDate = new Date("<?php echo $month1." ".$date1 ?>, <?php echo $year1 ?> <?php echo $time1 ?>").getTime();
// Update the count down every 1 second
var countdownfunction = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
  
  // Find the distance between now an the count down date
  var distance = countDownDate - now;
  
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  // Output the result in an element with id="demo"
  document.getElementById("timer").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("timer").innerHTML = "EXPIRED";
  }
}, 1000);
</script>