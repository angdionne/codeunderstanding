<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UnDelivered Orders</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- fullCalendar 2.2.5-->

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url();   ?>assets/plugins/datatables/dataTables.bootstrap.css">
    <!--    <link rel="stylesheet" href="--><?php //echo base_url();   ?><!--plugins/datatables/dataTables.bootstrap.css">-->
    <link rel="stylesheet" href="<?php echo base_url();   ?>assets/plugins/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();   ?>assets/plugins/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();   ?>assets/plugins/datatables/responsive.bootstrap.css">
    <!--    <link rel="stylesheet" href="--><?php //echo base_url();   ?><!--plugins/datatables/responsive.dataTables.min.css" />-->
    <link rel="stylesheet" href="<?php echo base_url();   ?>assets/plugins/datatables/buttons.dataTables.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper ">

    <?php $this->load->view('owner/nav');?>
    <!-- Left side column. contains the logo and sidebar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper " style="height:auto;">
        <!-- Content Header (Page header) -->
        <section class="content-header ">

       <h2> Undelivered Orders</h2>

                <div class="row">

                    <div class="col-md-10">
               
 

                                <div class="box-body " style="background-color: white">

                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            
                                            <th>User</th>
                                            <th>Phone</th>
                                            <th>Price</th>
                                           <th>Description</th>
                                           <th>Status</th>

                                            <th>Date</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                            <!--                                    <th>Previous Date</th>-->



                                            <!--                                    <th>Actions</th>-->

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=1; foreach ($completeorders as $completeorder)
                                        {?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <!--<td>
                                                    <?php /* $array=array();
                                                    $array=explode(',',$completeorder->menu_id);
                                                    foreach($array as $menu)
                                                    {
                                                        echo Menu($menu).",";
                                                    }

                                                */    ?>

                                                </td>
                                                <td><?php /* $array=array();
                                                if(!empty($completeorder->m_extra_id)){
                                                    $array=explode(',',$completeorder->m_extra_id);
                                                    foreach($array as $menu)
                                                    {
                                                        $menu =MenuEx($menu);
                                                        $menu= rtrim($menu, ',');
                                                        echo $menu .",";
                                                    }
                                                }

                                                */    ?></td>-->
                                                <!--                                    <td>--><?php //echo $item->p_today;?><!--</td>-->
                                                <td><?php echo $completeorder->user_name;?></td>
                                                <td><?php echo $completeorder->user_phone;?></td>
                                                <td><?php echo $completeorder->price;?></td>
                                                <!--                                        <td>--><?php //echo $item->p_previousdate;?><!--</td>-->
                                                <td><?php echo $completeorder->description;?></td>
                                                 <td><?php echo $completeorder->status;?></td>
                                                <td><?php echo $completeorder->datetime;?></td>
                                                <td><?php echo $completeorder->user_address;?></td>
                                                <td><button  class="btn btn-success"  data-toggle="modal" data-id="<?php echo $completeorder->order_id;?>" onclick="completeOrder(this)" data-target="#myModal13">Order Detail</button></td>

                                                <!--                                        <td><a href="--><?php //echo base_url();?><!--dashboard/updateProceed/--><?php //echo $item->p_id;?><!--"><button type="button" class="btn btn-warniing">Update</button>  </td>-->



                                            </tr>
                                            <?php $i++; }?>
                                        </tbody>
                                    </table>
                                </div>
                       
                            
                                 <div class="modal fade" id="myModal13" role="dialog">
    <div class="modal-dialog">

    <div class="modal-content">
        <div class="modal-header">
            <div class="row">
        <div class="col-md-11">
         <h3 class="modal-title">Order Detail</h3>
         </div>
         <div class="col-md-1">
         <button style="margin-right:15px;" type="button" class="btn-danger" data-dismiss="modal">X</button>
         </div>
         </div>
             </div>

       
		<div class="modal-body" id="comtable">
		   
		</div>
		
		<div class="modal-footer">
          <button  type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
        
        </div>

</div>
</div>  
<!--                            ///////////////////////////////////////////////Tab-3 Finished Here////////////////////////////////////////////////////////////////-->

                           
</div>
</div>
             
          </div>    
        </section>


        <!-- /.content -->
  
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->

    <?php $this->load->view('owner/footer.php');?>

</div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url();?>assets/plugins/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/buttons.flash.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/jszip.min.js"></script>
<!-- Page Script -->
<script>
    function takeaway(obj){
        	var orderid = obj.getAttribute('data-id');
        //	alert(orderid);
        	$.ajax({
    				
    				url : '<?php echo base_url();?>dashboard/orderdetail',
    				type : 'post',
    				data : {
    					id : orderid
    				},

    				success : function(data){
    			
    					//	alert(data);
    				$('#table').html(data);
    				
    				}
        	});

    }
</script>
<script>
    function completeOrder(obj){
        	var orderid = obj.getAttribute('data-id');
        //	alert(orderid);
        	$.ajax({
    				
    				url : '<?php echo base_url();?>dashboard/orderdetail',
    				type : 'post',
    				data : {
    					id : orderid
    				},

    				success : function(data){
    			
    					//	alert(data);
    				$('#comtable').html(data);
    				
    				}
        	});

    }
</script>
<script>
    function rejectOrder(obj){
        	var orderid = obj.getAttribute('data-id');
        //	alert(orderid);
        	$.ajax({
    				
    				url : '<?php echo base_url();?>dashboard/orderdetail',
    				type : 'post',
    				data : {
    					id : orderid
    				},

    				success : function(data){
    			
    					//	alert(data);
    				$('#rejtable').html(data);
    				
    				}
        	});

    }
</script>
<script>
    function doconfirm()
    {
        job=confirm("Are you sure to delete permanently?");
        if(job!=true)
        {
            return false;
        }
    }
</script>
<script>


    $(document).ready(function() {
        $('#example2').DataTable( {
            "ordering": false,
            responsive:true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'print','pdf'
            ]
        } );
    } );

    $(document).ready(function() {
        $('#example3').DataTable( {
            "ordering": false,
            responsive:true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'print','pdf'
            ]
        } );
    } );

</script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
</body>
</html>
