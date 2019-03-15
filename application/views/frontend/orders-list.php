<?php $this->load->view('frontend/header.php'); ?>

<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/select2/select2.min.css">

      <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<style>
 @media screen and (max-width: 699px) and (min-width: 360px) {
    #searchy {
      margin-right:0px !important;
    }
  #against1{    margin-top: -103px;
    margin-left: 113px;}
    #against2{    margin-top: -42px;
    margin-left: -57px;
    }
    #against3{       margin-top: -18px;
    margin-left: -28px;
    width: 330px;}
    #against4{       margin-top: -26px;
    margin-left: 21px;
    width: 330px;}
    #against5{    margin-top: -67px;
    margin-left: 6px;
    width: 395px;
}
  #against6{ margin-top: -42px;
    margin-left: -57px}
  }
  #against6 {
        margin-top: -58px;
    margin-left: 45px;

}
}
  }
    body
    {
        background-color: #f9f9f9 !important;
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
	<!-- header-section-ends -->
	<!-- content-section-starts -->
<br>
<div class="row">
    <div class="col-md-12">
<div style="     margin-top: -19px; height:250px; background-repeat: no-repeat; background-size: cover; width:100%;background:url(<?php echo base_url();?>assets/images/<?php echo @$idy->cover?$idy->cover:""; ?>);" id="rst-banner" class=" img-responsive height-large" >
</div>
    </div>
<div class="row">
    <Br>
    <div class="col-md-7" style="padding-top:40px;padding-left:50px;">
      <div class="col-md-2" ><span style= class="item-lists"><img style="height:100px;width:100px;" src="<?php echo base_url();?>assets/uploads/images/<?php echo @$idy->kitchen_image; ?>" ></div>
        <div class="col-md-4" id="against1">
            <span style=" font-weight: ; font-size:15px" ><b><a style="color:black" href="<?php echo base_url();?>front">Home</a>&nbsp; > &nbsp;<a style="color:black;" href="<?php echo base_url();?>front/kitchenDetail/<?php echo @$idy->kitchen_id; ?>"><?php echo @$idy->kitchen_name?$idy->kitchen_name:''; ?></a> </b></span><br/>
            <span style="  font-weight: bold; font-size:24px" ><b><?php echo @$idy->kitchen_name; ?></b></span><br/>
           <span    ><div class="containerdiv">
    <div>
    <img class="stars" src="<?php echo base_url();?>assets/images/stars_blank.png" alt="img">
    </div>
    <div class="cornerimage" style="width:<?php if (@getRating(@$idy->kitchen_id)==""){echo 0;} else{echo @getRating(@$idy->kitchen_id)/5;}?>%;">
    <img class="stars" src="<?php echo base_url();?>assets/images/stars_full.png" alt=""> 
    </div>
</div></span> 
         <span style=" color: 535353; font-size:20px" ><?php echo date('h:i a', strtotime(@$idy->open_time)); ?></span> -
            <span style="  color: 535353; font-size:20px" ><?php echo date('h:i a', strtotime(@$idy->close_time)); ?></span>
        </div>

        </span>
    </div>
   <div class="col-md-3 col-md-offset-1"  style="padding-top:40px;padding-left:125px;" id="against2">
         <span style=" color: #ff9e16; background-position: center left; font-size: 57px" ><i class="ion-ios-location-outline"></i> </span><div id="against6" ><span style=" tex font-size: 2.5rem; background-position: center left; font-size: 19px"> <?php echo @$idy->kitchen_address; ?>
</span></div>
        </i></span>
    </div>

</div>

	<div class="row" style="margin-left: 0px;margin-right: 0px;">

	<div style="padding-top:40px;padding-left:50px;" class="col-md-2">
	<div style="background-color: white; border-color:white;" id="against3" class="well">
	
<h3><i  class="fa fa-cutlery"></i>&nbsp;Categories</h3>
<?php foreach($allcat as $ac){ ?>

<p style=" font-weight: 600 ; margin-top:15px;"><a href="<?php echo base_url();?>front/catfood/<?php echo $ac->food_cat_id; ?>/<?php echo $ac->kitchen_id; ?>"><?php echo @$ac->food_cat_name; ?></a></p>
<?php } ?>
	
	
	</div>
</div>
	<div  class="orders col-md-7">
	<div class="well" id="against4" style="background-color: white;border-color:white; padding-top:40px; padding-left:25px; padding-right: 10px;">
        <div class="col-md-12">
            <img src="<?php echo base_url();?>assets/uploads/files/banner.png" class="img-responsive">
            <br>
        </div>



<!--<span class="item-lists"><img style="height:100px;width:100px;" src="--><?php //echo base_url();?><!--assets/uploads/images/--><?php //echo $catname->food_cat_image; ?><!--" ><span style=" margin-left:15px; font-size:20px" ><b>--><?php //echo $catname->food_cat_name; ?><!--</b></span>-->
<!--			</span>-->

<?php foreach($kitcat as $kc){
$fid=@$kc->food_cat_id;
 $kid=@$kc->kitchen_id;

$fsid=@$kc->f_subcat_id;
	?>


	<?php if($this->cart->total_items()!=""){
		

			if($this->session->userdata('kitchen')!=$kid){ ?>
			<div class="alert alert-warning"><p style="text-align: center;"><b>Please empty Cart!</b> Items From Other Restaurant are already in Cart. You can order Only to one Restaurant at one time.</p></div>

			<?php }  }?>
		<div class="order-top">
		
			
				

			<br/><br/>
			<li class="item-lists" style="width:50%;">
			<h4><?php echo @$kc->f_subcat_name; ?></h4>
			<?php foreach(@kitMenu($fid,$fsid,$kid) as $km){ ?>
				
				
			<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6 style=" font-size: 1.2rem; line-height: 14px; font-weight:500;font-family:Hind Vadodara, Helvetica, Arial, sans-serif;"> <?php echo @$km->menu_name; ?></h6></span></div>
						</div>
						
							<div class="clearfix"></div>
					</div>
					<?php } ?> 
			</li>
			<li class="item-lists" style="width:50%;">
			
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h4>Price</h4>
					<?php foreach(kitMenu($fid,$fsid,$kid) as $km){ ?>
					<div  class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY  $<?php echo @$km->menu_price; ?></h6></span></div>
						</div>
						<div style="margin-top:-1px; line-height: 5px;" class="pr-right">
							<div class=""><span class="">
							<?php 
							if($this->cart->total_items()!=""){
			

			if($this->session->userdata('kitchen')!=$kid){ ?>
							<button type="button" class="btn btn-sm" disabled data-toggle="modal" data-target="#myModal"><i class="fa fa-plus "></i></button><?php }
							else{ ?>
							
							<button type="button" class="btn btn-sm btn-primary" onclick="allData(this);" data-toggle="modal" data-target="#myModal"
							data-price="<?php echo @$km->menu_price; ?>"
							data-menu_id="<?php echo @$km->menu_id; ?>" 
		                    data-menu_name="<?php echo @$km->menu_name; ?>" 
		                    data-food_cat_image="<?php echo @$km->food_cat_image; ?>" 
		                    data-kitchen_id="<?php echo @$km->kitchen_id; ?>" 
		                    data-kitchen_name="<?php echo @$km->kitchen_name; ?>"
		                    data-food_cat_id="<?php echo @$kc->food_cat_id; ?>" 

							><i class="fa fa-plus "></i></button>

							<?php }  } else{ ?>
							
							<button type="button" class="btn btn-sm btn-primary" onclick="allData(this);" data-toggle="modal" data-target="#myModal"
							data-price="<?php echo @$km->menu_price; ?>"
							data-menu_id="<?php echo @$km->menu_id; ?>" 
		                    data-menu_name="<?php echo @$km->menu_name; ?>" 
		                    data-food_cat_image="<?php echo @$km->food_cat_image; ?>" 
		                    data-kitchen_id="<?php echo @$km->kitchen_id; ?>" 
		                    data-kitchen_name="<?php echo @$km->kitchen_name; ?>"
		                    data-food_cat_id="<?php echo @$kc->food_cat_id; ?>" 

							><i class="fa fa-plus "></i></button>

							<?php }

							 ?></span></div>
						</div>



 
  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade myModal" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

      <?php 
							$time=date('H:i:s');
						//	echo $time;
						//	die();

							if(@$kitname->open_time < $time && @$kitname->close_time > $time) {



							    ?>
        <div class="modal-header">
             
        <div class="row">
            
        <div class="col-md-11">
        <h3 class="modal-title">Add To Cart</h3>
        </div>
         <div class="col-md-1">
         <button style="margin-right:15px;" type="button" class="btn-danger" data-dismiss="modal">X</button>
         </div>
         </div>
        </div>

        <form action="<?php echo base_url();?>cart/add" method="post">
         <input type="hidden" id="menu_price" name="menuprice"  />
		             <input type="hidden" id="menu_id" name="menuid"  />
		             <input type="hidden" id="menu_name" name="menuname"  />
		             <input type="hidden" id="food_cat_image" name="menuImage"  />
		             <input type="hidden" id="kitchen_id" name="kitchenid" />
		             <input type="hidden" id="kitchen_name" name="kitchenname"  />
		             <input type="hidden" id="foodcatid" name="foodcatid"  />
		            
		         
        <div class="modal-body">
          <div class="row">
           <div class="col-md-9">
           	<h4 id="menuName"></h4>
           </div>
           <div class="col-md-3">
           	<h4 id="menuPrice"> </h4>
           </div>
           </div>
           <div class="row">
          <div class="col-md-12">
          <label>Quantity</label>
          <input type="number" required="" name="quantity" min="1" class="form-control" />
          <br/>
          </div>
<div class="col-md-12" id="menuex">
          <label>Menu Extras / Toppings</label><br/><select name="extra[]" style="width: 100%;" id="menuextra"  class=" form-control select2" multiple="multiple" >
         
         
          </select>
          <br/>
          </div>
       
          
          <br/>
          <div class="col-md-12" >
          <label>Comment</label><textarea name="comment" class="form-control" ></textarea>
          
         </div>
       
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit"  class="btn btn-success"> Add To Cart</button>
        </div>
        </form>
        <?php }
        else   {
            if($this->cart->total_items()>0)
      {  ?>
          <div class="modal-header">

              <div class="row">

                  <div class="col-md-11">
                      <h3 class="modal-title">Add To Cart</h3>
                  </div>
                  <div class="col-md-1">
                      <button style="margin-right:15px;" type="button" class="btn-danger" data-dismiss="modal">X</button>
                  </div>
              </div>
          </div>

          <form action="<?php echo base_url();?>cart/add" method="post">
              <input type="hidden" id="menu_price" name="menuprice"  />
              <input type="hidden" id="menu_id" name="menuid"  />
              <input type="hidden" id="menu_name" name="menuname"  />
              <input type="hidden" id="food_cat_image" name="menuImage"  />
              <input type="hidden" id="kitchen_id" name="kitchenid" />
              <input type="hidden" id="kitchen_name" name="kitchenname"  />
              <input type="hidden" id="foodcatid" name="foodcatid"  />


              <div class="modal-body">
                  <div class="row">
                      <div class="col-md-9">
                          <h4 id="menuName"></h4>
                      </div>
                      <div class="col-md-3">
                          <h4 id="menuPrice"> </h4>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <label>Quantity</label>
                          <input type="number" required="" value="<?php echo $this->session->userdata('preorderrs');?>" name="quantity" min="1" class="form-control" />
                          <br/>
                      </div>
                      <div class="col-md-12" id="menuex">
                          <label>Menu Extras / Toppings</label><br/><select name="extra[]" style="width: 100%;" id="menuextra"  class=" form-control select2" multiple="multiple" >


                          </select>
                          <br/>
                      </div>


                      <br/>
                      <div class="col-md-12" >
                          <label>Comment</label><textarea name="comment" class="form-control" ></textarea>

                      </div>

                  </div>

              </div>
              <div class="modal-footer">
                  <button type="submit"  class="btn btn-success"> Add To Cart</button>
              </div>
          </form>
          <?php } else { ?>
                <div class="modal-header">

                    <div class="row">

                        <div class="col-md-11">
                            <div class="alert alert-info">Resturant is Closed Now, Will open
                                at<b><?php echo date('h:i a', strtotime(@$kitname->open_time)); ?> </b></div>
                        </div>
                        <div class="col-md-1">
                            <button style="margin-right:15px;" type="button" class="btn-danger" data-dismiss="modal">X
                            </button>
                        </div>
                    </div>
                </div>
                <form action="<?php echo base_url(); ?>cart/add" method="post">
                    <input type="hidden" id="menu_price" name="menuprice"/>
                    <input type="hidden" id="menu_id" name="menuid"/>
                    <input type="hidden" id="menu_name" name="menuname"/>
                    <input type="hidden" id="food_cat_image" name="menuImage"/>
                    <input type="hidden" id="kitchen_id" name="kitchenid"/>
                    <input type="hidden" id="kitchen_name" name="kitchenname"/>
                    <input type="hidden" id="foodcatid" name="foodcatid"/>

                    <div class="modal-body butt">
                        <button class="btn btn-lg btn-primary" onclick="order()">Still Want To Order</button>
                    </div>
                    <div class="modal-body allow" style="display:none;">
                        <div class="row">
                            <div class="col-md-9">
                                <h4 id="menuName"></h4>
                            </div>
                            <div class="col-md-3">
                                <h4 id="menuPrice"></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Quantity</label>
                                <input type="number" required="" name="quantity" min="1" class="form-control"/>
                                <br/>
                            </div>
                            <div class="col-md-12" id="menuex">
                                <label>Menu Extras / Toppings</label><br/><select name="extra[]" style="width: 100%;"
                                                                                  id="menuextra"
                                                                                  class=" form-control select2"
                                                                                  multiple="multiple">


                                </select>
                                <br/>
                            </div>


                            <br/>
                            <div class="col-md-12">
                                <label>Comment</label><textarea name="comment" class="form-control"></textarea>

                            </div>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success"> Add To Cart</button>
                    </div>
                </form>


                <?php
            }
            } ?>


<!--         <div class="modal-header">-->
<!--             -->
<!--        <div class="row">-->
<!--            -->
<!--        <div class="col-md-11">-->
<!--        <div class="alert alert-info">To Add Product in cart you have to <em><b>Login</b></em>. If not registered then <em><b>SignUp</b></em> </div>-->
<!--        </div>-->
<!--         <div class="col-md-1">-->
<!--         <button style="margin-right:15px;" type="button" class="btn-danger" data-dismiss="modal">X</button>-->
<!--         </div>-->
<!--         </div>-->
<!--        </div>-->
<!--        <div class="modal-body" >-->
<!--             <h4>Login</h4>-->
<!--             <div class="col-md-5">-->
<!--					-->
<!--					<input type="email" required="" name="email" id="lemail" class="text form-control" placeholder="Email@example.com"  /></div>-->
<!--					<div class="col-md-5">-->
<!--					   -->
<!--					<input type="password" required="" id="lpass" name="pass" placeholder="Password" class="text form-control"  />-->
<!--					</div>-->
<!--					-->
<!--					<div class="col-md-2">-->
<!--					<button type="submit" onclick="ologin()" class="btn btn-success">Login</button>-->
<!--					</div></div><br/><hr/>-->
					
          
          
       
        <!--<form action="<?php// echo base_url(); ?>user/reglogin" method="post">-->
<!--            <div class="modal-body" style="margin-top:-15px">-->
<!--                <h4>SignUp</h4>-->
<!--              <label>Name</label>     			-->
<!--            			<input type="text" name="name" id="uname" required="" class="text form-control" placeholder="Name" /><br/>-->
<!--             <label>Address</label>     			-->
<!--            			<input type="text" name="address" id="uaddress" required="" class="text form-control" placeholder="Address" /><br/>-->
<!--					-->
<!--					<label>Phone</label>-->
<!--					<input type="number" required="" name="phone" id="uphone" class="text form-control" placeholder="phone"  /><br/>-->
<!--					-->
<!--					<label>Email</label>-->
<!--					<input type="email" required="" name="email" id="uemail" class="text form-control" placeholder="Email@example.com"  />-->
<!--					 <span id="msgbx_err" style="display:none; color: red;" class="alert-box error"><b>Error! User already exists with same email.</b></span><br/>-->
<!--					<label>Password</label>-->
<!--					<input type="password" required="" id="upass" name="pass" class="text form-control"  /><br/>-->
<!--					</div>-->
<!--					<div class="modal-footer">-->
<!--          <button type="submit" onclick="reglogin()" id="sub" class="btn btn-primary"> Sign up</button></div>-->
        <!--</form>-->

      </div>
      
    </div>
  </div>
  






							<div class="clearfix"></div>
					</div>
				<?php } ?>
							<div class="clearfix"></div>
					</div>
					
				</li>
			<div class="clearfix"></div>

		</div>

		<?php  } ?>
		
		
		
		
		
		<br />
	</div>
</div>
<div class="col-md-3" id="against5" style="padding-top:40px;padding-right:50px;">
	<div style="background-color: white;border: 0px solid white !important;" class="well">
		



<div class="">
	<div class="">
	<div class="row">
			<div class="col-md-12"><h3><i class="fa fa-shopping-cart"></i>&nbsp;<b>Shopping Cart (<?php echo $this->cart->total_items(); ?>)</h3></b></div>
			</div><br/>
			<h4><b><?php echo @$kitname->kitchen_name; ?></b></h4>
				</div>
			<?php $price;
$totalprice=0;
?>		 
<?php //foreach($cartdata as $cd){
 foreach ($this->cart->contents() as $items):

            ?>


			 <div class="">
			 <br/>
				
				 <div class="cart-sec simpleCart_shelfItem cart-header" style="margin-bottom:1em;">
				 <form action="<?php echo base_url(); ?>cart/minusCart/<?php echo @$items['rowid'];?>" method="post">
						 <button type="submit" class="close1"></button>
<input type="hidden" id="" name="kitchenid" value="<?php echo $this->session->userdata('kitchen'); ?>" >
		             <input type="hidden" id="" name="foodcatid" value="<?php echo @$foody; ?>" >
						 </form>
					   <div style="background-color: #f8f8f8; width:100%;" class="cart-item-info ">
					   
						<h4><b><?php echo  @$items['name'];?> </b></h4><br/>
						<!--<span style="font-size: 14px">Pickup time:</span></h4><br/>-->
						<ul class="qty">
						<!--<li><b>Resturant:</b> <?php// echo $cd->kitchen_name;?> </li><br/>-->
						<li><b>Quantity:</b> <?php echo @$items['qty'];?> </li><br/>
			<?php   $price=@$items['price'] ?>
					<?php  if(!empty($items['options'])){ ?>
			<li><b>Toppings / Menu Extras:</b>
			   <?php $array=array();
			 

                                                    $array=explode(',',$items['options']);
                                                 //print_r($array);
                                                    $count=1;
                                                    foreach($array as $menu){

                                                    	if($menu!=""){
                                                    		
                                                    	foreach(menuExtraPrice($menu) as $me){
                                                    $price;	
                                                    $me->m_extra_price;	
                                                    $price= @$price+$me->m_extra_price; ?>
 <?php echo '('.$count.')' . $me->m_extra_name;
 $count++;?>
 
                                                    	<?php } 
                                                    	    
                                                    	}


                                                    	} ?>
							</li>
							<?php  } ?> 
							
						</ul>
							 <div class="delivery" style="margin-top:1em;">
							 <p>Price : $<?php $qty=@$items['qty'];
			   $price=$price*$qty; echo @$price;?> </p>
<?php $totalprice=@$totalprice+$price; ?>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>






			 <?php //} ///end of shopping cart

 endforeach;
?>

			 <div class="row">
			 <div class=" col-md-12"> 
			 	<p style="font-size:18px;"><b>Total Price: </b> $<?php echo @$totalprice; ?></p>
			 	</div>
			 </div><br/>
			 <div class="row">
			<div class=" col-md-12"> <input style=" font-weight:bold; font-size: 2.1rem; width:100%; border-color:#cacaca; background-color: #266abd;"  type="button" class="btn btn btn-primary" data-toggle="modal" data-target="#myModal2" value="CheckOut" />
			</div>
			 <div class="row">
			 	<div class="col-md-6">
			 		<i class=""></i>
			 	</div>
			 	<div class="col-md-6">
			 		<i class="fa fa-cash"></i>
			 	</div>
			 </div>
	 <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">

    <div class="modal-content">
        <div class="modal-header">
        <div class="row">
        <div class="col-md-11">
         <h3 class="modal-title">CheckOut</h3><?php  if ($this->session->userdata('user_id')=="") { ?><a  data-dismiss="modal"  data-toggle="modal" data-target="#myModal4"  href="#">Already have account? Log in!</a><?php } ?>
            <p> </p>
         </div>
         <div class="col-md-1">
         <button style="margin-right:15px;" type="button" class="btn-danger" data-dismiss="modal">X</button>
         </div>
         </div>
        </div>

       <form  method="post" action="<?php echo base_url(); ?>cart/orderNow" >
		<div class="modal-body">			
					
			<label>Payment Type</label>
								          			
            			<select required="" id="payyy" name="payment" class="form-control">
            			
            			<option selected="" value="cash">Cash on Delivery</option>	
						<option value="paypal">Pay PAl</option>
						<option value="stripe">Stripe</option>
						
					  </select><br/>
					  	<label>Pick up</label>
								          			
            			<select required="" name="pick" class="form-control">
            			
            			<option disabled selected="" value="cash">select Pick up</option>	
            			 <?php 
							$time=date('H:i:s');
						//	echo $time;
						//	die();
							if(@$kitname->open_time < $time && @$kitname->close_time > $time ) { ?>
						<option value="now">Pick up Now</option>
						<option value="later">Pick Up Later</option>
						<?php } else { ?>
							<option value="later">Pick Up Later</option>
						<?php } ?>
					  </select><br/>
 <label>Time</label>     
				   <div class="input-group bootstrap-timepicker timepicker">
            <input id="timepicker1" name="timep" required="" type="text" class="form-control input-small">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        </div>
        	<div id="showtime" style="display:none; color:Red">Give Correct Time. The Restaurent Timing is From <b><?php echo date('h:i a', strtotime(@$kitname->open_time)); ?>
        	</b> To <b><?php echo date('h:i a', strtotime(@$kitname->close_time)); ?></b> </div>
        <br>
         <label class="st">Enter Stripe Card Number:</label>
            <input type="text" name="cardnumber"  class=" st text form-control" placeholder="Card Number" /><br class="st">
            <div class="row"><div class="col-md-4">
             <label class="st">Month:</label>
            <input type="number" name="month"  class=" st text form-control" placeholder="Month" />
            </div>
            <div class="col-md-8">
            <label class="st">Year:</label>
            <input type="number" name="year" class=" st text form-control" placeholder="Year" /><br class="st">
            </div></div>
            
        
              <?php  if ($this->session->userdata('user_id')=="") { ?> 
            <label >Name:</label>
        
            <input type="text" name="name" required="" class=" text form-control" placeholder="Name" />
          
            <label>E-mail</label>
          
          <input type="email" name="email" required="" class="text form-control" placeholder="E-mail" /><br>
         
            <label>Password</label>
            <input type="password" name="password" id="password" required="" class="text form-control" placeholder="Password" /><br>
            <label>Confirm Password</label>
            <input type="password" name="address" id="confirm_password" required="" class="text form-control" placeholder="Confirm Password" />
					<span id="message"></span><br>
              <?php } ?>
            <?php  if ($this->session->userdata('user_id')=="") { ?>
            <label>Phone</label>
            <input type="number" name="phone"  required="" class="text form-control" placeholder="Phone Number" /><br>
            <?php } else { ?>
            <label>Phone</label>
            <input type="number" name="phone"  required="" class="text form-control" value="<?php echo $this->session->userdata('user_phone');?>"/><br>
            <?php } ?>
            <?php  if ($this->session->userdata('user_id')=="") { ?>
                <label>Address</label>
                <input type="text" name="address" required="" class="text form-control" placeholder="Address" />
            <?php } else { ?>
                <label>Address</label>
                <input type="text" name="address" required="" class="text form-control" value="<?php echo $this->session->userdata('user_address');?>" />
            <?php } ?>


					<div class="container">
   
</div>



					<input type="hidden" name="price" value="<?php echo @$totalprice; ?>" />
<input type="hidden" id="opentime" value="<?php echo @$kitname->open_time; ?>"/>
<input type="hidden" id="closetime" value="<?php echo @$kitname->close_time; ?>"/>
			
				<br>	<b>Description</b><br/>
								           			
            			<textarea type="text" required="" name="description" class="text form-control" style="height:100px; width:100%;"></textarea>
				
					
					</div>
					 <div class="modal-footer">
          <button type="submit" id="ord" class="btn btn-success">CheckOut</button>
        </div>
					</form>
      </div>

</div>
</div>
			 	
		 </div>
		 </div>

        <div class="modal fade" id="myModal4" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-md-11">
                                <h3 class="modal-title">Login</h3>
                                <p> </p>
                            </div>
                            <div class="col-md-1">
                                <button style="margin-right:15px;" type="button" class="btn-danger" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>

                    <form id="navalogin" method="post" action="<?php echo base_url(); ?>user/newlogin" >
                        <div class="modal-body">
                            <label>E-mail</label>

                            <input type="email" name="email" id="emy" required="" class="text form-control" placeholder="E-mail" /><br>

                            <label>Password</label>
                            <input type="password" name="password" id="passwordy" required="" class="text form-control" placeholder="Password" /><br>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" data-toggle="modal" data-target="" data-dismiss="modal" id="navalogin3" class="btn btn-success">Login</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>



	</div>
</div>
</div>
<?php $Front = &get_instance();
$Front->footer();
?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
	<script>
	    $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
	    });
	</script>
