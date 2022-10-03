<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminGA | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.0.0-15/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini layout-boxed">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>GA</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>General Affairs</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>assets/dist/img/avatar.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['nama']?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();?>assets/dist/img/avatar.png" class="img-circle" alt="User Image">

                <p>
				<?php echo $_SESSION['nama']," - ",$_SESSION['level'];?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url();?>sistem/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nama']?></p>
		  <small><i class="fa fa-circle text-success"></i> <?php echo $_SESSION['level']?></small>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="<?php echo base_url();?>dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
		<li>
          <a href="<?php echo base_url();?>kondisi_gedung">
            <i class="fa fa-building"></i> <span>Cek Kondisi Gedung</span>
          </a>
        </li>
		<li>
          <a href="<?php echo base_url();?>kondisi_barang">
            <i class="fa fa-wrench"></i> <span>Cek Kondisi Barang</span>
          </a>
        </li>
		<li>
          <a href="<?php echo base_url();?>kondisi_kendaraan">
            <i class="fa fa-car"></i> <span>Cek Kondisi Kendaraan</span>
          </a>
        </li>
		<li>
          <a href="<?php echo base_url();?>biaya_rumahtangga">
            <i class="fa fa-cubes"></i> <span>Cek Biaya Rumah Tangga</span>
          </a>
        </li>
		<li>
          <a href="<?php echo base_url();?>biaya_kantor">
            <i class="fa fa-money"></i> <span>Cek Biaya Kantor</span>
          </a>
        </li>
		 <?php if($_SESSION['level'] == "General Affairs") {?>
		<li>
          <a href="<?php echo base_url();?>user">
            <i class="fa fa-users"></i> <span>Kelola Akun</span>
          </a>
        </li>
		 <?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Cek Kondisi Perusahaan PT. INFOGLOBAL</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
		
		<div class="row">
			<div class="col-lg-4 col-xs-12 col-md-6">
			  <!-- small box -->
			  <div class="small-box bg-aqua">
				<div class="inner">
				  <h3>CEK</h3>

				  <h4>Kondisi Gedung</h4>
				</div>
				<div class="icon">
				  <i class="fa fa-building"></i>
				</div>
				<a href="<?php echo base_url();?>kondisi_gedung" class="small-box-footer">
				  Klik Disini <i class="fa fa-arrow-circle-right"></i>
				</a>
			  </div>
			</div>
			<div class="col-lg-4 col-xs-12 col-md-6">
			  <!-- small box -->
			  <div class="small-box bg-green">
				<div class="inner">
				  <h3>CEK</h3>

				  <h4>Kondisi Barang</h4>
				</div>
				<div class="icon">
				  <i class="fa fa-wrench"></i>
				</div>
				<a href="<?php echo base_url();?>kondisi_barang" class="small-box-footer">
				  Klik Disini <i class="fa fa-arrow-circle-right"></i>
				</a>
			  </div>
			</div>
			<div class="col-lg-4 col-xs-12 col-md-6">
			  <!-- small box -->
			  <div class="small-box bg-red">
				<div class="inner">
				  <h3>CEK</h3>

				  <h4>Kondisi Kendaraan</h4>
				</div>
				<div class="icon">
				  <i class="fa fa-car"></i>
				</div>
				<a href="<?php echo base_url();?>kondisi_kendaraan" class="small-box-footer">
				  Klik Disini <i class="fa fa-arrow-circle-right"></i>
				</a>
			  </div>
			</div>
			<div class="col-lg-4 col-xs-12 col-md-6">
			  <!-- small box -->
			  <div class="small-box bg-yellow">
				<div class="inner">
				  <h3>CEK</h3>

				  <h4>Biaya Rumah Tangga</h4>
				</div>
				<div class="icon">
				  <i class="fa fa-cubes"></i>
				</div>
				<a href="<?php echo base_url();?>biaya_rumahtangga" class="small-box-footer">
				  Klik Disini <i class="fa fa-arrow-circle-right"></i>
				</a>
			  </div>
			</div>
			<div class="col-lg-4 col-xs-12 col-md-6">
			  <!-- small box -->
			  <div class="small-box bg-aqua">
				<div class="inner">
				  <h3>CEK</h3>

				  <h4>Biaya Kantor</h4>
				</div>
				<div class="icon">
				  <i class="fa fa-money"></i>
				</div>
				<a href="<?php echo base_url();?>biaya_kantor" class="small-box-footer">
				  Klik Disini <i class="fa fa-arrow-circle-right"></i>
				</a>
			  </div>
			</div>
			 <?php if($_SESSION['level'] == "General Affairs") {?>
			<div class="col-lg-4 col-xs-12 col-md-6">
			  <!-- small box -->
			  <div class="small-box bg-green">
				<div class="inner">
				  <h3>Kelola</h3>

				  <h4>Akun</h4>
				</div>
				<div class="icon">
				  <i class="fa fa-users"></i>
				</div>
				<a href="<?php echo base_url();?>User" class="small-box-footer">
				  Klik Disini <i class="fa fa-arrow-circle-right"></i>
				</a>
			  </div>
			</div>
			 <?php } ?>
		</div>
		
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>