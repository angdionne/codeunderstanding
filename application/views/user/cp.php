
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

    <form action="<?php echo base_url();?>user/updatePassword" class="rst-form-register" method="post" enctype="multipart/form-data">
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
                                        <label for="InputName">New Password</label>

                                        <input type="password" name="password"  class="form-control"  title="Name contains only alphabets" id="password" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="InputAdress">Confirm New Password</label>
                                        <input type="password" name="address" id="confirm_password" class="form-control"  value="">
                                        <span id="message"></span>
                                    </div>

                                </div>



                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="submit" id="btnupdate" class="btn btn-lg btn-success" value="Update">
                                    </div>
                                </div>
                                <?php
                                if ($this->session->flashdata('cp')){

                                    echo "<strong>" .$this->session->flashdata('cp')."</strong>";

                                }
                                ?>
                            </div>
                        </div>
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
<script>



    $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() == $('#confirm_password').val()) {
            $('#message').html('Password Matched').css('color', 'green');
            $('#btnupdate').css('visibility', 'visible');
//            console.log('asdas');

        } else {
            $('#message').html('Password Not Matching').css('color', 'red');
            $('#btnupdate').css('visibility', 'hidden');
        }

    } );
</script>
<!-- <?php// $this->load->view('frontend/footer.php');?>  -->

