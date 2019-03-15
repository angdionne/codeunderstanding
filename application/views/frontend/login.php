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
	<div class="container">
		<div class="login-page">
			    <div class="dreamcrub">

                <ul class="previous">
                	<li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="account_grid">
			   <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="<?php echo base_url();?>user/register">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<form action="<?php echo base_url(); ?>user/userSignIn" method="post">
				  <div>
					<span>Email Address<label>*</label></span>
					<input type="email" name="user_email"> 
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input type="password" name="user_pass"> 
					<br/>
					<span style="color:red"><?php echo $this->session->flashdata('msg'); ?></span>
				  </div>
				  <!--<a class="forgot" href="#">Forgot Your Password?</a>-->
				  <input type="submit" value="Login">
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
</div>

<div class="clearfix"></div>

<?php $Front = &get_instance();
$Front->footer();
?>