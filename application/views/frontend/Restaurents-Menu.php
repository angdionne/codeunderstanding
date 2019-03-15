<?php $this->load->view('frontend/header.php');?>


	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="Popular-Restaurants-content">
		<div class="Popular-Restaurants-grids">
			<div class="container">
			<?php foreach($kitchen as $kit){ ?>
		






	<div class="col-md-6">
		
			<div style="height:130px; border: 1px solid #e3e3e3;  background-color: #F5F5F5; border-radius: 3px; padding:10px; padding-top:15px; padding-bottom:15px;margin-bottom:32px">
				<div class="col-md-3">

				<a  style="color:#333;" href="<?php echo base_url(); ?>front/catfood/<?php echo @$kit->food_cat_id;?>/<?php echo @$kit->kitchen_id;?>">
				<img src="<?php echo base_url();?>assets/uploads/images/<?php echo @$kit->food_cat_image;?>" class="img-responsive" alt="" style="height:100px;border: 1px solid #e3e3e3;
    border-radius: 3px;" /></a>
				</div>
				<div class="col-md-9" style="padding:5px;">
					<div><a  style="color:#333;" href="<?php echo base_url(); ?>front/catfood/<?php echo @$kit->food_cat_id;?>/<?php echo @$kit->kitchen_id;?>">
					<h4><b><?php echo @$kit->food_cat_name;?></b></h4></a></div>
					<div style="height:50px;"><p><?php echo substr(@$kit->description,0,150).'...';?></p></div>

				
							<div style="margin-left: -4%;">
							<div class="col-md-3">Min 10,000</div>
							<div class="col-md-3"><img src="<?php echo base_url();?>assets/images/star1.png" class="img-responsive" alt=""/></div>
							<div class="col-md-2">(004)</div>
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