
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
      <style>

        /*body{*/
            /*margin-top:20px;*/
            /*background:#ebeef0;*/
        /*}*/
        .panel {
            box-shadow: 0 2px 0 rgba(0,0,0,0.075);
            border-radius: 0;
            border: 0;
            margin-bottom: 24px;
        }
        .panel .panel-heading, .panel>:first-child {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .panel-heading {
            position: relative;
            height: 50px;
            padding: 0;
            border-bottom:1px solid #eee;
        }
        .panel-control {
            height: 100%;
            position: relative;
            float: right;
            padding: 0 15px;
        }
        .panel-title {
            font-weight: normal;
            padding: 0 20px 0 20px;
            font-size: 1.416em;
            line-height: 50px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .panel-control>.btn:last-child, .panel-control>.btn-group:last-child>.btn:first-child {
            border-bottom-right-radius: 0;
        }
        .panel-control .btn, .panel-control .dropdown-toggle.btn {
            border: 0;
        }
        .nano {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .nano>.nano-content {
            position: absolute;
            overflow: scroll;
            overflow-x: hidden;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }
        .pad-all {
            padding: 15px;
        }
        .mar-btm {
            margin-bottom: 15px;
        }
        .media-block .media-left {
            display: block;
            float: left;
        }
        .img-sm {
            width: 46px;
            height: 46px;
        }
        .media-block .media-body {
            display: block;
            overflow: hidden;
            width: auto;
        }
        .pad-hor {
            padding-left: 15px;
            padding-right: 15px;
        }
        .speech {
            position: relative;
            background: #b7dcfe;
            color: #317787;
            display: inline-block;
            border-radius: 0;
            padding: 12px 20px;
        }
        .speech:before {
            content: "";
            display: block;
            position: absolute;
            width: 0;
            height: 0;
            left: 0;
            top: 0;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
            border-right: 7px solid #b7dcfe;
            margin: 15px 0 0 -6px;
        }
        .speech-right>.speech:before {
            left: auto;
            right: 0;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
            border-left: 7px solid #ffdc91;
            border-right: 0;
            margin: 15px -6px 0 0;
        }
        .speech .media-heading {
            font-size: 1.2em;
            color: #317787;
            display: block;
            border-bottom: 1px solid rgba(0,0,0,0.1);
            margin-bottom: 10px;
            padding-bottom: 5px;
            font-weight: 300;
        }
        .speech-time {
            margin-top: 20px;
            margin-bottom: 0;
            font-size: .8em;
            font-weight: 300;
        }
        .media-block .media-right {
            float: right;
        }
        .speech-right {
            text-align: right;
        }
        .pad-hor {
            padding-left: 15px;
            padding-right: 15px;
        }
        .speech-right>.speech {
            background: #ffda87;
            color: #a07617;
            text-align: right;
        }
        .speech-right>.speech .media-heading {
            color: #a07617;
        }
        .btn-primary, .btn-primary:focus, .btn-hover-primary:hover, .btn-hover-primary:active, .btn-hover-primary.active, .btn.btn-active-primary:active, .btn.btn-active-primary.active, .dropdown.open>.btn.btn-active-primary, .btn-group.open .dropdown-toggle.btn.btn-active-primary {
            background-color: #579ddb;
            border-color: #5fa2dd;
            color: #fff !important;
        }
        .btn {
            cursor: pointer;
            /* background-color: transparent; */
            color: inherit;
            padding: 6px 12px;
            border-radius: 0;
            border: 1px solid 0;
            font-size: 11px;
            line-height: 1.42857;
            vertical-align: middle;
            -webkit-transition: all .25s;
            transition: all .25s;
        }
        .form-control {
            font-size: 11px;
            height: 100%;
            border-radius: 0;
            box-shadow: none;
            border: 1px solid #e9e9e9;
            transition-duration: .5s;
        }
        .nano>.nano-pane {
            background-color: rgba(0,0,0,0.1);
            position: absolute;
            width: 5px;
            right: 0;
            top: 0;
            bottom: 0;
            opacity: 0;
            -webkit-transition: all .7s;
            transition: all .7s;
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
		
    
        <div style="height:350px; background-size:fill; width:100%;background:url(<?php echo base_url();?>assets/uploads/images/1484941937.jpg);" id="rst-banner" class="height-large" >
          
            
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
                     

                       <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                        <div class="container">
                            <div class="col-md-12 col-lg-9">
                                <div class="panel">
                                    <!--Heading-->
                                    <div class="panel-heading">
                                        <div class="panel-control">
                                            <div class="btn-group">
                                                <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#demo-chat-body"><i class="fa fa-chevron-down"></i></button>
                                            </div>
                                        </div>
                                        <h3 class="panel-title">Chat History</h3>
                                    </div>

                                    <!--Widget body-->
                                    <div id="demo-chat-body" class="collapse in">

                                        <div class="nano has-scrollbar" style="height:380px">
                                            <div class="nano-content pad-all" tabindex="0" style="right: -17px;">
                                                <ul id="divMsg" class="list-unstyled media-block">
                                                    <?php
                                                    $id=0;
                                                    $name="";
                                                    $ownerid=0;
                                                    $kitchen_id=0;
                                                    foreach ($chats as $chat) {
                                                        $id = $this->session->userdata('user_id');
                                                    if ($chat->sender_id == $id) {
                                                        ?>

                                                        <li class="mar-btm">
                                                            <div class="media-right">
                                                                <img
                                                                    src="<?php echo base_url();?>assets/uploads/images/<?php echo $chat->user_image;?>"
                                                                    class="img-circle img-sm" alt="Profile Picture">
                                                            </div>
                                                            <div class="media-body pad-hor speech-right">
                                                                <div class="speech">
                                                                    <a href="#" class="media-heading"><?php echo $chat->user_name;?> </a>
                                                                    <p> <?php echo $chat->message;?></p>
                                                                    <p class="speech-time">
                                                                        <i class="fa fa-clock-o fa-fw"></i> <?php echo $chat->send_date;?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <?php }
                                                        else {
                                                            ?>
                                                            <li class="mar-btm" >
                                                                <div class="media-left" >
                                                                    <img src = "<?php echo base_url();?>assets/uploads/images/<?php echo $chat->kitchen_image;?>" class="img-circle img-sm" alt = "Profile Picture" >
                                                                </div >
                                                                <div class="media-body pad-hor" >
                                                                    <div class="speech" >
                                                                        <a href = "#" class="media-heading" > <?php echo $chat->kitchen_name;?> </a >
                                                                        <p > <?php echo $chat->message;?></p >
                                                                        <p class="speech-time" >
                                                                            <i class="fa fa-clock-o fa-fw" ></i > <?php echo $chat->send_date;?>
                                                                        </p >
                                                                    </div >
                                                                </div >
                                                            </li >
                                                            <?php
                                                        
                                                           
                                                        }
                                                        $kitchen_id=$chat->kitchen_id;
                                                         $ownerid= $chat->owner_id;
                                                         $name= $chat->user_name;
}?>
                                                </ul>
                                            </div>
                                            <div class="nano-pane"><div class="nano-slider" style="height: 141px; transform: translate(0px, 0px);"></div></div></div>

                                        <!--Widget footer-->
                                        <div class="panel-footer">
                                            <div class="row">
                                                <form method="post" id="inp_form" class="inp_form">
                                                <div class="col-xs-9">
                                                    
                                                    
                                                    <input type="hidden" name="ownerid" id="to" class="form-control chat-input" value="<?php echo $ownerid; ?>" required=""/>
                                                     <input type="hidden" name="name" id="name" class="form-control chat-input" value="<?php echo $name; ?>" required=""/>
                                                     <input type="hidden" name="kitchen" id="kitchen" class="form-control chat-input" value="<?php echo $kitchen_id; ?>" required=""/>

                                                    <input style="margin-top: 2%;" type="text" id="msg" placeholder="Enter your Message" name="msg" class="form-control chat-input" required />
                                                </div>
                                                <div class="col-xs-3">
                                                    <button id="buttonSend" style="margin-top: 10%;" class="btn btn-primary btn-block" name="submit" type="button">Reply</button>
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
		
		<?php $img =$this->session->userdata('dp');?>
	
	<!-- <?php// $this->load->view('frontend/footer.php');?>  -->
<br/>
	<div class="footer">
		<div class="container">
			<p>&copy; 2017  All rights  Reserved |  &nbsp;<a href="http://aunsolutions.com" target="target_blank">AUN SOLUTIONS</a></p>
		</div>
	</div>

    <script>
$('#buttonSend').on('click',function(){



var id = $('#to').val();
   // alert(id);
    var msg = $('#msg').val();
        var kit = $('#kitchen').val();
console.log(id,msg);

    $.ajax({


url: <?= '\''.base_url() ?>index.php/user/replyMsgOwner',
type:'POST',

data:{owner_id:id,message:msg,kitchen:kit},
success: function(data) {
    //console.log(data);
    $("#subject").html("");
    $("#msg").html("");
}

});
});
</script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)

            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script type="text/javascript">


    $(document).ready(function(){

   //        setInterval(,3000);

        $('#buttonSend').on('click',function(){

          //toastr.info('If all three of these are referenced correctly, then this should toast should pop-up.');
 
            alert('Msg Sent');

            var m_names = new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
            var msg = $('#msg').val();
            var name = $('#name').val();
            var d = new Date();
            var day = d.getDate();
            var mon = d.getMonth();
            var month = m_names[mon];
            var time = d.getHours()+':'+d.getMinutes();
            var dp='<?php echo base_url();?>assets/uploads/images/<?php echo $img; ?>';



            var html = '';
            // html += '<div class="direct-chat-messages">';


            html +='  <li class="mar-btm">';
            html +='<div class="media-right">';

            html +='<img src="'+dp+'"class="img-circle img-sm" alt="Profile Picture">';
            html +='   </div>';
            html +='<div class="media-body pad-hor speech-right">';
            html +='            <div class="speech">';
            html +=            '<a href="#" class="media-heading">'+name+' </a>';
            html +='            <p>'+msg+' </p>';

            html +='<p id="para" class="speech-time">';
            html +='            <i class="fa fa-clock-o fa-fw"></i> '+day+' '+month+' '+time+'';
            html +='            </p>';
            html +=            '</div>';
            html +='            </div>';
            html +='            </li>';



            $('#divMsg').append(html);

            $('#inp_form')[0].reset();


        });
    });
</script>