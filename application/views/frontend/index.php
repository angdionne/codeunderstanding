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
		    <div class="container">
				<div class="banner-info">
					<div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
						<h1 id="maint" style="font-weight:450;">Best Mexican Food Restaurants In Cancún</h1>
						<div class="line">
							<h1 id="lint">Order Online</h1>
						</div>
					</div>



					<div class="form-list wow fadeInRight" data-wow-delay="0.5s">
						<form action="<?php echo base_url()?>front/kitfoodCat" method="get">
						  <ul class="navmain">
							<center>
							<li id="searchy" style="margin-right:20px;"><span id="locy" style="margin-right: 62%;">Location Name</span>
							 <select  id="kitchen" class="form-control" name="kitchen">
							 <option value="" selected="" >Select Location</option>
							<?php foreach($kit as $ki){ ?>
							
							<option value="<?php echo @$ki->kitchen_id; ?>"><?php echo @$ki->kitchen_name; ?></option>

							 <?php } ?>
							 </select>
							</li>
							<li><span id="ciusy" style="margin-right: 65%;">Cuisine Name</span>
							 <select id="foodcat" class=" form-control" name="foodcat">
													
							<option value="" selected="" >Select Cuisine</option>

							 </select>
						    </li>

						    </center>
                              <div class=""><button id="butny" style="     width: 75px;
    height: 45px;
    display: block;
    border: none;
    outline: none;
    position: absolute;
    bottom: 0; background-color:rgb(208, 83, 35);right: 11%; height: 39px; border-radius: 10px;"  type="submit"><i  style="color:white; font-size:20px" class="fa fa-search "></i></button></div>
						  </ul>
						</div>



                    <!-- start search-->
		 

		
					</form>
				</div>
			</div>
		</div>
	<div class="content">
		<div class="ordering-section" id="Order">
			<div class="container">
				<div class="ordering-section-head text-center wow bounceInRight" data-wow-delay="0.4s">
					<h1 id="easy" style="color: rgb(208, 83, 35);">Ordering food has never been so easy</h1>
					<div class="dotted-line">
						<h4 id="easy2" style="color: #0c0c0c">Easy 3 Step Order </h4>
					</div>
				</div>
				<div class="ordering-section-grids">
					<div class="row ">
					    <div class="col-md-1">
					        </div>
                        <div class="col-md-2">

                            <img  class="aw" style="margin-top: -8%;" src="<?php echo base_url();?>assets/images/forks.png"><br>
                           <center> <h4>Choose a location</h4></center>
                        </div>
                        <div class="col-md-2">

                            <img class="aw" src="<?php echo base_url();?>assets/images/arrowup.png"><br>
                            
                        </div>
                        <div class="col-md-2">

                            <img class="aw" src="<?php echo base_url();?>assets/images/meal.png">
                               <center> <h4>Choose a tasty dish</h4></center>
                        </div>
                        <div class="col-md-2">

                            <img class="aw" id="downimage" style="margin-top: 51%;" src="<?php echo base_url();?>assets/images/arrowdown.png"><br>
                             
                        </div>
                        <div class="col-md-2">

                            <img  class="aw"src="<?php echo base_url();?>assets/images/deliver.png">
                               <center><h4>Pick up or delivery</h4></center>
                        </div>
<!--						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">-->
<!--							<i class="one"></i><br>-->
<!--							<i class="one-icon"></i>-->
<!--							<p>Choose <span>Your Restaurant</span></p>-->
<!--							<label></label>-->

						</div>
					</div>
					

				</div>
			</div>
		</div>
		
