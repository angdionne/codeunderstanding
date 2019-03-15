<?php $this->load->view('frontend/header.php');?>
<!-- header-section-ends -->
<!-- content-section-starts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<style>
@media screen and (max-width: 699px) and (min-width: 360px) {
	#searchy {
		margin-right:0px !important;
	}
	#news
	{
		margin-left: 96px !important;
	}
	.fd
	{
		margin-left: 106px;
	}
	ul
	{
		margin-left: -49px !important;
	}
	#email
	{
		margin-left:-16px !important;
		width: 337px !important;
	}
	.aw
	{
		margin-left: 63px;
	}
	#downimage
	{
		margin-top:6% !important; 
	}
	#locy
	{
		margin-right: 28% !important;
	}
	#ciusy
	{
		margin-right: 28% !important;
	}
	#kitchen
	{
		margin-left: -70px; 
	}
	.special-offers-section-grids
	{
		margin-left: -13px !important;
	}
	#foodcat
	{
		margin-left: -58px;
	}
	#butny
	{
		right:18% !important;
	}
	#padloc
	{
		padding:-5px !important;
	}
	#padloc2
	{
		padding:-5px !important;
	}
	#pop2
	{
		margin-left: -10px  !important;
	}
	#pop
	{
		margin-left: -61px  !important;
	}
	.box_1
	{
		margin-left: -166px  ;
	}
	#pricy
	{
		margin-bottom:10px; 
		margin-top: -16px
	}
	#discy
	{
		line-height:0px !important;
	}
	#maint
	{
		margin-left: -61px !important;
	}
	#lint
	{
		margin-left: -61px !important;
	}
	#easy
	{
		font-size:33px !important;
		margin-left: -28px !important;
	}
	#easy2
	{
		margin-left: -11px !important; 
	}
	.daba
	{
		width: 90% !important;
		margin-left: -17px
	}
}
}
.form-control
{
	height: 41px !important;
}
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
<div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
	<form action="<?php echo base_url()?>front/saveGift" method="post">
		<div class="content" style="background-color: white;">
			<div class="ordering-section" id="Order">
				<div class="container">
					<div class="ordering-section-head text-center wow bounceInRight" data-wow-delay="0.4s">
						<div>
							<h1 class="h1" id="easy" style="color: rgb(208, 83, 35);">Give the gift that food and travelers lovers <br><strong>will never forget</strong></h1>
						</div>
						<p id="easy" style="color: rgb(208, 83, 35);">Send your loved ones to enjoy immersive culinary experiences with locals around the world.</p><br>

						<h4 id="easy2" style="color: #0c0c0c">Step 1: Choose your gift card</h4>

					</div>
					<div class="ordering-section-grids" style="margin-top: 0em;">
						<div class="row ">
							<div class="col-md-12">
								<div class="form-list wow fadeInRight" data-wow-delay="0.5s">
									<ul class="navmain">
										<center>
											<li id="searchy" style="margin-right:20px;"><span id="locy" style="margin-right: 62%;">Location Name</span>
												<select  id="kitchen" class="form-control" name="amount" required="">
													<option value="" selected="" >Select Deal</option>
													<option value="20">$20</option>
													<option value="30">$30</option>
													<option value="40">$40</option>
													<option value="50">$50</option>
													<option value="60">$60</option>
												</select>
											</li>

										</center>
									</ul>
								</div>
							</div>
						</div>
					</div>
					

				</div>
			</div>
		</div>

		<div class="content" style="background-color: white;">
			<div class="ordering-section" id="Order" style="padding: 1em 0;">
				<div class="container">
					<div class="ordering-section-head text-center wow bounceInRight" data-wow-delay="0.4s">
						<br>

						<h4 id="easy2" style="color: #0c0c0c">Step 2: Choose your Eatwith gift card</h4>
						<p>Please insert your contact information and personal message</p>

					</div>
					<div class="ordering-section-grids" style="margin-top: 2em;">
						<div class="row ">
							<div class="col-md-12">
								<div class="form-list wow fadeInRight" data-wow-delay="0.5s">
									<ul class="navmain">
										<center>
											<li id="searchy" style="margin-right:20px;">
												<div class="senderNameFormContainer"><label for="senderName">Your name</label><br> <input type="text" class="form-control" name="name"  placeholder="Your name" required=""><br></div>

												<div class="senderNameFormContainer"><label for="senderName">Your recipient's name</label><br> <input type="text" class=" form-control" name="recipient" placeholder="Your recipient's name" required=""><br></div>

												<div class="senderNameFormContainer"><label for="senderName">Your email address</label><br> <input type="email" class=" form-control" name="email" placeholder="Your email address" required=""><br></div>

												<div class="senderNameFormContainer"><label for="senderName">Add a personal message</label><br> <textarea class="form-control"  placeholder="This message is limited to 150 characters and cannot be edited once submitted." required="" name="message"></textarea><br></div>
												<div class="clearfix"> </div>This message is limited to 150 characters and cannot be edited once submitted.
												<div class="sub-button wow swing animated" data-wow-delay= "0.4s">
													<input name="submit" type="submit" value="Send message">
												</div>
											</li>
											
												 <?php if($this->session->flashdata('message')!=""){echo "<h3>" .$this->session->flashdata('message')."</h3>";} ;?>
											

										</center>
									</ul>
								</div>
							</div>
						</div>
					</div>
					

				</div>
			</div>
		</div>
	</form>

	<div class="service-section">
		<div class="service-section-bottom-row">
			<div class="container">
				<div  class="  col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
					<div style="width:95%" class=" daba well">
						<div class="icon">
							<img src="<?php echo base_url();?>assets/images/like.png" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4 style="color:black; font-size:1.2em; font-family:Arial;line-height: 0.5;">100% Service Guarantee</h4>
							<p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class=" col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
					<div style="width:95%" class=" daba well">
						<div class="icon">
							<img src="<?php echo base_url();?>assets/images/computer.png" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4 style="color:black; font-size:1.2em; font-family:Arial; line-height: 0.5;">Fully Secure Payment</h4>
							<p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class=" col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
					<div style="width:95%" class=" daba well">
						<div class="icon">
							<img src="<?php echo base_url();?>assets/images/service.png" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4 style="color:black; font-size:1.2em; font-family:Arial;     line-height: 0.5;">Track Your Order</h4>
							<p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<br>
		<div class="service-section-bottom-row">
			<div class="container">
				<div  class="col-md-6 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
					<style>
					@media screen and (max-width: 420px) {
						#saya{

							margin-left: 0% !important;
						}
						#butny
						{
							width: 31px !important;
						}
					}
					#saya{

						margin-left: 41%;
					}
				</style>

				<img id="saya"  style="margin-top: -14%;" src="<?php echo base_url();?>assets/images/mob.png" class="img-responsive" alt="" />


				<div class="clearfix"></div>
			</div>
			<div style="margin-top: -3%" class="col-md-6 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">

				<div class="">
					<h4 style="color: red;">Find Your Flavour even Faster</h4><br>
					<p>For Speedy Ordering and delivery updates<br> get the Food Mate app. </p><br>


					<img style="width: 25%; height:16%;" src="<?php echo base_url();?>assets/images/android.ie.svg"></a>&nbsp;&nbsp;


					<a href="#"><img src="<?php echo base_url();?>assets/images/ios.ie.svg"></a>

				</div>


				<div class="clearfix"></div>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>
	<div style="background-color:rgba(242, 242, 242, 0.68);" class="service-section-bottom-row">
		<div class="container">
			<div  class="col-md-5 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">

				<div class="icon-data">
					<h3 id="newsy" style="text-align: right;
					font-size: 30px;" >Sign Up for NewsLetter: </h3>

				</div>



			</div>
			<div  class=" col-md-6 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">


				<input type="email" placeholder="Enter Your E-mail" id="email" style="height: 52px  !important; margin-left: -133px;"  class=" form-control" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">




				<div class="clearfix"></div>
			</div>
			<div  class="col-md-1 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">


				<input type="submit" class="btn btn-primary" style="border-color:limegreen; background-color:limegreen; height: 52px; font-size:23px; margin-left: -143px;
				" id="news" value="Suscribe">

				<br><br> <h4 style="color: limegreen" id="show"></h4>




				<div class="clearfix"></div>
			</div>



		</div>
	</div>
</div>

<?php $Front = &get_instance();
$Front->footer();
?>

<script>
	$('#kitchen').on('change',function(){
		var kitchen_id= $('#kitchen').val();
		$.ajax({
			url : '<?php echo base_url();?>front/getFoodType',
			type : 'post',
			data : {
				id : kitchen_id
			},

			success : function(data){
    					//alert(data);
    					var info = JSON.parse(data);
    					//alert(info.length);
    					var html = "";
    					for (i=0; i< info.length; i++)
    					{
    						html += '<option value='+info[i].food_cat_id+' class="title" selected ="selected" style="font-family:\'Droid Sans\',sans-serif;">'+info[i].food_cat_name+'</option>';
    					}

    					//alert(html);

    					//$('.title').remove();
    					$('#foodcat').empty();
    					$('#foodcat').append(html);
    					//document.getElementsById('petbreed').innerHTML = html;

    				}
    			});

	});

</script>
