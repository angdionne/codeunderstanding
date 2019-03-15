
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<!-- Mirrored from themeforces.com/demo/food-up-html/products_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Oct 2016 05:43:17 GMT -->
<head>
    <style type="text/css">
        .city-autocomplete {
            margin-left: 500px !important;
            margin-top: 130px !important;

        #rst-banner{
            margin-left: 0px !important;
            margin-right: 0px !important;
            height: 430px !important;
        }

        }
    </style>
    <style>
        body{
            font-family:"Helvetica" !important;
        }
    </style>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <meta name="description" content="FoodUp – Multi Page Oriented Template with pretty clean and simple design perfect for and Food &amp; Restaurant Business. Created, specially for food services. Has many functional blocks, shortcodes, including modal windows, dropdowns and many other cool items.">
    <meta name="keywords" content="bar, coffee shop, food, multi-purpose, bootstrap, html, responsive, business, restaurant">
    <meta name="author" content="JLP Media">

    <!-- Favicons
    ================================================== -->

    <!-- Custom Css
    ================================================== -->


    <!-- Fonts
    ================================================== -->
    <link href='<?php echo base_url();?>bootstrap/fonts/stylesheet.css' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>bootstrap/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <style>
        .list-tag li.active a, .list-category li.active a {
            color: #1b1b1b;
            font-weight: bold;
            border-bottom: 1px dotted transparent;
            padding-bottom: 1px;
        }
        .list-tag li a, .list-category li a {
            color: #1b1b1b;

            border-bottom: 1px dotted transparent;
            padding-bottom: 1px;
            line-height: 32px;
        }
        ul{
            list-style: none;
        }
        input[type="file"] {
            display: none;
        }
        .custom-file-upload {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<!-- Preloader -->
<div id="pageLoading">
    <div class="bouncing">
        <em class="icon-food"></em>
    </div>
</div>

<!--- Wrapper -->
<?php $this->load->view('frontend/header.php');?>
<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css">


<!-- header-section-ends -->
<!-- content-section-starts -->

<div class="content">


        <div style="height:250px; background-size: cover; width:100%;background:url(<?php echo base_url();?>assets/images/banner.jpg);" id="rst-banner" class="height-large" >


        </div>
        <!-- Banner -->

        <div class="container">
            <!--            <div class="text-center">-->
            <!--                <p>Sed at dictum aliquam porta felis et semper venenatis. Praesent condimentum laoreet leo, sit amet luctus <br /> est semper non. Mauris tincidunt lorem vel lorem venenatis volutpat. </p>-->
            <!--            </div>-->


            <div class="rst-product-list">
                <div class="row">
                    <?php $this->load->view('user/nav2');?>


                    <div class="col-sm-9">

<?php foreach ($orders as $kit) { ?>
                        <div class=" col-sm-12 product-item">
                            <div style="height:130px; border: 1px solid #e3e3e3;  background-color: #F5F5F5; border-radius: 3px; padding:10px; padding-top:15px; padding-bottom:15px;margin-bottom:32px">
                                <div class="col-md-3">
                                  <img src="<?php echo base_url();?>assets/uploads/images/<?php echo $kit->kitchen_image;?>" class="img-responsive" alt="" style="height:100px;border: 1px solid #e3e3e3;
    border-radius: 3px;" />
                                </div>
                                <div class="col-md-9" style="padding:5px;">
                                    <div><h4><b><?php echo $kit->kitchen_name;?></b></h4></div>
                                    <div style="height:30px;"><p><b>Address : </b><?php echo $kit->kitchen_address;?></p></div>
                                    <div style="height:28px;"><p><b>Description : </b><?php echo $kit->description;?></p><p class="pull-right"><button type="button"  class="btn btn-success"  data-toggle="modal" data-id="<?php echo $kit->order_id;?>" onclick="rejectOrder(this)" data-target="#myModal14">Order Detail</button>
                                        </p></div>
                                    <div style="height:50px;"><p><b>Total Order Price : </b><?php echo $kit->price;?></p></div>
                                </div>
                            </div>

                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <form method="post" action="<?php echo base_url();?>User/reorder">

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

<input type="hidden" name="orderidd" id="orderidd" value="">
                <div class="modal-body" id="rejtable">

                </div>

                <div class="modal-footer">
                    <button  type="button" data-toggle="modal" data-target="#myModal2" class="btn btn-default">Re-Order</button>
                    <button  type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>


            </div>

        </div>
    </div>
    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-md-11">
                            <h3 class="modal-title">CheckOut</h3>
                            <p> </p>
                        </div>
                        <div class="col-md-1">
                            <button style="margin-right:15px;" type="button" class="btn-danger" data-dismiss="modal">X</button>
                        </div>
                    </div>
                </div>


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

                                <option value="now">Pick up Now</option>
                                <option value="later">Pick Up Later</option>

                        </select><br/>
                        <label>Time</label>
                        <div class="input-group bootstrap-timepicker timepicker">
                            <input id="timepicker1" name="timep" required="" type="text" class="form-control input-small">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
<!--                        <div id="showtime" style="display:none; color:Red">Give Correct Time. The Restaurent Timing is From <b>--><?php //echo date('h:i a', strtotime($kitname->open_time)); ?>
<!--                            </b> To <b>--><?php //echo date('h:i a', strtotime($kitname->close_time)); ?><!--</b> </div>-->
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



                            <label>Phone</label>
                            <input type="number" name="phone"  required="" class="text form-control" value="<?php echo $this->session->userdata('user_phone');?>"/><br>


                            <label>Address</label>
                            <input type="text" name="address" required="" class="text form-control" value="<?php echo $this->session->userdata('user_address');?>" />



                        <div class="container">

                        </div>



<!--                        <input type="hidden" name="price" value="--><?php //echo $totalprice; ?><!--" />-->
<!--                        <input type="hidden" id="opentime" value="--><?php //echo $kitname->open_time; ?><!--"/>-->
<!--                        <input type="hidden" id="closetime" value="--><?php //echo $kitname->close_time; ?><!--"/>-->

                        <br>	<b>Description</b><br/>

                        <textarea type="text" required="" name="description" class="text form-control" style="height:100px; width:100%;"></textarea>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="ord" class="btn btn-success">CheckOut</button>
                    </div>

            </div>

        </div>
    </div>
    </form>
    <!--                            <div class="rst-product-info">-->
    <!--                                <h3><a href="--><?php //echo base_url();?><!--bootstrap/products_detail.html">Coffee desert</a></h3>-->
    <!--                                <span class="price-product"><sup>$</sup> 135</span>-->
    <!--                                <span class="rst-stock no-stock" data-toggle="tooltip" data-placement="bottom" data-original-title="No stock"></span>-->
    <!--                                <hr />-->
    <!--                                <div class="rst-product-content">-->
    <!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut auctor dolor scelerisque lorem posuere, sit amet malesuada justo rhoncus. Nulla nunc ipsum, suscipit vitae tincidunt eget, tempor id quam. Ut ultricies consequat risus, quis fringilla libero placerat a. Nullam ut orci neque. Donec vestibulum facilisis semper. Curabitur varius mi in egestas ultrices. In vel viverra metus.</p>-->
    <!--                                </div>-->
    <!--                            </div>-->




</div><!-- content-->

<?php $Front = &get_instance();
$Front->footer();
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.js"></script>
<script>
    $('#timepicker1').timepicker();
    function rejectOrder(obj){
        var orderid = obj.getAttribute('data-id');
       // alert(orderid);
        $.ajax({

            url : '<?php echo base_url();?>user/orderdetail',
            type : 'post',
            data : {
                id : orderid
            },

            success : function(data){

                //	alert(data);
                $('#rejtable').html(data);
                $('#orderidd').val(orderid);

            }
        });

    }
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

</script>
<!-- <?php// $this->load->view('frontend/footer.php');?>  -->