<script>
	$('#kitchenid').val()
</script>
<script type="text/javascript">

    var checku= "<?php if(isset($sss)){echo $sss;} ?>";

    $(window).on('load', function () {
        if(checku=="halo") {
            $('#myModal2').modal('toggle');
        }
    });



    function allData(obj)
    {

     			var price = obj.getAttribute('data-price');
     			var menu_id =obj.getAttribute('data-menu_id');
     			var menu_name = obj.getAttribute('data-menu_name');
     			var food_cat_image = obj.getAttribute('data-food_cat_image');
     			var kitchen_id = obj.getAttribute('data-kitchen_id');
     			var kitchen_name = obj.getAttribute('data-kitchen_name');
     			var food_cat_id = obj.getAttribute('data-food_cat_id');
     			
//alert(food_cat_id);
//alert(kitchen_id);

     			$('#menu_price').val(price);
     			$('#menu_id').val(menu_id);
     			$('#menu_name').val(menu_name);
     			$('#food_cat_image').val(food_cat_image);
     			$('#kitchen_id').val(kitchen_id);
     			$('#kitchen_name').val(kitchen_name);
     			$('#foodcatid').val(food_cat_id);


     			$('#menuPrice').html(price+' PKR');
     			$('#menu_id').html(menu_id);
     			$('#menuName').html(menu_name);
     	//alert(menu_id);		
     
$.ajax({
    				
    				url : '<?php echo base_url();?>front/getmenuExtra',
    				type : 'post',
    				data : {
    					id : menu_id
    				},

    				success : function(data){
    					//alert(data);
    					var info = JSON.parse(data);
    					if(info !=""){
    					//alert(info.length);
    					var html = "";
    					for (i=0; i< info.length; i++)
    					{
    						html += '<option value='+info[i].m_extra_id+' class="title" style="font-family:\'Droid Sans\',sans-serif;">'+info[i].m_extra_name+' &nbsp;&nbsp; &nbsp;&nbsp;-/  $'+ info[i].m_extra_price+' </option>';
    					}

    					//alert(html);
    					 $('#menuex').show();

    					$('#menuextra').empty();
    					$('#menuextra').append(html);
    					}
    					else{
    					    $('#menuex').hide();
    					}
    					//document.getElementsById('petbreed').innerHTML = html;

    				}
    			});			
     			
     			var html = "";
     			html += '<h4>'+name+'</h4>';
     			document.getElementById('title2').innerHTML = html;
     			$('#title').show();






     		}
     	
    
    </script>
    
    <script>
        function reglogin(){
                var uname=$('#uname').val();
     			var uaddress=$('#uaddress').val();
     			var uemail=$('#uemail').val();
     			var uphone=$('#uphone').val();
     			var upass=$('#upass').val();
     	//	alert(upass);	
     			$.ajax({
    				
    				url : '<?php echo base_url();?>user/reglogin',
    				type : 'post',
    				data : {
    					name : uname,
    					address: uaddress,
    					phone: uphone,
    					email: uemail,
    					pass:upass
    				},

    				success : function(data){
    				    location.reload();
    				}
     			});
     			
        }
        
    </script>
    
    <script>
        function ologin(){
                var lemail=$('#lemail').val();
     			var lpass=$('#lpass').val();
     	
     			$.ajax({
    				
    				url : '<?php echo base_url();?>user/ologin',
    				type : 'post',
    				data : {
    					
    					email:lemail,
    					pass:lpass
    				},

    				success : function(data){
    				    location.reload();
    				}
     			});
     			
        }
        
    </script>
    
   <script>
          function order() {
              $('.butt').hide();
              $('.allow').show();

          }

   </script>
      <script>



                $('#uemail').bind("keyup change", function(e) {
  var email = $('#uemail').val();
                     $.ajax({
                                   type: 'post',
                                   url: '<?php echo base_url(); ?>user/checkEmail',
                                   data: {
                                   email:email,type:'validate'
                                   },
                                   success: function (d) {
                                   console.log(d);
                                                           if (d != 0)
                                                           {
                                                               //$('#msgbx_success').css('display', 'none');
                                                               $('#msgbx_err').css('display', 'block');
                                                               $('#sub').prop("disabled",true);
                                                           }
                                                           else
                                                           {
                                                               $('#msgbx_err').css('display', 'none');
                                                               $('#sub').prop("disabled",false);

                                                           }
}
                                                   });
                                                         });

        </script>

       <script>
           $('#timepicker1').change(function(){
              // alert('in function');
               var time=$('#timepicker1').val();
               var opentime=$('#opentime').val();
               var closetime=$('#closetime').val();
              // var dt = moment(time, ["h:mm A"]).format("HH:mm");
               
               //var time = $("#starttime").val();
var hours = Number(time.match(/^(\d+)/)[1]);
var minutes = Number(time.match(/:(\d+)/)[1]);
var AMPM = time.match(/\s(.*)$/)[1];
if(AMPM == "PM" && hours<12) hours = hours+12;
if(AMPM == "AM" && hours==12) hours = hours-12;
var sHours = hours.toString();
var sMinutes = minutes.toString();
if(hours<10) sHours = "0" + sHours;
if(minutes<10) sMinutes = "0" + sMinutes;
var dt=sHours + ":" + sMinutes;

               
               
            //  alert(opentime);
            //  alert(closetime);
            //  alert(dt);
               if(dt < opentime || dt > closetime){
                   $('#showtime').show();
                   $('#ord').attr('disabled',true);
               }
               else{
                    $('#showtime').hide();
                   $('#ord').attr('disabled',false);
               }
           });
       </script>
        <script type="text/javascript">
          $('#timepicker1').timepicker();
        </script>
