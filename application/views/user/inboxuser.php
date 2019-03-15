
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
   <!--  <link rel="shortcut icon" href="<?php echo base_url();?>bootstrap/img/favicon.ico" type="image/x-icon"> -->
   <link rel="apple-touch-icon" href="<?php echo base_url();?>bootstrap/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>bootstrap/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>bootstrap/img/apple-touch-icon-114x114.png"> 

    <!-- Bootstrap
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/font-awesome-4.3.0/css/font-awesome.css">

    <!-- Plugins CSS
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/animate.css"><!-- animation -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bgndGallery.css"><!-- bgndGallery -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/js/fancybox/jquery.fancybox8cbb.css?v=2.1.5"><!-- Fancybox  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/calendar/fullcalendar.min.css"><!-- Calendar -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/js/bxslider/jquery.bxslider.css"><!-- BxSlider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/jquery.rs.selectbox.css"> <!-- Selectbox -->

    <!-- Custom Css
    ================================================== -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/rs-wp-v1.2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/responsive.css">
 
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



	<!-- header-section-ends -->
	<!-- content-section-starts -->
	
	<div class="content">
		
    
        <div style="height:350px; background-size: cover; width:100%;background:url(<?php echo base_url();?>assets/uploads/images/1484941937.jpg);" id="rst-banner" class="height-large" >
          
            
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
                       <div class="col-sm-9">
                            <h3>Inbox</h3>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Message</th>
                                    <th>Time</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($inboxes as $inbox)
                                {?>
                                <tr>
                                    <td><strong><a style="color: #3c8dbc"; href="<?php echo base_url();?>user/chatOwner/<?php echo $inbox->owner_id;?>/<?php echo $inbox->kitchen_id;?>"> <?php echo $inbox->kitchen_name;?></a></strong> </td>
                                    <td><?php echo substr($inbox->message,0,40).'...';;?></td>
                                    <td><?php echo $inbox->send_date;?></td>
                                </tr>
<?php }?>
                                </tbody>
                            </table>
                        </div>

                            </div>
                            </div>
                            </div>
                            </div>
                         

        <?php
        if (isset($upd)){

            echo "<div style='text-align: center;' class='upd'>$upd</div>";

        }
        ?>


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
		
		
	
	<!-- <?php// $this->load->view('frontend/footer.php');?>  -->

	<div class="footer">
		<div class="container">
			<p>&copy; 2017  All rights  Reserved |  &nbsp;<a href="www.fullsail.edu" target="target_blank">Angela J</a></p>
		</div>
	</div>