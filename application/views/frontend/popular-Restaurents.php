<?php $this->load->view('frontend/header.php');?>
<style>
    .containerdiv {
  border: 0;
  float: left;
  position: relative;
  width: 300px;
} 
.cornerimage {
  border: 0;
  position: absolute;
  top: 0;
  left: 0;
  overflow: hidden;
 } 
.stars{
   max-width: 93px;
 }
</style>

	<!-- header-section-ends -->
	<!-- content-section-starts -->

		<div class="row">
			<div class="container">
			    <br/>
			    	<h3><b>Franchises</b></h3>
			    	<br/>
			    	<div class="row">
			<?php foreach($kitchen as $kit){ ?>
				<div class="col-md-6">
		
			<div style="height:130px; border: 1px solid #e3e3e3;  background-color: #F5F5F5; border-radius: 3px; padding:10px; padding-top:15px; padding-bottom:15px;margin-bottom:32px">
				<div class="col-md-3">
				<a href="<?php echo base_url();?>front/kitchenDetail/<?php echo @$kit->kitchen_id;?>"><img src="<?php echo base_url();?>assets/uploads/images/<?php echo @$kit->kitchen_image;?>" class="img-responsive" alt="" style="height:100px;border: 1px solid #e3e3e3;
    border-radius: 3px;" /></a>
				</div>
				<div class="col-md-9" style="padding:5px;">
					<div><a style="color:#333;" href="<?php echo base_url();?>front/kitchenDetail/<?php echo $kit->kitchen_id;?>"><h4><b><?php echo @$kit->kitchen_name;?></b></h4></a></div>
					<div style="height:50px;"><p><b>Address : </b><?php echo @$kit->kitchen_address;?></p></div>

				
							<div style="margin-left: 0%;">
						<div  class="containerdiv">
    <div>
    <img  class="stars" src="<?php echo base_url();?>assets/images/stars_blank.png" alt="img">
    </div>
    <div class="cornerimage" style="width:<?php if (@getRating(@$kit->kitchen_id)==""){echo 0;} else{echo @getRating(@$kit->kitchen_id)/5;}?>%;">
    <img   class="stars" src="<?php echo base_url();?>assets/images/stars_full.png" alt="">
    </div>
</div>
							<div class="col-md-2">(<?php echo @getRatingCount(@$kit->kitchen_id);?>)</div>
						</div>
				</div>
			</div>
		
		</div>

			<?php } ?> 

</div>
				
		
			</div>
			</div>
		
	
	<!-- content-section-ends -->
	<!-- footer-section-starts -->
<?php $Front = &get_instance();
$Front->footer();
?>