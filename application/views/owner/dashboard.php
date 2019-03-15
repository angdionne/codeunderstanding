<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
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

            <div class="col-md-12">

                <div class="row ">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3><?php echo $menu->total;?></h3>
                                <p>Total Menu's</p>
                            </div>
                            <div class="icon">
                                <a href = "<?php echo base_url();?>dashboard/menu" class="small-box-footer">
                                    <i class="ion-ios-paper"> </i>
                                </a>
                            </div>
                            <a href="<?php echo base_url();?>dashboard/menu" class="small-box-footer">More info
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3><?php echo $category->total;?></h3>
                                <p>Total Categories</p>
                            </div>
                            <div class="icon">
                                <a href="<?php echo base_url();?>dashboard/food_cat" class="small-box-footer">
                                    <i class="ion-clipboard"></i>
                                </a>
                            </div>
                            <a href="<?php echo base_url();?>dashboard/food_cat" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3><?php echo $delivered->total;?></h3>
                                <p>Total Delivered Orders</p>
                            </div>
                            <div class="icon">
                                <a href="<?php echo base_url();?>dashboard/delivereds" class="small-box-footer">
                                    <i class="ion-bag"></i>
                                </a>
                            </div>
                            <a href="<?php echo base_url();?>dashboard/delivereds" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3><?php echo $undelivered->total;?></h3>
                                <p>Total Undelivered Orders</p>
                            </div>
                            <div class="icon">
                                <a href="<?php echo base_url();?>dashboard/undelivereds" class="small-box-footer">
                                    <i class="ion-android-cart"></i>
                                </a>
                            </div>
                            <a href="<?php echo base_url();?>dashboard/undelivereds" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>

                    </div><!-- ./col -->
                </div>

                <div class="row">

                    <div class="col-md-10">
                        <ul class="nav nav-tabs">

                            <li class="active"><a data-toggle="tab" href="#home"><strong>New Orders</strong></a></li>
                             <li><a data-toggle="tab" href="#menu5"><strong>Baking-Process</strong></a></li>
                            <li><a data-toggle="tab" href="#menu1"><strong>In-Process Orders</strong></a></li>
                            <li><a data-toggle="tab" href="#menu4"><strong>Take Away Orders</strong></a></li>
                            <li><a data-toggle="tab" href="#menu2"><strong>Completed Orders</strong></a></li>
                            <li><a data-toggle="tab" href="#menu3"><strong>Rejected Orders</strong></a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <br><br><br>

                                <ul class="timeline">
                                    <!-- timeline time label -->
                                    <li class="time-label">
                  <span class="bg-red">
                    <?php echo date('Y-m-d');?>
                  </span>
                                    </li>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <?php

                                    foreach ($neworders as $neworder) {
                                        ?>

                                        <li>
                                            <i class="fa fa-envelope bg-blue"></i>
                                            <div class="timeline-item well" style="background-color: ghostwhite">
                                                <?php
                                                $time = $neworder->datetime;



                                                ?>

                                                <span class="time"><i class="fa fa-clock-o"></i> <?php echo $time?></span>
                                                <h3 class="timeline-header"><a href="#"><?php echo $neworder->user_name;?></a> </h3>
                                                <div class="timeline-body">
                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <table class="table table-responsive"  >
                                                                <tr>
                                                                    <th>User:</th>

                                                                    <td> <?php echo $neworder->user_name;?></td>

                                                                </tr>
                                                                  <tr>
                                                                    <th>Amount:</th>
                                                                    <td> <?php echo $neworder->price;?></td>

                                                                </tr>
                                                                <tr>
                                                                    <th>Address:</th>
                                                                    <td> <?php echo $neworder->address;?></td>

                                                                </tr>
                                                                 <tr>
                                                                    <th>Phone:</th>
                                                                    <td> <?php echo $neworder->phone;?></td>

                                                                </tr>
                                                                  <tr>
                                                                    <th>Pick Up:</th>
                                                                    <td> <?php echo $neworder->pick;?></td>

                                                                </tr>
                                                                <tr>
                                                                    <th>Description:</th>
                                                                    <td> <?php echo $neworder->description;?></td>

                                                                </tr>
                                                                <tr>
     <th>Menu's:</th> <th>Quantity:</th><th>Topping</th><th>Comment</th></tr>
    
<?php 
  $orderid= $neworder->order_id;
 $orderid;

$order= orderdetail($orderid);
//print_r($order);
//die();

foreach($order as $od){
?>
 <tr>

                                                                    <td> <?php echo $od->menu_name; ?></td>
                                                                    

                                                                    <td> <?php echo $od->qty; ?></td>
                                                                    <td>
                                                                        
                                                                    <?php
                                                                    if(!empty($od->m_extra_id)){
                                                                    $array=array();
                                                                      $array=explode(',',$od->m_extra_id);
                                                                        foreach($array as $menu)
                                                                        {
                                                                            $menu =MenuEx($menu);
                                                                            $menu= rtrim($menu, ',');
                                                                            echo $menu .",";
                                                                        } }
                                                                    ?>
                                                                    </td>
                                                                    <td><?php echo $od->comment; ?></td>
</tr>

<?php } ?>
                                                                <!--<tr>
                                                                    
                                                                    <th>Menu's:</th>

                                                                    <td> <?php// $array=array();
                                                                   // $array=explode($neworder->order_id);
                                                                    //foreach($array as $menu)
                                                                   // {
                                                                  //      echo Menu($menu).",";
                                                                  //  }

                                                                    ?></td>

                                                                </tr>-->
                                                              <!--  <tr>
                                                                    <th>Topings:</th>

                                                                    <td> <?php// $array=array();
                                                                        //$array=explode(',',$neworder->m_extra_id);
                                                                       // foreach($array as $menu)
                                                                       // {
                                                                       //     $menu =MenuEx($menu);
                                                                       //    $menu= rtrim($menu, ',');
                                                                       //     echo $menu .",";
                                                                      //  }

                                                                        ?></td>

                                                                </tr>-->
                                                              

                                                            </table>


                                                        </div>

                                                    </div>


                                                </div>
                                                <div class="timeline-footer">

                                                        <input type="hidden" name="id" value="<?php echo $neworder->order_id;?>">
                                                    <a href="<?php echo base_url();?>dashboard/accept/<?php echo $neworder->order_id ?>/<?php echo $neworder->user_id ?>"> <button class="btn btn-primary btn-md"  type="button">Accept</button></a>
                                                    <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#myModal">Reject</button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="myModal" role="dialog">
                                                   <div class="modal-dialog">

    <div class="modal-content">    
<form method="post" action="<?php echo base_url();?>dashboard/reject/<?php echo $neworder->order_id ?>/<?php echo $neworder->user_id ?>"
                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Reason To Reject</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <label>Reason</label>
                                                                    <textarea rows="6" cols="4" class="form-control" name="reason">Enter Reason here...</textarea>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary" >Reject</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </li>
                                            
                                        <?php
                                    }
                                    ?>


                                    <li>
                                        <i class="fa fa-clock-o bg-gray"></i>
                                    </li>
                                </ul>

                            </div>


