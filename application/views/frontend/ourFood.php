<?php $this->load->view('frontend/header.php');?>



<div class="row"">
<div class="container">
<br/>
	
		<h3><b>Food Categories</b></h3>
		<br/>
		<div class="row">
		<?php foreach($foodcat as $fc){ ?>
		<div class="col-md-6">
		
			<div style="height:130px; border: 1px solid #e3e3e3;  background-color: #F5F5F5; border-radius: 3px; padding:10px; padding-top:15px; padding-bottom:15px;margin-bottom:32px">
				<div class="col-md-3">
				<!--<a href="<?php echo base_url();?>front/kitchenDetail/<?php echo $fc->food_cat_id;?>">-->
				<a href="#" data-toggle="modal" onclick="allData(this);" data-id="<?php echo @$fc->food_cat_id;?>" data-target="#myModal">
				<img src="<?php echo base_url();?>assets/uploads/images/<?php echo @$fc->food_cat_image;?>" class="img-responsive" alt="" style="height:100px;border: 1px solid #e3e3e3;
    border-radius: 3px;" /></a>
				</div>
				<div class="col-md-9" style="padding:5px;">
					<div><a style="color:#333;" href="#" onclick="allData(this);" data-id="<?php echo @$fc->food_cat_id;?>" data-toggle="modal" data-target="#myModal"><h4><b><?php echo @$fc->food_cat_name;?></b></h4></a></div>
					<div style="height:50px;"><p><?php echo substr(@$fc->description,0,150).'...';?></p></div>

				
						<!--	<div style="margin-left: -4%;">-->
						<!--	<div class="col-md-3">Min 10,000</div>-->
						<!--	<div class="col-md-3"><img src="<?php echo base_url();?>assets/images/star1.png" class="img-responsive" alt=""/></div>-->
						<!--	<div class="col-md-2">(004)</div>-->
						<!--</div>-->
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
        <form action="<?php echo base_url();?>front/kitFoodCat" method="get">
       
		            
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
	</div>

</div>

<?php $Front = &get_instance();
$Front->footer();
?>