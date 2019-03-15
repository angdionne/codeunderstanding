<!--<script src="--><?php //echo base_url();?><!--plugins/jQuery/jQuery-2.2.0.min.js"></script>-->

<!--<link rel="stylesheet" href="--><?php //echo base_url();?><!--plugins/select2/select2.min.css">-->
<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>C</b>M</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Candidate</b>Management</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
              <li class="active"><a href="#" onclick="return false">Date<span class="sr-only">(current)</span></a></li>
            <li> <input  type="text" style="height: 50px;  min-width:175px;" value="<?php echo date("y-m-d H:i:s")?>" class="form-control pull-right"></li>
          </ul>

        </div>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li id="dropyBtn" class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle"  data-toggle="dropdown">
                        <img src="<?php echo base_url();?>assets/uploads/files/d.png" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo $this->session->userdata('admin_name');?> </span>
                    </a>

                    <ul id="Dropy" class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo base_url();?>assets/uploads/files/d.png" class="img-circle" alt="User Image">

                            <p>
                                <?php echo $this->session->userdata('admin_name');?>
                                 <small>Admin</small>
                            </p>
                        </li>
                        <!-- Menu Body -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                        <div class="pull-left">
                                <a href="<?php echo base_url();?>index.php/dashboard/profile" class="btn btn-default btn-flat">Profile</a>
                            </div>

                            <div class="pull-right">
                                <a href="<?php echo base_url();?>index.php/login/signOut" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
          <br>
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/uploads/files/d.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('admin_name');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

        </div>
          <br>
          <br>
      </div>

      <!-- search form -->
<!--      <form action="#" method="get" class="sidebar-form">-->
<!--        <div class="input-group">-->
<!--            <input type="text" name="q" id="q" onkeyup="searchIt();" class="form-control" placeholder="Search...">-->
<!--              <span class="input-group-btn">-->
<!--                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>-->
<!--                </button>-->
<!--              </span>-->
<!--        </div>-->
<!--      </form>-->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>




          <li class="treeview">
              <a href="<?php echo base_url();?>index.php/dashboard/candidate">
                  <i class="fa fa-male"></i>
                  <span>Candidates</span>

              </a>
          </li>
          <li class="treeview">
              <a href="<?php echo base_url();?>index.php/dashboard/jobs">
                  <i class="fa fa-at"></i>
                  <span>Jobs</span>

              </a>
          </li>
           <li class="treeview">
              <a href="<?php echo base_url();?>index.php/dashboard/Profile">
                  <i class="fa fa-user"></i>
                  <span>Profile</span>

              </a>
          </li>




      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
