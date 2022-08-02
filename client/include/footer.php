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
  $("#sideCollapse").click(function(){
    $(".sidebar-mini").toggleClass("sidebar-collapse");
  });
</script>