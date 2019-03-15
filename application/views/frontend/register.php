<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php $this->load->view('frontend/header.php'); ?>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<style>
		 input[type="password"],input[type="email"],input[type="file"] {
    border: 1px solid #EEE;
    outline-color: #FF5B36;
    width: 96%;
    font-size: 1em;
    padding: 0.5em;
	</style>
	<div class="content">
	<div class="main">
	   <div class="container">
		  <div class="register">
		  	  <form method="post" action="<?php echo base_url();?>user/userSignup" enctype="multipart/form-data"> 
				 <div class="register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Name<label>*</label></span>
						<input type="text" name="name" required=""> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Phone<label>*</label></span>
						<input type="text" name="phone" required=""> 
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						 <span>Image<label>*</label></span>
						 <input type="file" id="file" name="file" accept=".jpg ,.jpeg,.png" required=""><br/> 
						 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Email Address<label>*</label></span>
						 <input type="email" id="email" name="email" required=""><br/> 
						 <span id="msgbx_err" style="display:none; color: red;" class="alert-box error"><b>Error! User already exists with same email.</b></span>
					 </div><br/>

					 
                         <div id="msgbx_success" style="display:none" class="alert-box success"><span>Success: </span>Username available!</div>
					 <div class="clearfix"> </div>
					     <a style="" class="news-letter" href="#">
						 <label class="checkbox"></label>
					   </a>
					   <br/>
					   <br/>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>LOGIN INFORMATION</h3>
							 <div class="wow fadeInLeft" data-wow-delay="0.4s">
								<span>Password<label>*</label></span>
								<input type="password" required="" id="pass" name="password">
							 </div>
							 <div class="wow fadeInRight" data-wow-delay="0.4s">
								<span>Confirm Password<label>*</label></span>
								<input type="password" required="" id="cpass" name="cpassword">
							 </div>
							 <span id="msg" style="font-weight:bold;"></span>
					 </div>
				
				<div class="clearfix"> </div>
				<div class="register-but">
				  
					   <input type="submit" id="sub" class="btn btn-danger btn-lg"  value="Submit">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
	     </div>
	    </div>



 <script>
        $('#cpass,#pass').on('keyup',function(){
var pass=$('#pass').val();
var conpass=$('#cpass').val();
if(conpass != pass){
    $('#msg').css('color','red');
$('#msg').html('Password Donot Match');
$('#sub').prop("disabled",true);

}
else{
    $('#msg').css('color','green');
    $('#msg').html('Password Match');
    $('#sub').prop("disabled",false);
}
        });

    </script>


    <script>



                $('#email').bind("keyup change", function(e) {
  var email = $('#email').val();
                     $.ajax({
                                   type: 'post',
                                   url: '<?php echo base_url(); ?>user/checkEmail',
                                   data: {
                                   email:email,type:'validate'
                                   },
                                   success: function (d) {
                                   console.log(d);
                                                           if (d != 0)
                                                           {
                                                               //$('#msgbx_success').css('display', 'none');
                                                               $('#msgbx_err').css('display', 'block');
                                                               $('#sub').prop("disabled",true);
                                                           }
                                                           else
                                                           {
                                                               $('#msgbx_err').css('display', 'none');
                                                               $('#sub').prop("disabled",false);

                                                           }
}
                                                   });
                                                         });

        </script>
<?php $Front = &get_instance();
$Front->footer();
?>