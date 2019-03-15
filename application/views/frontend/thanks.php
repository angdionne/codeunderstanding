<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php $this->load->view('frontend/header'); ?>
<div class="row">
    <div class="col-md-12" style="height:100px" ></div>
     <center><?php if(isset($message))
   {
       
       echo "<h2>".$message."</h2>";
       
       } ?></center>
    <div style="height:300px;"><h3><center>Thank you for your order!! </center></h3>
    <p style="text-align:center; font-size:18px;">We have sent you an email kindly check the email(also check the spam).<br/> If you have not received it kindly inform us at 917.932.4610.</p>
  
    
    </div>
</div>
<script>
     setTimeout(viewourfood, 10000)
    
    function viewourfood(){
        window.location.href = "<?php echo base_url(); ?>front/ourFood";
    }
</script>
<?php $Front = &get_instance();
$Front->footer();
?>