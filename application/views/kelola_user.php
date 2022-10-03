<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminGA | Kondisi Gedung</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
        <li>
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
          <a href="<?php echo base_url();?>kondisi_barang">
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
		<li class="active">
          <a href="<?php echo base_url();?>user">
            <i class="fa fa-users"></i> <span>Kelola Akun</span>
          </a>
        </li>
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
        Kelola Akun Sistem Informasi General Affairs PT. INFOGLOBAL
        <br><small class="pull-right">Akun yang ada di sistem informasi PT. INFOGLOBAL</small><br>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
	  <?php if($_SESSION['level'] == "General Affairs") {?>
	  <div class="row">
        <div class="col-xs-12">
		<?php echo $this->session->flashdata('notifikasi')?>
		  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Kelola Akun Sistem Informasi General Affairs PT. INFOGLOBAL</h3>
            </div>
			<!-- /.box-header -->
			<form role="form" method="post" action="<?php echo site_url('user/input_user');?>">
                <div class="box-body">
					<div class="row">
						<div class="col-md-6 col-sm-12">
                            <label for="exampleInputEmail1">ID User</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan ID User" name="Id_User" required>
						</div>
						<div class="col-md-6 col-sm-12">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Status Password" name="Password" required>
						</div>
						<div class="col-md-6 col-sm-12">
                            <label for="exampleInputEmail1">Nama User</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama User" name="Nama_User" required>
						</div>
						<div class="col-md-6 col-sm-12">
                            <label for="exampleInputEmail1">Jabatan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Jabatan" name="Jabatan" required>
						</div>
					</div>
					
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <!-- /.box-body -->
          </div>
		</div>
	  </div>
	  <?php } ?>
	  <?php if($_SESSION['level'] == "General Affairs") {?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Kelola Akun PT. INFOGLOBAL</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<div class="table-responsive">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
				  <?php if($_SESSION['level'] == "General Affairs") {?>
				  <th>Action</th>
				  <?php } ?>
                  <th>ID User</th>
                  <th>Nama User</th>
                  <th>Jabatan</th>
                </tr>
                </thead>
                <tbody>
				<?php foreach($akun as $datauser){?>
                <tr>
				  <?php if($_SESSION['level'] == "General Affairs") {?>
				  <td>
				  <div class="btn-group">
					<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
					<ul class="dropdown-menu">
                        <li>
							<button class="btn-default" data-toggle="modal" data-target="#edit-<?php echo $datauser->Id_User ?>">Edit</button>
							<button class="btn-danger" data-toggle="modal" data-target="#delete-<?php echo $datauser->Id_User ?>">Delete</button>
						</li>
                    </ul>
				  </div>
				  </td>
				  <?php } ?>
                  <td><?php echo $datauser->Id_User ?></td>
                  <td><?php echo $datauser->Nama_User ?></td>
                  <td><?php echo $datauser->Jabatan ?></td>
                </tr>
				<?php if($_SESSION['level'] == "General Affairs") {?>
				<div class="modal modal-default fade" id="edit-<?php echo $datauser->Id_User ?>">
				  <div class="modal-dialog modal-lg">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span></button>
						<h3 class="modal-title">Edit User <?php echo $datauser->Nama_User ?></h3>
					  </div>
					  <div class="modal-body">
						<div class="box box-default">
							<!-- /.box-header -->
							<form role="form" method="post" action="<?php echo site_url('user/edit_user/'),$datauser->Id_User;?>">
								<div class="box-body">
									<div class="row">
										<div class="col-md-6 col-sm-12">
											<label for="exampleInputEmail1">ID User</label>
											<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan ID User" name="IdUser" value="<?php echo $datauser->Id_User ?>" disabled>
										</div>
										<div class="col-md-6 col-sm-12">
											<label for="exampleInputPassword1">New Password</label>
											<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password" name="passworduser" required>
										</div>
										<div class="col-md-6 col-sm-12">
											<label for="exampleInputPassword1">Nama User</label>
											<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nama User" name="namauser" value="<?php echo $datauser->Nama_User?>" required>
										</div>
										<div class="col-md-6 col-sm-12">
											<label for="exampleInputPassword1">Jabatan</label>
											<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Jabatan" name="jabatanuser" value="<?php echo $datauser->Jabatan ?>" required>
										</div>
									</div>
									
								</div>
						  </div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-success">Save changes</button>
					  </div>
							</form>
					</div>
					<!-- /.modal-content -->
				  </div>
				  <!-- /.modal-dialog -->
				</div>
				
				<div class="modal modal-danger fade" id="delete-<?php echo $datauser->Id_User ?>">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span></button>
						<h3 class="modal-title"><center>Hapus akun user <?php echo $datauser->Nama_User ?></center></h3>
					  </div>
					  <div class="modal-body">
						<p><center>Apakah anda yakin ingin menghapus akun pengguna <?php echo $datauser->Nama_User ?> ???</center></p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
						<a href="<?php echo site_url('user/hapus_user/'),$datauser->Id_User;?>" type="button" class="btn btn-primary">Hapus</a>
					  </div>
					</div>
					<!-- /.modal-content -->
				  </div>
				  <!-- /.modal-dialog -->
				</div>
				
				<?php }} ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Action</th>
                  <th>ID User</th>
                  <th>Nama User</th>
                  <th>Jabatan</th>
                </tr>
                </tfoot>
              </table>
            </div>
			</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
	  <?php } ?>	
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
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>