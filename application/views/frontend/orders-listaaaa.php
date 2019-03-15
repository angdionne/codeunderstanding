<?php $this->load->view('frontend/header.php'); ?>

<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/select2/select2.min.css">
<style>


</style>
	<!-- header-section-ends -->
	<!-- content-section-starts -->

	<div class="row">

	<div style="padding-top:40px;padding-left:50px;" class="col-md-3">
	<div class="well">
	
<h3><b>Special Offers</b></h3>
<?php foreach(@$allcat as $ac){ ?>

<p style=" font-weight: 300; margin-top:15px;"><a href="<?php echo base_url();?>front/catfood/<?php echo @$ac->food_cat_id; ?>/<?php echo $ac->kitchen_id; ?>"><?php echo @$ac->food_cat_name; ?></a></p>
<?php } ?>
	
	
	</div>
</div>
	<div class="orders col-md-6">
	<div class="">
		<div class=""><center>
			
		</center></div>

<span class="item-lists"><img style="height:100px;width:100px;" src="<?php echo base_url();?>assets/uploads/images/<?php echo @$catname->food_cat_image; ?>" ><span style=" margin-left:15px; font-size:20px" ><b><?php echo @$catname->food_cat_name; ?></b></span>
			</span>

<?php foreach($kitcat as $kc){
$fid=@$kc->food_cat_id;
$kid=@$kc->kitchen_id;
$fsid=@$kc->f_subcat_id;
	?>


	<?php if(!empty($cartcount)){
		

			if(@$cartcount->kitchen_id!=@$kid){ ?>
			<div class="alert alert-warning"><p style="text-align: center;"><b>Please empty Cart!</b> Items From Other Restaurant are already in Cart. You can order Only to one Restaurant at one time.</p></div>

			<?php }  }?>
		<div class="order-top">
		
			
				

			<br/><br/>
			<li class="item-lists" style="width:50%;">
			<h4><?php echo @$kc->f_subcat_name; ?></h4>
			<?php foreach(@kitMenu($fid,$fsid,$kid) as $km){ ?>
				
				
			<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6> <?php echo @$km->menu_name; ?></h6></span></div>
						</div>
						
							<div class="clearfix"></div>
					</div>
					<?php } ?> 
			</li>
			<li class="item-lists" style="width:50%;">
			
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h4>Price</h4>
					<?php foreach(@kitMenu($fid,$fsid,$kid) as $km){ ?>
					<div class="pre-top">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h6>ONLY <?php echo @$km->menu_price.' PKR'; ?></h6></span></div>
						</div>
						<div class="pr-right">
							<div class=""><span class="">
							<?php 
							if(!empty($cartcount)){
			

			if($cartcount->kitchen_id!=$kid){ ?>
							<button type="button" class="btn btn-sm" disabled data-toggle="modal" data-target="#myModal">Pick</button><?php }
							else{ ?>
							<button type="button" class="btn btn-sm" onclick="allData(this);" data-toggle="modal" data-target="#myModal"
							data-price="<?php echo @$km->menu_price; ?>"
							data-menu_id="<?php echo @$km->menu_id; ?>" 
		                    data-menu_name="<?php echo @$km->menu_name; ?>" 
		                    data-food_cat_image="<?php echo @$km->food_cat_image; ?>" 
		                    data-kitchen_id="<?php echo @$km->kitchen_id; ?>" 
		                    data-kitchen_name="<?php echo @$km->kitchen_name; ?>"
		                    data-food_cat_id="<?php echo @$kc->food_cat_id; ?>" 

							>Pick</button>

							<?php }  } else{ ?>
							<button type="button" class="btn btn-sm" onclick="allData(this);" data-toggle="modal" data-target="#myModal"
							data-price="<?php echo @$km->menu_price; ?>"
							data-menu_id="<?php echo @$km->menu_id; ?>" 
		                    data-menu_name="<?php echo @$km->menu_name; ?>" 
		                    data-food_cat_image="<?php echo @$km->food_cat_image; ?>" 
		                    data-kitchen_id="<?php echo @$km->kitchen_id; ?>" 
		                    data-kitchen_name="<?php echo @$km->kitchen_name; ?>"
		                    data-food_cat_id="<?php echo @$kc->food_cat_id; ?>" 

							>Pick</button>

							<?php } }

							 ?></span></div>
						</div>



 
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade myModal" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
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
		             <input type="hidden" id="kitchenid" name="kitchenid" />
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
          <input type="number" required="" name="quantity" class="form-control" />
          <br/>

         <!-- <label>Menu Extras / Toppings</label><select name="extra[]"  class="select2 form-control" multiple="multiple" >
          <?php
         // $mid=$km->menu_id;

          // foreach(menuExtra($mid) as $me){ ?>
				<option value="<?php// echo $me->m_extra_id; ?>"><?php //echo $me->m_extra_name; ?>&nbsp;&nbsp;&nbsp;\-<?php //echo $me->m_extra_price; ?> PKR</option>
				<?php } ?> 
         
          </select>-->
          </div>
       
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit"  class="btn btn-success"> Add To Cart</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
  






							<div class="clearfix"></div>
					</div>
			<!--	<?php// } ?>-->
							<div class="clearfix"></div>
					</div>
					
				</li>
			<div class="clearfix"></div>

		</div>

		<!--<?php  //} ?>-->
		
		
		
		
		
		<br />
	</div>