<!--                            ///////////////////////////////////////////////Tab-1 Finished Here////////////////////////////////////////////////////////////////-->
                            <div id="menu1" class="tab-pane fade">
                                <br><br><br>

                                <ul class="timeline">
                                    <!-- timeline time label -->
                                    <li class="time-label">
                  <span class="bg-red">
                    <?php echo date('Y-m-d');?>
                  </span>
                                    </li>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <?php

                                    foreach ($inprocess as $neworder) {
                                        ?>

                                        <li>
                                            <i class="fa fa-envelope bg-blue"></i>
                                            <div class="timeline-item well"  style="background-color: ghostwhite">
                                                <?php
                                                $time = $neworder->datetime;



                                                ?>

                                                <span class="time"><i class="fa fa-clock-o"></i> <?php echo $time?></span>
                                                <h3 class="timeline-header"><a href="#"><?php echo $neworder->user_name;?></a> </h3>
                                                <div class="timeline-body">
                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <table class="table table-responsive"  >
                                                                <tr>
                                                                    <th>User:</th>

                                                                    <td> <?php echo $neworder->user_name;?></td>

                                                                </tr>

                                                               <!-- <tr>
                                                                    <th>Menu's:</th>

                                                                    <td> <?php/* $array=array();
                                                                       // $array=explode(',',$neworder->menu_id);
                                                                        foreach($array as $menu)
                                                                        {
                                                                            echo Menu($menu).",";
                                                                        }*/

                                                                        ?></td>

                                                                </tr>
                                                                <tr>
                                                                    <th>Topings:</th>

                                                                    <td> <?php// $array=array();
                                                                    
                                                                    //if(!empty($neworder->m_extra_id)){
                                                                        //$array=explode(',',$neworder->m_extra_id);
                                                                        //foreach($array as $menu)
                                                                        //{
                                                                            //$menu =MenuEx($menu);
                                                                          //  $menu= rtrim($menu, ',');
                                                                        //    echo $menu .",";
                                                                      //  }
                                                                        
                                                                    //}

                                                                        ?></td>

                                                                </tr>-->
                                                                <tr>
                                                                    <th>Amount:</th>
                                                                    <td> <?php echo $neworder->price;?></td>

                                                                </tr>
                                                                <tr>
                                                                    <th>Address:</th>
                                                                    <td> <?php echo $neworder->address;?></td>

                                                                </tr>
                                                                 <tr>
                                                                    <th>Phone:</th>
                                                                    <td> <?php echo $neworder->phone;?></td>

                                                                </tr>
                                                                <tr>
                                                                    <th>Description:</th>
                                                                    <td> <?php echo $neworder->description;?></td>

                                                                </tr>
                                                                
                                                                 <tr>
     <th>Menu's:</th> <th>Quantity:</th><th>Topping</th><th>Comment</th></tr>
    
<?php 
  $orderid= $neworder->order_id;
 $orderid;

$order= orderdetail($orderid);
//print_r($order);
//die();

foreach($order as $od){
?>
 <tr>

                                                                    <td> <?php echo $od->menu_name; ?></td>
                                                                    

                                                                    <td> <?php echo $od->qty; ?></td>
                                                                    <td>
                                                                        
                                                                    <?php
                                                                    if(!empty($od->m_extra_id)){
                                                                    $array=array();
                                                                      $array=explode(',',$od->m_extra_id);
                                                                        foreach($array as $menu)
                                                                        {
                                                                            $menu =MenuEx($menu);
                                                                            $menu= rtrim($menu, ',');
                                                                            echo $menu .",";
                                                                        } }
                                                                    ?>
                                                                    </td>
                                                                    <td><?php echo $od->comment; ?></td>
</tr>

<?php } ?>

                                                            </table>


                                                        </div>

                                                    </div>


                                                </div>
                                                <div class="timeline-footer">

                                                    <input type="hidden" name="id" value="<?php echo $neworder->order_id;?>">
                                                    <a href="<?php echo base_url();?>dashboard/takeaway/<?php echo $neworder->order_id ?>/<?php echo $neworder->user_id;?>"> <button class="btn btn-primary btn-md"  type="button">Take Away</button></a>
<!--                                                    <a href="--><?php //echo base_url();?><!--dashboard/reject/--><?php //echo $neworder->order_id ?><!--"> <button class="btn btn-danger btn-md"  type="button">Reject</button></a>-->

                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                    ?>


                                    <li>
                                        <i class="fa fa-clock-o bg-gray"></i>
                                    </li>
                                </ul>


                            </div>
<!--                            ///////////////////////////////////////////////Tab-2 Finished Here////////////////////////////////////////////////////////////////-->

                            <div id="menu2" class="tab-pane fade">

                                <div class="box-body " style="background-color: white">

                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            
                                            <th>User</th>
                                            <th>Phone</th>
                                            <th>Price</th>
                                           <th>Description</th>

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
                                                <td><?php echo $completeorder->phone;?></td>
                                                <td><?php echo $completeorder->price;?></td>
                                                <!--                                        <td>--><?php //echo $item->p_previousdate;?><!--</td>-->
                                                <td><?php echo $completeorder->description;?></td>
                                                <td><?php echo $completeorder->datetime;?></td>
                                                <td><?php echo $completeorder->address;?></td>
                                                <td><button  class="btn btn-success"  data-toggle="modal" data-id="<?php echo $completeorder->order_id;?>" onclick="completeOrder(this)" data-target="#myModal13">Order Detail</button></td>

                                                <!--                                        <td><a href="--><?php //echo base_url();?><!--dashboard/updateProceed/--><?php //echo $item->p_id;?><!--"><button type="button" class="btn btn-warniing">Update</button>  </td>-->



                                            </tr>
                                            <?php $i++; }?>
                                        </tbody>
                                    </table>
                                </div>
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

                            <div id="menu3" class="tab-pane fade">

                                <div class="box-body " style="background-color: white">

                                    <table id="example3" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            
                                            <th>User</th>
                                            <th>Phone</th>
                                            <th>Price</th>
                                            <th>description</th>
                                            <th>Date</th>
                                            <th>Reason</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=1; foreach ($rejectorders as $rejectorder)
                                        {?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                               

                                                <td><?php echo $rejectorder->user_name;?></td>
                                                 <td><?php echo $rejectorder->phone;?></td>
                                                  <td><?php echo $rejectorder->price;?></td>

                                                <td><?php echo $rejectorder->description;?></td>
                                                <td><?php echo $rejectorder->datetime;?></td>
                                                <td><?php echo $rejectorder->reason;?></td>
                                                <td><button  class="btn btn-success"  data-toggle="modal" data-id="<?php echo $rejectorder->order_id;?>" onclick="rejectOrder(this)" data-target="#myModal14">Order Detail</button></td>



                                            </tr>
                                            <?php $i++; }?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
               <div class="modal fade" id="myModal14" role="dialog">
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

       
		<div class="modal-body" id="rejtable">
		    
		</div>
		
		<div class="modal-footer">
          <button  type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
        
        </div>

