
<style>
	
	.order-form-grid input[type="submit"] {
    display: block;
    padding: 0.5em 1.5em;
    font-size: 16px;
    text-transform: uppercase;
    font-weight: 700;
    border: none;
    background: #5BBD50;
    color: #fff;
    margin: 1em 0 0 8em;
}

</style>


<?php $this->load->view('frontend/header.php');?>
	<!-- header-section-ends -->
	<div class="order-section-page">
		<div class="ordering-form">
			<div class="container">
			<div class="order-form-head text-center wow bounceInLeft" data-wow-delay="0.4s">
						<h3>Restaurant Order Form</h3>
						<p>Ordering Food Has Never Been So Simple !!!!!!</p>
					</div>
				<div class="col-md-6 order-form-grids" style="margin-top: 4.2em;">
					
					<div class="order-form-grid  wow fadeInLeft" data-wow-delay="0.4s">
						<h5>Order Information</h5>
						<!-- <span style="font-size:20px">Resturant: </span> --><span style="font-family: 'Lobster Two', cursive;
font-size:38px;margin-left:20px; color:#5BBD50;"><b><?php echo @$menu1->kitchen_name; ?></b></span><br/>
						<span style="font-size:20px">Menu:</span><span style="font-family: 'Lobster Two', cursive;font-size:18px;margin-left:58px;color:#5BBD50;"><b> <?php echo @$menu1->menu_name; ?></b></span><br/>
						<span style="font-size:20px">Price: </span><span style="font-family: 'Lobster Two', cursive;font-size:18px; margin-left:61px;color:#5BBD50;"><b><?php echo @$menu1->menu_price; ?> PKR</b></span><br/>
						<span style="font-size:20px">Description: </span>
						<span style="font-size:18px; margin-left: 5px; font-weight:normal"><?php echo @$menu1->menu_description; ?></span><br/>
						
						








<br/><br/>

					
					</div>
				</div>
				<div class="col-md-6 ordering-image wow bounceIn" data-wow-delay="0.4s">
					<img src="<?php echo base_url();?>assets/uploads/images/<?php echo @$menu1->menu_gallery; ?>" class="img-responsive" alt="" />
				</div>
			</div>
		</div>

<div class="ordering-form">
<div class="container">
				<div class="special-offers-section-head text-center dotted-line">
					<h4>Order Now</h4>
				</div>
					<div class="col-md-12 order-form-grids">
					
					<div class="order-form-grid  wow fadeInLeft" data-wow-delay="0.4s">
					<form method="post" action="<?php echo base_url();?>cart/add" >
					<div class="col-md-6" style="padding-left:100px;">
					<span>Quantity</span><br/>
					<input type="number" name="quantity" class="text" value="Quantity" /><br>
			<span>Type of Order</span>
								 <div class="dropdown-button">           			
            			<select class="dropdown" tabindex="9" name="ordertype" data-settings='{"wrapperClass":"flat"}'>
            			<option value="baking">Baking</option>	
						<option value="take_away">Take Away</option>
						
					  </select>
					</div>
		            
					
					          			
            			<input type="text" name="address" class="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}" /><br/>
					

					<input type="text" name="datetime" class="text" value="Time & Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Time';}"><br>
					<input type="text" name="phone" class="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
					
					</div>

					<div class="col-md-6" style="padding-left:100px;">
					<?php if(!empty($menuExtra)){ ?>
			<span>Menu-Extra's / Toppings</span>
								 <div class="dropdown-button">           			
            			<select class="dropdown" name="extra" id="menuextra" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
            			
            			<?php

            			 foreach(@$menuExtra as $mex){ ?>
            			<option value="<?php echo @$mex->m_extra_id;?>"><?php echo @$mex->m_extra_name ?> &nbsp;&nbsp; -/ <span style="text-align: right;"><?php echo @$mex->m_extra_price ?> PKR</span> </option>
            			
            			<?php  } 
            			
            			?>	
            			<option selected="" value="0"> Select Extra  </option>
            			
						
						
					  </select>
					</div>
					<?php } else{ ?> 
					<input type="hidden" id="" name="extra" value="0" >

					<?php } ?> 
		            <input type="hidden" id="menuprice" name="menuprice" value="<?php echo $menu1->menu_price; ?>" >
		             <input type="hidden" id="" name="menuid" value="<?php echo $menu1->menu_id; ?>" >
		             <input type="hidden" id="" name="menuname" value="<?php echo $menu1->menu_name; ?>" >
		              <input type="hidden" id="" name="menuImage" value="<?php echo $menu1->menu_gallery; ?>" >
		                 <input type="hidden" id="" name="kitchenid" value="<?php echo $menu1->kitchen_id; ?>" >
		                  <input type="hidden" id="" name="kitchenname" value="<?php echo $menu1->kitchen_name; ?>" >
		           <input type="hidden" name="totalprice" class="totalprice"/>

					<span>Description</span><br/>
								           			
            			<input type="text" name="description" class="text" style="height:100px; width:330px;">
				
					<br/>
					<br/>
					<span id="" style="font-family: 'Lobster Two', cursive;font-size:24px;color:#5BBD50;">Total=<span class="totalprice" style="font-size:24px;color:#333;"></span><span style="font-size:24px;color:#5BBD50;">PKR</span></span>
					
					</div>
					<br/>
					<div class="col-md-12 wow swing animated" data-wow-delay= "0.4s">
	<br/>
					<center><input type="submit" value="Add To Cart" style="margin: 0 0 0 0; */" ></center>
					</div>
					</form>
	