<script>




    $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() == $('#confirm_password').val()) {
            $('#message').html('Password Matched').css('color', 'green');
            $('#ord').css('visibility', 'visible');
//            console.log('asdas');

        } else {
            $('#message').html('Password Not Matching').css('color', 'red');
            $('#ord').css('visibility', 'hidden');
        }
    });
    
    $(".st").hide();
    $("#payyy").change( function()
    {
      var check =$("#payyy").val(); 
      if(check=="stripe")
      {
          $(".st").show();
      }
        if(check=="paypal")
        {
            $(".st").hide();
        }
        if(check=="cash")
        {
            $(".st").hide();
        }
        
        
    });


    $("#navalogin3").click( function()
    {
       var email =$("#emy").val();
        var pass =$("#passwordy").val();
        var food ="<?php echo $foody;?>";
        var kitchen ="<?php echo $idy->kitchen_id;?>";

        $.ajax({

            type: 'POST',
            url: '<?php echo base_url(); ?>User/newlogin',
            data: {
                email:email,pass:pass,food:food,kitchen:kitchen
            },
            success: function (d) {
if (d==1)
{
    alert("Invalid Username and Password");
}
                if (d==0)
                {
                    window.location = "<?php echo base_url();?>front/search/<?php echo $foody;?>/<?php echo $idy->kitchen_id;?>";
                }

            }
        });


    });

</script>