<div class="row" style="height:20px;background-color: #f8f8f8;">
</div>
<div class="row" style="height:5px;background-color: white;">
</div>
<div class="row" style="background-color: #f8f8f8;">
<div class="container">
<br/>
	
		<h3><b class="fd">Food Categories</b></h3>
		<br/>
		<div class="row">
		<?php foreach($foodcat as $fc){ ?>
		<div class="col-md-6">
		
			<div style="min-height:130px; border: 1px solid #e3e3e3;  background-color: #F5F5F5; border-radius: 3px; padding:10px; padding-top:15px; padding-bottom:15px;margin-bottom:32px">
				<div class="col-md-3">
				<!--<a href="<?php echo base_url();?>front/kitchenDetail/<?php echo $fc->food_cat_id;?>">-->
				<a href="#" data-toggle="modal" onclick="allData(this);" data-id="<?php echo @$fc->food_cat_id;?>" data-target="#myModal">
				<img src="<?php echo base_url();?>assets/uploads/images/<?php echo @$fc->food_cat_image;?>" class="img-responsive" alt="" style="height:100px;border: 1px solid #e3e3e3;
    border-radius: 3px;" /></a>
				</div>
				<div id="padloc2" class="col-md-9" style="padding:-5px;">
					<div><a style="color:#333;" href="#" onclick="allData(this);" data-id="<?php echo $fc->food_cat_id;?>" data-toggle="modal" data-target="#myModal"><h4><b><?php echo @$fc->food_cat_name;?></b></h4></a></div>
					<div style="height:50px;"><p><?php echo substr(@$fc->description,0,115).'...';?></p></div>

				

				</div>
			</div>
		
		</div>
		
		<?php } ?>
  </div>
		
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <div class="row">
        <div class="col-md-11">
         <h3 class="modal-title">Select Resturant</h3>
         </div>
         <div class="col-md-1">
         <button style="margin-right:15px;" type="button" class="btn-danger" data-dismiss="modal">X</button>
         </div>
         </div>
        </div>
        <form action="<?php echo base_url();?>front/kitFoodCat" method="post">
       
		            
		             <input type="hidden" id="foodcatid" name="foodcat"  />
		            
		         
        <div class="modal-body">
          <div class="row">
           
           
           </div>
           <div class="row">
          <div class="col-md-12">
          

          <label>Resturant</label><select name="kitchen" required="" class="form-control">
          <?php
         

           foreach(kitchens() as $kt){ ?>
				<option value="<?php echo $kt->kitchen_id; ?>"><?php echo @$kt->kitchen_name; ?>&nbsp;&nbsp;&nbsp;(<?php echo @$kt->kitchen_address; ?>) </option>
				<?php } ?> 
         
          </select></div>
       
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit"  class="btn btn-success">Menu</button>
        </div>
        </form>
      </div>
      
    </div>
    <script>
function allData(obj)
    {

     			var foodcat = obj.getAttribute('data-id');
     			
     			$('#foodcatid').val(foodcat);
     			
     		}
    </script>
  </div>
  
<br/>
	
		<h3><b class="fd">Our Locations</b></h3><br/>
<div class="row">
	<?php  foreach($kitchen as $kit){ ?>
	<div class="col-md-6">
		
			<div style="min-height:130px; border: 1px solid #e3e3e3;  background-color: #F5F5F5; border-radius: 3px; padding:10px; padding-top:15px; padding-bottom:15px;margin-bottom:32px">
				<div class="col-md-3">
				<a href="<?php echo base_url();?>front/kitchenDetail/<?php echo $kit->kitchen_id;?>"><img src="<?php echo base_url();?>assets/uploads/images/<?php echo $kit->kitchen_image;?>" class="img-responsive" alt="" style="height:100px;border: 1px solid #e3e3e3;
    border-radius: 3px;" /></a>
				</div>
				<div id="padloc" class="col-md-9" style="padding:-5px;">
					<div><a style="color:#333;" href="<?php echo base_url();?>front/kitchenDetail/<?php echo @$kit->kitchen_id;?>"><h3><b><?php echo @$kit->kitchen_name;?></b></h3></a></div>
					<div style="height:50px;"><p style="line-height: 29px;"><b>Address : </b><?php echo $kit->kitchen_address;?></p></div>

				
							<div style=" margin-top:-2%; margin-left: -4%;">

							<div class="col-md-3"><div class="containerdiv">
    <div>
    <img  class="stars" src="<?php echo base_url();?>assets/images/stars_blank.png" alt="img">
    </div>
    <div class="cornerimage" style="width:<?php if (@getRating(@$kit->kitchen_id)==""){echo 0;} else{echo getRating(@$kit->kitchen_id)/5;}?>%;">
    <img   class="stars" src="<?php echo base_url();?>assets/images/stars_full.png" alt="">
    </div>
</div></div>
							<div class="col-md-2">(<?php echo @getRatingCount(@$kit->kitchen_id);?>)</div>
						</div>
				</div>
			</div>
		
		</div>

	<?php } ?>
