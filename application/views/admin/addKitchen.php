<html>
<head>




    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Kitchen </title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">




    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">


    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/flat/blue.css">
<!--<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/timepicker/bootstrap-timepicker.min.css">-->


  <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css">
   <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
-->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/bootstrap/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
 



</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php $this->load->view('admin/nav.php');?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Kitchen

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Add Kitchen </li>
            </ol>
        </section>

        <!-- Main content -->


        <div class="col-md-12">

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Kitchen</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form  method="POST" action="<?php echo base_url();?>index.php/admin/newKitchen" enctype="multipart/form-data"  class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="kitchenname" class="col-sm-3 control-label">Kitchen Name</label>

                            <div class="col-sm-7">
                                <input type="input" required="" name="kitchenname" class="form-control" id="kitchenname" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kitchenname" class="col-sm-3 control-label">Owner Name</label>

                            <div class="col-sm-7">
                                <select required="" class="form-control" name="owner_id" >
                                <?php foreach($owner as $ow){ ?>
                                <option value="<?php echo $ow->owner_id;?>"><?php echo $ow->owner_name;?></option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kitchenaddress" class="col-sm-3 control-label">Address</label>

                            <div class="col-sm-7">
                            <input type="kitchenaddress" required="" name="kitchenaddress" class="form-control" id="kitchenaddress" >
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <label for="kitchenlocation" class="col-sm-3 control-label">Location</label>

                            <div class="col-sm-7">
                                <input type="kitchenlocation" required="" name="kitchenlocation" class="form-control" id="kitchenlocation" >
                            </div>
                        </div>-->

                        
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Image</label>

                            <div class="col-sm-7">
                              <input id="file" type="file" required="" name="file" class="form-control" accept=".jpg ,.jpeg,.png" required=""> 
                                        </div>
                            </div>
                            
                            <div class="form-group">
                            <label for="opentime" required="" class="col-sm-3 control-label">Open Time</label>

                            
                             <div class="col-sm-7 input-group bootstrap-timepicker timepicker">
            <input id="timepicker3" name="opentime" required="" type="text" class="form-control input-small">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="closetime" class="col-sm-3 control-label">Close Time</label>

                           
                           <div class="col-sm-7 input-group bootstrap-timepicker timepicker">
            <input id="timepicker4" name="closetime" required="" type="text" class="form-control input-small">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        </div>
                        </div>
                        
                       
                             <div class="box-footer">

                        <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button>
                    </div>
                        </div>

                  
                    <!-- /.box-body -->
                   
                    <!-- /.box-footer -->
                </form>
                <?php
                if (isset($msg)){?>
                    <div class=" col-md-6 alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                        <?php echo $msg;?>

                    </div>
                <?php } ?>
            </div>



        </div>
        <br>   <br>   <br>

        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->

        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('owner/footer.php');?>
    <!-- jQuery 2.2.0 -->
    <!--<script src="<?php //echo base_url();?>plugins/jQuery/jQuery-2.2.0.min.js"></script>-->
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.2.3.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <!-- Bootstrap 3.3.6 -->


    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->


    <!-- Bootstrap WYSIHTML5 -->

    <!-- Slimscroll -->
    <script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>
<!--    <script src="<?php echo base_url();?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>-->
    <!-- AdminLTE for demo purposes -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
    <!-- <script src="<?php echo base_url();?>assets/bootstrap/js/fileinput.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>-->
    <script>
$(document).on('ready', function() {
    $("#input-25").fileinput({
       
        //initialCaption: "The Moon and the Earth"
       
    });
});
</script> 
</body>
<!--<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();


    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });



</script>-->

<script type="text/javascript">
          $('#timepicker3').timepicker();
        </script>


 <script type="text/javascript">
          $('#timepicker4').timepicker();
        
</script>
</html>