</div>
<div class="col-md-3" style="padding-top:40px;padding-right:50px;">
	<div class="well">
		



<div class="">
	<div class="">
	<div class="row">
			<div class="col-md-12"><h3><b>Shopping Cart (<?php echo $this->session->userdata('items'); ?>)</h3></b></div>
			</div><br/>
			<div class="row">
			<div class=" col-md-12"> <input style="width:100%;"  type="button" class="btn btn btn-primary" data-toggle="modal" data-target="#myModal2" value="Order Now" />
			</div>
				</div>
			<?php $price;
$totalprice=0;
?>		 
     	<?php foreach(@$cartdata as $cd){ ?>
			 <div class="">
			 <br/>
				
				 <div class="cart-sec simpleCart_shelfItem cart-header">
				 <form action="<?php echo base_url(); ?>cart/minusCart/<?php echo @$cd->cart_id;?>" method="post">
						 <button type="submit" class="close1"></button>
 <input type="hidden" id="" name="kitchenid" value="<?php echo @$km->kitchen_id; ?>" >
		             <input type="hidden" id="" name="foodcatid" value="<?php echo @$kc->food_cat_id; ?>" >
						 </form>
					   <div style="background-color: #f8f8f8; width:100%;" class="cart-item-info ">
					   
						<h4><b><?php echo @$cd->menu_name;?> </b><br/>
						<span style="font-size: 14px">Pickup time:<?php echo @$cd->datetime;?></span></h4><br/>
						<ul class="qty">
						<li><b>Resturant:</b> <?php echo @$cd->kitchen_name;?> </li><br/>
						<li><b>Quantity:</b> <?php echo @$cd->qty;?> </li><br/>
					
			<li><b>Toppings / Menu Extras:</b>
			   <?php $array=array();
			   $price=@$cd->price;

                                                    $array=explode(',',@$cd->m_extra_id);
                                                 //print_r($array);
                                                    $count=1;
                                                    foreach(@$array as $menu){

                                                    	if($menu!=""){
                                                    		
                                                    	foreach(@menuExtraPrice($menu) as $me){
                                                    $price;	
                                                    @$me->m_extra_price;	
                                                    $price= @$price+$me->m_extra_price; ?>
 <?php echo '('.$count.')' . $me->m_extra_name;
 $count++;?>
 
                                                    	<?php } }


                                                    	} ?>
							</li><br/> 
							
						</ul>
							 <div class="delivery">
							 <p>Service Charges : <?php $qty=@$cd->qty;
			   $price=$price*$qty; echo @$price;?> PKR</p>
				<?php $totalprice=@$totalprice+$price; ?>			
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>






			 <?php } ?>
			 <div class="row">
			 <div class=" col-md-12"> 
			 	<p style="font-size:18px;"><b>Total Price: </b> <?php echo @$totalprice; ?> PKR</p>
			 	</div>
			 </div>
			 <div class="row">
			 	<div class="col-md-6">
			 		<i class="fa fa-circle"></i>
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
         <h3 class="modal-title">Order Now</h3>
         </div>
         <div class="col-md-1">
         <button style="margin-right:15px;" type="button" class="btn-danger" data-dismiss="modal">X</button>
         </div>
         </div>
        </div>

       <form method="post" action="<?php echo base_url(); ?>cart/orderNow" >
		<div class="modal-body">			
					
			<label>Payment Type</label>
								          			
            			<select name="payment" class="form-control">
            			<option selected="" value="0">Select Payment Procedure</option>
            			<option value="baking">Cash on Delivery</option>	
						<option value="take_away">Online</option>
						
					  </select><br/>
					
		            
					
					     <label>Address</label>     			
            			<input type="text" name="address" required="" class="text form-control" placeholder="Address" /><br/>
					
 <label>Time & Date</label>     
					<input type="text" required="" name="datetime" class="text form-control" placeholder="Time & Date" /><br>
					<input type="hidden" name="price" value="<?php echo @$totalprice; ?>" /><br>
					<label>Phone</label>
					<input type="text" required="" name="phone" class="text form-control" placeholder="phone"  /><br/>
					<label>Email</label>
					<input type="email" required="" name="email" class="text form-control" placeholder="Email@example.com"  /><br/>
					
					

					

					<b>Description</b><br/>
								           			
            			<textarea type="text" name="description" class="text form-control" style="height:100px; width:100%;"></textarea>
				
					
					</div>
					 <div class="modal-footer">
          <button type="submit" class="btn btn-success"> Order</button>
        </div>
					</form>
      </div>

</div>
</div>
			 	
		 </div>
		 </div>





	</div>
</div>
</div>
<?php $Front = &get_instance();
$Front->footer();
?>
<script>
	$('#kitchenid').val()
</script>

<script type="text/javascript">
    function allData(obj)
    {

     			var price = obj.getAttribute('data-price');
     			var menu_id =obj.getAttribute('data-menu_id');
     			var menu_name = obj.getAttribute('data-menu_name');
     			var food_cat_image = obj.getAttribute('data-food_cat_image');
     			var kitchen_id = obj.getAttribute('data-kitchen_id');
     			var kitchen_name = obj.getAttribute('data-kitchen_name');
     			var food_cat_id = obj.getAttribute('data-food_cat_id');
     			
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
     			
     			
     			
     			var html = "";
     			html += '<h4>'+name+'</h4>';
     			document.getElementById('title2').innerHTML = html;
     			$('#title').show();
     		}
     	
    
    </script>