</div>







	</div>

</div>




	<!--	<div class="popular-restaurents" id="Popular-Restaurants">
			<div class="container">
				<div class="col-md-4 top-restaurents">
					<div class="top-restaurent-head">
						<h3>Top Restaurants</h3>
					</div>
					<div class="top-restaurent-grids">
						<div class="top-restaurent-logos">
							<?php
							//$counter=0;

							// foreach($kitchen as $kit){ 
							// 	if($counter==0 || $counter==2 || $counter==4){

								?>
							<div class="res-img-1 wow bounceIn" style="margin-bottom:20px;" data-wow-delay="0.4s">
								<a href="<?php// echo base_url();?>front/kitchenDetail/<?php //echo $kit->kitchen_id;?>"><img src="<?php //echo base_url();?>assets/uploads/images/<?php //echo $kit->kitchen_image;?>" class="img-responsive" alt="" style="height:115px;border: 5px solid #F1F1F1;
    border-radius: 5px;" /></a>
							</div>
							<?php// $counter++; }
							//else{
							 ?>
<div class="res-img-2 wow bounceIn" style="width:45%;" data-wow-delay="0.4s">
								<a href="<?php// echo base_url();?>front/kitchenDetail/<?php// echo $kit->kitchen_id;?>"><img src="<?php// echo base_url();?>assets/uploads/images/<?php// echo $kit->kitchen_image;?>" class="img-responsive" alt="" style="height:115px; border: 5px solid #F1F1F1;
    border-radius: 5px;" /></a>
							</div>
							<?php// $counter++; } } ?>
							
							
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-8 top-cuisines">
					<div class="top-cuisine-head">
						<h3>Top Cuisines</h3>
					</div>
					<div class="top-cuisine-grids">
					<?php
					//$counter=0;

					// foreach($menu as $men){ 
					 //	if($counter==0 || $counter==1 || $counter==2){?>

						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href="<?php// echo base_url();?>front/menuDetail/<?php// echo $men->menu_id;?>"><img style="width:155px; height:130px; border: 1px solid #DBDBDB;
    border-top-right-radius: 4px;border-top-left-radius: 4px; " src="<?php// echo base_url();?>assets/uploads/images/<?php //echo $men->menu_gallery?>" class="img-responsive" alt="" /> </a>
							<label style="width:155px;"><center><a href="<?php// echo base_url();?>front/menuDetail/<?php //echo $men->menu_id;?>"><?php// echo substr($men->menu_name,0,12);?></a></center></label>
					    </div>
					    <?php// $counter++; }
					   // elseif($counter==3 || $counter==7){
					     ?>
					     <div class="top-cuisine-grid nth-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href="<?php// echo base_url();?>front/menuDetail/<?php //echo $men->menu_id;?>"><img style="width:155px; height:130px; border: 1px solid #DBDBDB;
    border-top-right-radius: 4px;border-top-left-radius: 4px; " src="<?php //echo base_url();?>assets/uploads/images/<?php //echo $men->menu_gallery?>" class="img-responsive" alt="" /> </a>
							<label style="width:155px;"><center><a href="<?php //echo base_url();?>front/menuDetail/<?php //echo $men->menu_id;?>"><?php //echo substr($men->menu_name,0,12);?></a></center></label>
					    </div>
					    <?php //$counter++;  }
					   //else{
					     ?>
					     <div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href="<?php //echo base_url();?>front/menuDetail/<?php //echo $men->menu_id;?>"><img style="width:155px; height:130px; border: 1px solid #DBDBDB;
    border-top-right-radius: 4px;border-top-left-radius: 4px; " src="<?php// echo base_url();?>assets/uploads/images/<?php //echo $men->menu_gallery?>" class="img-responsive" alt="" /> </a>
							<label style="width:155px;"><center><a href="<?php //echo base_url();?>front/menuDetail/<?php //echo $men->menu_id;?>"><?php //echo substr($men->menu_name,0,12);?></a></center></label>
					    </div>

					    <?php// $counter++;  } } ?>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>-->
		<div style="background-color: #f8f8f8;" class="special-offers-section">
			<div class="container">
				<div class="special-offers-section-head text-center ">
					<h3 id="pop">Popular This Month In Your City</h3>
				</div>
                <center>
                <div class="dotted-line">
                    <h4 id="pop2" style="color:black;">The Easiest way to your favorite food </h4>
                </div></center>
				<div class="special-offers-section-grids">
				 <div class="m_3"><span class="middle-dotted-line"> </span> </div>
				   <div class="container">
                       <div class="row">
                           	<?php  foreach(@$foods as $food){ ?>
                           <div  class="  col-sm-4" style=" ">
                               <div class = "container" >
                                   <body>

                                   <figure>
                                       <img src="<?php echo base_url();?>assets/uploads/images/<?php echo $food->menu_gallery; ?>" alt=""  width="300" height="180">  <br>  <br>
                                       <figcaption><h4  style=" font-weight: bold"><?php echo @$food->menu_name; ?></h4></figcaption>
                                       <figcaption style=" margin-top:10px;"><p id="descy"><?php echo @$food->menu_description; ?></p></figcaption>
                                   </figure>
                                   </body>
                                   <footer>
                                       <br>
                                       <div class="row">
                                           <div class="col-sm-3">
                                               <div class="col-sm-8">
                                               <span><h4 id="pricy" style=" margin-left:-17px;font-weight: bold">$ <?php echo @$food->menu_price; ?></h4></span>
                                               </div>
                                               <div class="col-sm-4">
<!--                                               <button style="margin-top: -8px;" type="button" class="btn btn-danger">Order Now</button>-->
                                               </div>
                                           </div>
                                       </div>
                                   </footer>
                               </div>
                           </div>
                           <?php } ?>
                        
                       </div>
				 <script type="text/javascript">
					$(window).load(function() {
						
						$("#flexiselDemo3").flexisel({
							visibleItems: 3,
							animationSpeed: 1000,
							autoPlay: false,
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


		<div class="service-section">
<!--			<div class="service-section-top-row">-->
<!--				<div class="container">-->
<!--					<div class="service-section-top-row-grids wow bounceInLeft" data-wow-delay="0.4s">-->
<!--					<div class="col-md-3 service-section-top-row-grid1">-->
<!--						<h3>Enjoy Exclusive Food Order any of these</h3>-->
<!--					</div>-->
<!--					<div class="col-md-2 service-section-top-row-grid2">-->
<!--						<ul>-->
<!--							<li><i class="arrow"></i></li>-->
<!--							<li class="lists">Party Orders</li>-->
<!--						</ul>-->
<!--						<ul>-->
<!--							<li><i class="arrow"></i></li>-->
<!--							<li class="lists">Home Made Food</li>-->
<!--						</ul>-->
<!--						<ul>-->
<!--							<li><i class="arrow"></i></li>-->
<!--							<li class="lists"> Diet Food </li>-->
<!--						</ul>-->
<!--					</div>-->
<!--					<div class="col-md-5 service-section-top-row-grid3">-->
<!--						<img src="--><?php //echo base_url();?><!--assets/images/lunch.png" class="img-responsive" alt="" />-->
<!--					</div>-->
<!--					<div class="col-md-2 service-section-top-row-grid4 wow swing animated" data-wow-delay= "0.4s">-->
<!--						<a href="order.html"><input type="submit" value="Order Now"></a>-->
<!--					</div>-->
<!--					<div class="clearfix"></div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
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
 " id="news" value="Subscribe">

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
	