</div>
</div>
</div>
</div>

<div class="special-offers-section">
			<div class="container">
				<div class="special-offers-section-head text-center dotted-line">
					<h4>Special Offers</h4>
				</div>
				<div class="special-offers-section-grids">
				 <div class="m_3"><span class="middle-dotted-line"> </span> </div>
				   <div class="container">
					  <ul id="flexiselDemo3">
						<?php foreach(@$menus as $ms){ ?>
						<li>
							<div class="offer">

								<div class="offer-image">	
									<a href="<?php echo base_url();?>front/menuDetail/<?php echo @$ms->menu_id;?>"><img src="<?php echo base_url();?>assets/uploads/images/<?php echo @$ms->menu_gallery; ?>" style="width:145px; height:160px; border: 1px solid #DBDBDB;
   border-radius: 4px; " class="img-responsive" alt=""/></a>
								</div>
								<div class="offer-text">
									<h4><a href="<?php echo base_url();?>front/menuDetail/<?php echo @$ms->menu_id;?>"><?php echo @$ms->menu_name;?></a></h4>
									<p><?php echo substr(@$ms->menu_description,0,45).'...';?> </p>
									<a href="<?php echo base_url();?>front/menuDetail/<?php echo @$ms->menu_id;?>"><input type="button" value="Grab It"></a>
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<?php } ?>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="<?php echo base_url();?>assets/images/p2.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Chicken Jumbo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						
						
					 </ul>
				 <script type="text/javascript">
					$(window).load(function() {
						
						$("#flexiselDemo3").flexisel({
							visibleItems: 3,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				    </script>
				    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.flexisel.js"></script>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- footer-section-starts -->
	<?php $this->load->view('frontend/footer.php');?>
<script>
	$('#menuextra').change(function(){
		alert('im in');
    var extraid=$('#menuextra').val();
    var menuprice=$('#menuprice').val();
    //alert(extraid);
    $.ajax({
    	 type: 'post',
                                   url: '<?php echo base_url(); ?>front/getExtraPrice',
                                   data: {
                                   extraprice:extraid
                                   },
                                   success: function (d) {
                                   
                               }
    	});
	});
 
</script>
<script>
var menuprice=$('#menuprice').val();
	var totalp=menuprice;
	$('.totalprice').html(totalp);
</script>

