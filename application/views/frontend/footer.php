
		<div style="background-color: #eaeaea" class="contact-section" id="contact">
			<div class="container">
				<div class="contact-section-grids">
                    <div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
                        <h3 style="color: #0c0c0c" >Popular Cuisines</h3>



                        <?php foreach($foodcat as $fc){ ?>

                            <ul>
                                <li><i class="point"></i></li>
                                <li class="data"><a href="#" data-toggle="modal" onclick="allData(this);" data-id="<?php echo $fc->food_cat_id;?>" data-target="#myModal"><?php echo @$fc->food_cat_name;?></a></li>
                            </ul>
                        <?php } ?>

                    </div>
					<div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
						<h3 style="color: #0c0c0c" >Locations</h3>

                        <?php
                       // print_r($kitchens());
                        //die();

                        foreach ($kitchens as $kit) { ?>

						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="<?php echo base_url();?>front/kitchenDetail/<?php echo $kit->kitchen_name;?>"><?php echo @$kit->kitchen_name;?></a></li>
						</ul>
                        <?php } ?>

					</div>

					<div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">

                        <h3 style="color: #0c0c0c" >About Us</h3>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="<?php echo base_url();?>front">Home</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="<?php echo base_url();?>front/popularResturant">Franchises</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="<?php echo base_url();?>front/ourFood">Our Food</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="<?php echo base_url();?>front/">Contact Us</a></li>
						</ul>
							<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">About Us</a></li>
						</ul>
						</ul>
							<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Values</a></li>
						</ul>
					</div>

					<div class="col-md-3 contact-section-grid nth-grid wow fadeInRight" data-wow-delay="0.4s">
                        <h3 style="color: #0c0c0c" >Mobile Applications</h3>

                        <ul>

                            <li class="data"><a href="#"><img style="width: 65%; height:50%;" src="<?php echo base_url();?>assets/images/android.ie.svg"></a></li>
                        </ul>
                        <ul>

                            <li class="data"><a href="#"><img src="<?php echo base_url();?>assets/images/ios.ie.svg"></a></li>
                        </ul>


						</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-section-ends -->
	<!-- footer-section-starts -->
        <div style="background-color: #eaeaea;      " class="footer">
            <div class="container">
                <center style="font-weight: bold ; color: #535353" class="wow data fadeInLeft" data-wow-delay="0.4s">Are you a Restaurant Owner? Sign up today to increase Orders.<br>
<br>
                <a href="#" style="background-color:#eaeaea; border-color: #535353; color: #535353 "  class="btn btn-default">Yes I want More Information</a>
<br><br>
                    <p class="wow fadeInLeft " data-wow-delay="0.4s  " style="color:#535353; ">Already Registered? <a style="color:blue; " href="<?php echo base_url();?>Login">Manage Your Restaurant</a>  </p>
                </center>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">


                <p class="wow fadeInLeft pull-left" style="color:#535353" data-wow-delay="0.4s "><img src="<?php echo base_url();?>assets/images/fb.png">&nbsp;<img src="<?php echo base_url();?>assets/images/google.png">&nbsp;<img src="<?php echo base_url();?>assets/images/insta.png">&nbsp;<img src="<?php echo base_url();?>assets/images/pintrest.png">&nbsp;<img src="<?php echo base_url();?>assets/images/twitter.png">&nbsp;
                    <img src="<?php echo base_url();?>assets/images/wifi.png">&nbsp;</p>
                    </div>
                    <div class="col-md-6">
                <p class="wow fadeInLeft pull-right" style="     margin-top: 2%;color:#535353" data-wow-delay="0.4s "><img src="<?php echo base_url();?>assets/images/mastercard.png">&nbsp;<img src="<?php echo base_url();?>assets/images/visacard.png">&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>

	<div style="background-color: #eaeaea" class="footer">
        <hr class="wow fadeInLeft " style=" display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0; ">

		<div class="container">
			<center><p class="wow fadeInLeft " style="color:#535353" data-wow-delay="0.4s ">&copy; 2018 &nbsp;My Food App, USA Inc  All rights  Reserved. Powered By Foodi Mate</p>
            </center>
        </div>
	</div>
	<!-- footer-section-ends -->
	  <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

        <script>
            $("#news").on('click', function(e) {
                var email = $('#email').val();
               // alert(email);
            $.ajax({


                url:'<?php echo base_url();?>Front/newsletter',
                type:'POST',
                data:{email:email},
            success: function(data) {
                //console.log(data);
                var display="You are suscribed Succesfully";
                $('#show').html(display);
                $('#email').val('');


            }

            });
            });


        </script>

</body>
</html>
 