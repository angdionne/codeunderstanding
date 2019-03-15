
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



	<!-- header-section-ends -->
	<!-- content-section-starts -->
	
	<div class="content">
		
    <form action="<?php echo base_url();?>index.php/user/updateProfile" class="rst-form-register" method="post" enctype="multipart/form-data">
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


                        <div class="col-sm-12 product-item">
                            <div class="row rst-form-input">
                                <div class="col-sm-6 rst-form-left">
                                    <div class="form-group">
                                        <label for="InputName">Name</label>
                                         <input type="hidden" name="userid"  id="userid" value="<?php echo $profile->user_id;?>">
                                        <input type="text" name="name" class="form-control"  title="Name contains only alphabets" id="InputName" value="<?php echo $profile->user_name;?>">
                                    </div>
                                     <div class="form-group">
                                        <label for="InputAdress">Address</label>
                                        <input type="text" name="address" class="form-control" id="InputAdress" value="<?php echo $profile->user_address;?>">
                                    </div>

                                </div>

                                <div class="col-sm-6 rst-form-right">
                                   
                                    <div class="form-group">
                                        <label for="InputCity">Phone</label>
                                        <input type="text" min="0" pattern="^(0|[1-9][0-9]*)$" maxlength="11"  pattern="\d{11}" title="Please enter numeric values and exactly 11 digits" name="phone" class="form-control" id="InputCity" value="<?php echo $profile->user_phone;?>">
                                    </div>

                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-success" value="Update">
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </form>

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

<?php $Front = &get_instance();
$Front->footer();
?>
	
	<!-- <?php// $this->load->view('frontend/footer.php');?>  -->

