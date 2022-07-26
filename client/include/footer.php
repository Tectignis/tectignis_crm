<footer class="main-footer">
    <strong>&copy; 2022 <a href="https://tectignis.in">Tectignis IT Solutions</a>.</strong>
    All rights reserved.
  </footer>

  <script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->

<link rel="stylesheet" href="plugins/toastr/toastr.min.css">
<script src="plugins/toastr/toastr.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="dist/js/adminlte.js"></script>
  <?php
 
$res_message=mysqli_query($conn,"select client.Firm_Name,lead.Client_Name,lead.Client_Name,lead.Requirement,lead.Created_On from lead,client where lead.status=0 and lead.Firm_Name='$client_id' and client.Client_Code=lead.Firm_Name");
$unread_time=mysqli_fetch_assoc($res_message);
$time=$unread_time['Created_On'];
$unread_count=mysqli_num_rows($res_message);
if($unread_count>0){
?>
<script>
	// $(document).ready(function(){
  //   $(document).Toasts('create', {
  //       class: 'bg-warning',
  //       title: '<?php echo $fname; ?>',
  //       subtitle: '',
  //       body: 'You have <?php echo $unread_count; ?> new lead',
  //     }, 15000);
      
	// });
  $(function() {

    toastr.warning('You have <?php echo $unread_count; ?> new lead')
  });
</script>
<?php } ?>
<script>
      $(document).ready(function () {
          $('.toast-body').click(function () {
              jQuery.ajax({
              url:'update_message_status.php',
              success:function(){
                $('.toast').hide();
                window.location.href='lead.php';
              }
              })
              return false;
          });
          $(document).click(function () {
           
          });
      });
   </script>