</div>
</div> 



                            <div id="menu4" class="tab-pane fade">

                                <div class="box-body " style="background-color: white">

                                    <table id="example3" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Price</th>
                                            <th>description</th>
                                            <th>Date</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=1; foreach ($takeaway as $rejectorder)
                                        {?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <!--<td>
                                                    <?php /* $array=array();
                                                    $array=explode(',',$rejectorder->menu_id);
                                                    foreach($array as $menu)
                                                    {
                                                        echo Menu($menu).",";
                                                    }

                                                */    ?>

                                                </td>
                                                <td><?php /* $array=array();
                                                if(!empty($rejectorder->m_extra_id)){
                                                    $array=explode(',',$rejectorder->m_extra_id);
                                                    foreach($array as $menu)
                                                    {
                                                        $menu =MenuEx($menu);
                                                        $menu= rtrim($menu, ',');
                                                        echo $menu .",";
                                                    }
                                                }

                                                */    ?></td>-->

                                                <td><?php echo $rejectorder->user_name;?></td>
                                                <td><?php echo $rejectorder->phone;?></td>
                                                <td><?php echo $rejectorder->address;?></td>
                                                <td><?php echo $rejectorder->price;?></td>

                                                <td><?php echo $rejectorder->description;?></td>
                                                <td><?php echo $rejectorder->datetime;?></td>
                                                <td><a href="<?php echo base_url();?>dashboard/delivered/<?php echo $rejectorder->order_id ?>/<?php echo $rejectorder->user_id ?>"> <button class="btn btn-primary btn-md"  type="button">Deliver</button></a>
                                                	<button  class="btn btn-success" onclick="takeaway(this);" data-id="<?php echo $rejectorder->order_id ?>" data-toggle="modal" data-target="#myModal12">Order Detail</button>
                                                </td>



                                            </tr>
                                            <?php $i++; }?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            
               <div class="modal fade" id="myModal12" role="dialog">
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

       
		<div class="modal-body" id="table">
		    
		</div>
		
		<div class="modal-footer">
          <button  type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
        
        </div>

