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


#slideshow { 
    margin: 16x ; 
    position: relative; 
    width: 240px; 
    height: 240px; 
    padding: 10px; 
    /*box-shadow: 0 0 20px rgba(0,0,0,0.4); */
}

#slideshow > div { 
    position: absolute; 
    top: 0px; 
    left: 0px; 
    right: 10px; 
    bottom: 10px; 
}

</style>
<div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
	<form action="<?php echo base_url()?>front/saveGift" method="post">
		<div class="content" style="background-color: white;">
			<div class="ordering-section" id="Order">
				<div class="container">
					<div class="col-md-6">
						<h2>We are the world's largest culinary platform for immersive dining</h2>
						<p>Exclusive events hosted by passionate hosts</p>
						
					</div>
					<div class="col-md-6">
						<div id="slideshow">
						   <div>
						     <img style="height: 320px; width: 450px;" src="<?php echo base_url();?>assets/images/1.jpg"  >
						   </div>
						   <div>
						     <img style="height: 320px; width: 450px;" src="<?php echo base_url();?>assets/images/2.jpg">
						   </div>
						    <div>
						     <img style="height: 320px; width: 450px;" src="<?php echo base_url();?>assets/images/3.jpg">
						   </div>
						    <div>
						     <img style="height: 320px; width: 450px;" src="<?php echo base_url();?>assets/images/4.jpg">
						   </div>
						    <div>
						     <img style="height: 320px; width: 450px;" src="<?php echo base_url();?>assets/images/5.jpg">
						   </div>
						   <div>
						     <img style="height: 320px; width: 450px;" src="<?php echo base_url();?>assets/images/1.jpg">
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
					<h4 style="color: red;">Find Your Flavor even Faster</h4><br>
					<p>For Speedy Ordering and delivery updates<br> get the My Food app. </p><br>


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
					font-size: 30px;" >Sign Up for Our NewsLetter: </h3>

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
	$("#slideshow > div:gt(0)").hide();

	setInterval(function() {
	  $('#slideshow > div:first')
	    .fadeOut(1000)
	    .next()
	    .fadeIn(1000)
	    .end()
	    .appendTo('#slideshow');
	}, 3000);

</script>
