<!DOCTYPE html>
<html style="overflow-x: hidden;">
<head>
    <style>
  @media screen and (max-width: 699px) and (min-width: 360px) {
    #searchy {
      margin-right:0px !important;
    }
    .lit
    {
       margin-left: -2px !important;
    }
    ul
    {
       margin-left: -49px !important;
    }
    .box_1
    {
        margin-left: -166px  ;
    }
  }
  </style>
<title>My Food App</title>
<!--<link href="--><?php //echo base_url();?><!--assets/css/bootstrap.css" rel='stylesheet' type='text/css' />-->
 <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
  <script src="<?php echo base_url(); ?>bootstrap/js/jquery-2.2.4.min.js"></script>
 <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
<!--<link rel="stylesheet" type="text/css" media="screen" href="--><?php //echo base_url();?><!--bootstrap/css/bootstrap.min.css">-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="--><?php //echo base_url();?><!--assets/js/jquery.min.js"></script>-->
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--Animation-->
<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
<link href="<?php echo base_url();?>assets/css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script src="<?php echo base_url();?>assets/js/simpleCart.min.js"> </script>	
<script type="text/javascript" src="<?php echo base_url();?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>

		
</head>
<body style="overflow-x: hidden;">
    <!-- header-section-starts -->
	<div  style="background-color: white;" class="header">
		<div style="background-color: white;" class="container">
			<div class="top-header">
			
				<div style="margin-left: 45%; margin-top: -5px;" class="queries">
					<p>Call us!<span>918.555.5555 </span><label>(11AM to 11PM)</label></p>
				</div>
				<div class="header-right">
						<div class="cart box_1">
						    <?php if( $this->cart->total_items()== 0) { ?>
							
								<h3>(<span id="itemsno" class="">  <?php echo  $this->cart->total_items(); ?></span> item)<img src="<?php echo base_url();?>assets/images/bag.png" alt=""></h3>
								
							<?php } else { ?>
							
							<a href="<?php echo base_url();?>front/catfood/<?php echo $this->session->userdata('foody');?>/<?php echo $this->session->userdata('kitchen');?>">
								<h3>(<span id="itemsno" class="">  <?php echo  $this->cart->total_items(); ?></span> item)<img src="<?php echo base_url();?>assets/images/bag.png" alt=""></h3>
							</a>
							<?php }?>
							
							<div class="clearfix"> </div>
						</div>
					</div>
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
						
						<li  ><a href="<?php echo base_url();?>front" >Home</a></li>|
						<li class="lit"><a href="<?php echo base_url();?>front/popularResturant">Franchises</a></li>|
						<li class="lit"><a href="<?php echo base_url();?>front/ourFood">Our Food</a></li>|
						<li class="lit"><a href="<?php echo base_url();?>front/gift">Gift</a></li>|
						<li class="lit"><a href="<?php echo base_url();?>front/events">Private Event</a></li>|
						<li class="lit"><a href="<?php echo base_url();?>front/contact">contact</a></li>|
						<li class="lit"><a href="#">Catering Order</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
					<?php if($this->session->userdata('user_id')!=""){ ?>
					<li><a href="<?php echo base_url();?>user">Profile</a>  </li> |
						<li><a href="<?php echo base_url();?>user/logout">Logout</a> </li> |
						
						<?php } 
						else{ ?>
						<li><a href="<?php echo base_url();?>user/userLogin">Login</a>  </li> |
						<li><a href="<?php echo base_url();?>user/register">Register</a> </li> |
							<?php } ?>
						<li><a href="#">Help</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
	</div>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Custom Theme files -->

<!-- Custom Theme files -->

<!--webfont-->

<script src="<?php echo base_url();?>assets/js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="<?php echo base_url();?>assets/js/tms-0.4.1.js"></script>
<script>
 $(window).load(function(){
      $('.slider')._TMS({
              show:0,
              pauseOnHover:false,
              prevBu:'.prev',
              nextBu:'.next',
              playBu:false,
              duration:800,
              preset:'fade', 
              pagination:true,//'.pagination',true,'<ul></ul>'
              pagNums:false,
              slideshow:8000,
              numStatus:false,
              banners:false,
          waitBannerAnimation:false,
        progressBar:false
      })  
      });
      
     $(window).load (
    function(){$('.carousel1').carouFredSel({auto: false,prev: '.prev',next: '.next', width: 960, items: {
      visible : {min: 1,
       max: 4
},
height: 'auto',
 width: 240,

    }, responsive: false, 
    
    scroll: 1, 
    
    mousewheel: false,
    
    swipe: {onMouse: false, onTouch: false}});
    
    
    });      

     </script>
<script src="<?php echo base_url();?>assets/js/jquery.easydropdown.js"></script>
<script src="<?php echo base_url();?>assets/js/simpleCart.min.js"> </script>	