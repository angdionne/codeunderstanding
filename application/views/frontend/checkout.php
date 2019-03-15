<?php $this->load->view('frontend/header.php'); ?>

<?php $price;
$totalprice=0;
?>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<!-- checkout -->
<div class="cart-items">
	<div class="container">
	<div class="row">
			<div class="col-md-10"> <h1>Shopping Cart (<?php echo $this->session->userdata('items'); ?>)</h1></div>
			<div class=" col-md-2"> <input  type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#myModal" value="Order Now" /></button> </div>
				</div>
					 
     	<?php foreach(@$cartdata as $cd){ ?>
			 <div class="cart-header">
				 <a href="<?php echo base_url(); ?>cart/minusCart/<?php echo $cd->cart_id;?>"><div class="close1"> </div></a>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="<?php echo base_url();?>assets/uploads/images/<?php echo @$cd->menu_image;?>" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						<h4><b><?php echo @$cd->menu_name;?> </b><span style="margin-left:20px; font-size: 14px">Pickup time:<?php echo @$cd->datetime;?></span></h4><br/>
						<ul class="qty">
						<li><b>Resturant:</b> <?php echo @$cd->kitchen_name;?> </li><br/>
						<li><b>Quantity:</b> <?php echo @$cd->qty;?> </li><br/>
					
			<li><b>Toppings / Menu Extras:</b>
			   <?php $array=array();
			   $price=@$cd->price;

                                                    $array=explode(',',$cd->m_extra_id);
                                                 //print_r($array);
                                                    $count=1;
                                                    foreach($array as $menu){

                                                    	if($menu!=""){
                                                    		
                                                    	foreach(menuExtraPrice($menu) as $me){
                                                    $price;	
                                                    @$me->m_extra_price;	
                                                    $price= @$price+$me->m_extra_price; ?>
 <?php echo '('.$count.')' . @$me->m_extra_name;
 $count++;?>
 
                                                    	<?php } }


                                                    	} ?>
							</li><br/> 
							
						</ul>
							 <div class="delivery">
							 <p>Service Charges : <?php $qty=@$cd->qty;
			   $price=@$price*$qty; echo $price;?> PKR</p>
				<?php $totalprice=@$totalprice+$price; ?>			
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>






			 <?php } ?>
	 <div class="modal fade" id="myModal" role="dialog">
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
					<input type="hidden" name="price" value="<?php echo $totalprice; ?>" /><br>
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
<!-- checkout -->
<?php $Front = &get_instance();
$Front->footer();
?>