</div>
</div>              	

<!-----------------------------------------------------------------------menu5---------------------------------------------------------------->

<div id="menu5" class="tab-pane fade">
                                <br><br><br>

                                <ul class="timeline">
                                    <!-- timeline time label -->
                                    <li class="time-label">
                  <span class="bg-red">
                    <?php echo date('Y-m-d');?>
                  </span>
                                    </li>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <?php

                                    foreach ($bakingprocess as $neworder) {
                                        ?>

                                        <li>
                                            <i class="fa fa-envelope bg-blue"></i>
                                            <div class="timeline-item well"  style="background-color: ghostwhite">
                                                <?php
                                                $time = $neworder->datetime;



                                                ?>

                                                <span class="time"><i class="fa fa-clock-o"></i> <?php echo $time?></span>
                                                <h3 class="timeline-header"><a href="#"><?php echo $neworder->user_name;?></a> </h3>
                                                <div class="timeline-body">
                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <table class="table table-responsive"  >
                                                                <tr>
                                                                    <th>User:</th>

                                                                    <td> <?php echo $neworder->user_name;?></td>

                                                                </tr>

                                                               <!-- <tr>
                                                                    <th>Menu's:</th>

                                                                    <td> <?php/* $array=array();
                                                                       // $array=explode(',',$neworder->menu_id);
                                                                        foreach($array as $menu)
                                                                        {
                                                                            echo Menu($menu).",";
                                                                        }*/

                                                                        ?></td>

                                                                </tr>
                                                                <tr>
                                                                    <th>Topings:</th>

                                                                    <td> <?php// $array=array();
                                                                    
                                                                    //if(!empty($neworder->m_extra_id)){
                                                                        //$array=explode(',',$neworder->m_extra_id);
                                                                        //foreach($array as $menu)
                                                                        //{
                                                                            //$menu =MenuEx($menu);
                                                                          //  $menu= rtrim($menu, ',');
                                                                        //    echo $menu .",";
                                                                      //  }
                                                                        
                                                                    //}

                                                                        ?></td>

                                                                </tr>-->
                                                                <tr>
                                                                    <th>Amount:</th>
                                                                    <td> <?php echo $neworder->price;?></td>

                                                                </tr>
                                                                <tr>
                                                                    <th>Address:</th>
                                                                    <td> <?php echo $neworder->address;?></td>

                                                                </tr>
                                                                 <tr>
                                                                    <th>Phone:</th>
                                                                    <td> <?php echo $neworder->phone;?></td>

                                                                </tr>
                                                                <tr>
                                                                    <th>Description:</th>
                                                                    <td> <?php echo $neworder->description;?></td>

                                                                </tr>
                                                                
                                                                 <tr>
     <th>Menu's:</th> <th>Quantity:</th><th>Topping</th><th>Comment</th></tr>
    
<?php 
  $orderid= $neworder->order_id;
 $orderid;

$order= orderdetail($orderid);
//print_r($order);
//die();

foreach($order as $od){
?>
 <tr>

                                                                    <td> <?php echo $od->menu_name; ?></td>
                                                                    

                                                                    <td> <?php echo $od->qty; ?></td>
                                                                    <td>
                                                                        
                                                                    <?php
                                                                    if(!empty($od->m_extra_id)){
                                                                    $array=array();
                                                                      $array=explode(',',$od->m_extra_id);
                                                                        foreach($array as $menu)
                                                                        {
                                                                            $menu =MenuEx($menu);
                                                                            $menu= rtrim($menu, ',');
                                                                            echo $menu .",";
                                                                        } }
                                                                    ?>
                                                                    </td>
                                                                    <td><?php echo $od->comment; ?></td>
</tr>

<?php } ?>

                                                            </table>


                                                        </div>

                                                    </div>


                                                </div>
                                                <div class="timeline-footer">

                                                    <input type="hidden" name="id" value="<?php echo $neworder->order_id;?>">
                                                    <a href="<?php echo base_url();?>dashboard/baked/<?php echo $neworder->order_id ?>/<?php echo $neworder->user_id;?>"> <button class="btn btn-primary btn-md"  type="button">Baking Complete</button></a>
<!--                                                    <a href="--><?php //echo base_url();?><!--dashboard/reject/--><?php //echo $neworder->order_id ?><!--"> <button class="btn btn-danger btn-md"  type="button">Reject</button></a>-->

                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                    ?>


                                    <li>
                                        <i class="fa fa-clock-o bg-gray"></i>
                                    </li>
                                </ul>


                            </div>
   
        
        
</div>
                        </div>

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
