<!DOCTYPE html><html><head>  <meta charset="utf-8">  <meta http-equiv="X-UA-Compatible" content="IE=edge">  <title>AdminGA | Kondisi Barang</title>  <!-- Tell the browser to be responsive to screen width -->  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">  <!-- Bootstrap 3.3.7 -->  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">  <!-- Font Awesome -->  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <!-- DataTables -->  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">  <!-- bootstrap datepicker -->  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">  <!-- Ionicons -->  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.0.0-15/css/ionicons.min.css">  <!-- Theme style -->  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">  <!-- AdminLTE Skins. Choose a skin from the css/skins       folder instead of downloading all of them to reduce the load. -->  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->  <!--[if lt IE 9]>  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  <![endif]-->  <!-- Google Font -->  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"></head><body class="hold-transition skin-blue sidebar-mini layout-boxed"><!-- Site wrapper --><div class="wrapper">  <header class="main-header">    <!-- Logo -->    <a href="<?php echo base_url();?>dashboard" class="logo">      <!-- mini logo for sidebar mini 50x50 pixels -->      <span class="logo-mini"><b>GA</b></span>      <!-- logo for regular state and mobile devices -->      <span class="logo-lg"><b>General Affairs</b></span>    </a>    <!-- Header Navbar: style can be found in header.less -->    <nav class="navbar navbar-static-top">      <!-- Sidebar toggle button-->      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">        <span class="sr-only">Toggle navigation</span>        <span class="icon-bar"></span>        <span class="icon-bar"></span>        <span class="icon-bar"></span>      </a>      <div class="navbar-custom-menu">        <ul class="nav navbar-nav">          <li class="dropdown user user-menu">            <a href="#" class="dropdown-toggle" data-toggle="dropdown">              <img src="<?php echo base_url();?>assets/dist/img/avatar.png" class="user-image" alt="User Image">              <span class="hidden-xs"><?php echo $_SESSION['nama']?></span>            </a>            <ul class="dropdown-menu">              <!-- User image -->              <li class="user-header">                <img src="<?php echo base_url();?>assets/dist/img/avatar.png" class="img-circle" alt="User Image">                <p>                  <?php echo $_SESSION['nama']," - ",$_SESSION['level'];?>                </p>              </li>                <!-- /.row -->              </li>              <!-- Menu Footer-->              <li class="user-footer">                <div class="pull-right">                  <a href="<?php echo base_url();?>sistem/logout" class="btn btn-default btn-flat">Sign out</a>                </div>              </li>            </ul>          </li>        </ul>      </div>    </nav>  </header>  <!-- =============================================== -->  <!-- Left side column. contains the sidebar -->  <aside class="main-sidebar">    <!-- sidebar: style can be found in sidebar.less -->    <section class="sidebar">      <!-- Sidebar user panel -->      <div class="user-panel">        <div class="pull-left image">          <img src="<?php echo base_url();?>assets/dist/img/avatar.png" class="img-circle" alt="User Image">        </div>        <div class="pull-left info">          <p><?php echo $_SESSION['nama']?></p>		  <small><i class="fa fa-circle text-success"></i> <?php echo $_SESSION['level']?></small>        </div>      </div>      <!-- sidebar menu: : style can be found in sidebar.less -->      <ul class="sidebar-menu" data-widget="tree">        <li class="header">MAIN NAVIGATION</li>        <li>          <a href="<?php echo base_url();?>dashboard">            <i class="fa fa-dashboard"></i> <span>Dashboard</span>          </a>        </li>		<li>          <a href="<?php echo base_url();?>kondisi_gedung">            <i class="fa fa-building"></i> <span>Cek Kondisi Gedung</span>          </a>        </li>		<li class="active">          <a href="<?php echo base_url();?>kondisi_barang">            <i class="fa fa-wrench"></i> <span>Cek Kondisi Barang</span>          </a>        </li>		<li>          <a href="<?php echo base_url();?>kondisi_kendaraan">            <i class="fa fa-car"></i> <span>Cek Kondisi Kendaraan</span>          </a>        </li>		<li>          <a href="<?php echo base_url();?>biaya_rumahtangga">            <i class="fa fa-cubes"></i> <span>Cek Biaya Rumah Tangga</span>          </a>        </li>		<li>          <a href="<?php echo base_url();?>biaya_kantor">            <i class="fa fa-money"></i> <span>Cek Biaya Kantor</span>          </a>        </li>		 <?php if($_SESSION['level'] == "General Affairs") {?>		<li>          <a href="<?php echo base_url();?>user">            <i class="fa fa-users"></i> <span>Kelola Akun</span>          </a>        </li>		<?php } ?>      </ul>    </section>    <!-- /.sidebar -->  </aside>  <!-- =============================================== -->  <!-- Content Wrapper. Contains page content -->  <div class="content-wrapper">    <!-- Content Header (Page header) -->    <section class="content-header">      <h1>        Cek Kondisi Barang-Barang PT. INFOGLOBAL        <br><small class="pull-right">Kondisi barang-barang yang ada di gedung PT. INFOGLOBAL</small><br>      </h1>    </section>    <!-- Main content -->    <section class="content">	<?php if($_SESSION['level'] == "General Affairs") {?>	  <div class="row">		<div class="col-xs-12">		<?php echo $this->session->flashdata('notifikasi')?>		<div class="box box-primary">            <div class="box-header with-border">              <h3 class="box-title">Form Kondisi Barang Inventaris PT. INFOGLOBAL</h3>            </div>			<!-- /.box-header -->			<form role="form" method="post" action="<?php echo site_url('kondisi_barang/input_barang');?>">                <div class="box-body">					<div class="row">						<div class="col-md-6 col-sm-12">                            <label for="exampleInputEmail1">Nama Ruangan</label>                            <select class="form-control" name="namaruangan">							<?php foreach($ruangan as $dataruangan){?>                                <option><?php echo $dataruangan->Nama_Ruangan ?></option>							<?php } ?>                            </select>						</div>						<div class="col-md-6 col-sm-12">                            <label for="exampleInputPassword1">Nama Barang</label>                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Status Ruangan" name="namabarang" required>						</div>					</div>					<div class="row">						<div class="col-md-6 col-sm-12">                            <label for="exampleInputPassword1">Jumlah</label>                            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Jumlah Barang" name="jumlahbarang" required>						</div>						<div class="col-md-6 col-sm-12">							<label for="exampleInputPassword1">Status</label>                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Status Barang" name="statusbarang" required>						</div>					</div>					<div class="row">						<div class="col-md-6 col-sm-12">                            <label for="exampleInputPassword1">Keadaan / Kondisi Barang</label>                            <input class="form-control" rows="3" placeholder="Masukkan Keadaan Ruangan ..." name="kondisibarang" required>						</div>						<div class="col-md-6 col-sm-12">                            <label for="exampleInputEmail1">Waktu</label>							<div class="input-group date">								<div class="input-group-addon">								  <i class="fa fa-calendar"></i>								</div>							<input type="text" class="form-control pull-right" id="datepicker" name="waktureport" required>							</div>						</div>											</div>					<div class="row">					<div class="col-md-6 col-sm-12">							<label for="exampleInputPassword1">Catatan General Affair</label>                            <textarea class="form-control" rows="3" placeholder="Masukkan Catatan ..." name="catatanbarang" required></textarea>						</div>						<div class="col-md-6 col-sm-12">                            <label for="exampleInputPassword1">Saran</label>                            <textarea class="form-control" rows="3" placeholder="Masukkan Saran ..." name="saranbarang" required></textarea>						</div>					</div>										</div>				<div class="box-footer">                    <button type="submit" class="btn btn-primary">Submit</button>                </div>            </form>            <!-- /.box-body -->          </div>		</div>	  </div>	<?php }?>	      <div class="row">		<div class="col-xs-12">		<div class="nav-tabs-custom">            <ul class="nav nav-tabs">			<?php			$link_tab = 0;			$record = 0;			foreach ($jenistahun as $datatahun){              echo "<li><a href='#tab",$link_tab,"' data-toggle='tab'>Tahun ",$datatahun->tahun,"</a></li>";			  $link_tab = $link_tab+1;			} 			?>            </ul>            <div class="tab-content">			<?php			$link_tab = 0;			$jumlahbulan = 0;			foreach ($jenistahun as $datatahun){ ?>              <div class="tab-pane" id="tab<?php echo $link_tab?>">				<div class="row">					<div class="col-xs-12">					<?php					foreach ($jenisbulan as $databulan){						if($databulan->tahun == $datatahun->tahun){							$jumlahbulan = $jumlahbulan+1;							switch($databulan->bulan){								case "1":								$bulan = "Januari";break;								case "2":								$bulan = "Februari";break;								case "3":								$bulan = "Maret";break;								case "4":								$bulan = "April";break;								case "5":								$bulan = "Mei";break;								case "6":								$bulan = "Juni";break;								case "7":								$bulan = "Juli";break;								case "8":								$bulan = "Agustus";break;								case "9":								$bulan = "September";break;								case "10":								$bulan = "Oktober";break;								case "11":								$bulan = "November";break;								case "12":								$bulan = "Desember";break;								default : $bulan = "ETC";break;							}					?>					  <div class="box box-warning collapsed-box">						<div class="box-header with-border">						  <h3 class="box-title"><center><?php echo $bulan?></center></h3>						  <div class="box-tools pull-right">						    <a href="<?php echo base_url().'excel/laporanbarang/'.$databulan->bulan.'-'.$databulan->tahun;?>" class="btn btn-box-tool"><i class="fa fa-file"></i></a>						    <a href="<?php echo base_url().'cetak/laporanbarang/'.$databulan->bulan.'-'.$databulan->tahun;?>" target="_blank" class="btn btn-box-tool"><i class="fa fa-print"></i></a>							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>						  </div>						  <!-- /.box-tools -->						</div>						<!-- /.box-header -->						<div class="box-body">						<div class="table-responsive">							<table id="<?php echo "example",$jumlahbulan;?>" class="table table-bordered table-striped">								<thead>								<tr>								  <?php if($_SESSION['level'] == "General Affairs") {?>								  <th>Action</th>								  <?php } ?>								  <th>Nama Barang</th>								  <th>Nama Ruangan</th>								  <th>Jumlah</th>								  <th>Status</th>								  <th>Keadaan / Kondisi Barang</th>								  <th>Catatan GA</th>								  <th>Saran</th>								</tr>								</thead>								<tbody>								<?php 								foreach($barang as $databarang){									if ($databarang->tahun == $datatahun->tahun AND $databarang->bulan == $databulan->bulan){										$record = $record+1;								?>								<tr>								  <?php if($_SESSION['level'] == "General Affairs") {?>								  <td>								  <div class="btn-group">									<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>									<ul class="dropdown-menu">										<li>											<button class="btn-default" data-toggle="modal" data-target="#edit-<?php echo $databarang->ID_Barang ?>">Edit</button>											<button class="btn-danger" data-toggle="modal" data-target="#delete-<?php echo $databarang->ID_Barang ?>">Delete</button>										</li>									</ul>								  </div>								  </td>								  <?php }?>								  <td><?php echo $databarang->Nama_Barang?></td>								  <td><?php echo $databarang->Nama_Ruangan?></td>								  <td><?php echo $databarang->Jumlah_Barang?></td>								  <td><?php echo $databarang->Status_Barang?></td>								  <td><?php echo $databarang->Kondisi_Barang?></td>									  <td><?php echo $databarang->Catatan_GA_Barang?></td>								  								  <td><?php echo $databarang->Saran_Barang?></td>								</tr>								<div class="modal modal-default fade" id="edit-<?php echo $databarang->ID_Barang ?>">								  <div class="modal-dialog modal-lg">									<div class="modal-content">									  <div class="modal-header">										<button type="button" class="close" data-dismiss="modal" aria-label="Close">										  <span aria-hidden="true">&times;</span></button>										<h3 class="modal-title">Edit Barang <?php echo $databarang->Nama_Barang ?> pada Bulan <?php echo $databarang->bulan ?> pada Tahun <?php echo $databarang->tahun ?></h3>									  </div>									  <div class="modal-body">										<div class="box box-primary">										  <div class="box-header">											<h3 class="box-title">Form Kondisi Gedung PT. INFOGLOBAL</h3>										  </div>										  <form role="form" method="post" action="<?php echo site_url('kondisi_barang/edit_barang/'),$databarang->ID_Barang;?>">										  <div class="box-body">												<div class="row">													<div class="col-md-6 col-sm-12">														<label for="exampleInputEmail1">Nama Barang</label>														<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Barang" name="namabarang" value="<?php echo $databarang->Nama_Barang?>" required>													</div>													<div class="col-md-6 col-sm-12">														<label for="exampleInputPassword1">Nama Ruangan</label>														<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nama Ruangan" name="namaruangan" value ="<?php echo $databarang->Nama_Ruangan?>" required>													</div>												</div>												<div class="row">													<div class="col-md-6 col-sm-12">														<label for="exampleInputPassword1">Jumlah Barang</label>														<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Jumlah Barang" name="jumlahbarang" value ="<?php echo $databarang->Jumlah_Barang?>" required>													</div>													<div class="col-md-6 col-sm-12">														<label for="exampleInputPassword1">Status Barang</label>														<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Status Barang" name="statusbarang" value ="<?php echo $databarang->Status_Barang?>" required>													</div>													<div class="col-md-6 col-sm-12">														<label for="exampleInputPassword1">Kondisi Barang</label>														<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Kondisi Barang" name="kondisibarang" value ="<?php echo $databarang->Kondisi_Barang?>" required>													</div>																										<div class="col-md-6 col-sm-12">														<label for="exampleInputEmail1">Waktu</label>														<div class="input-group date">															<div class="input-group-addon">															  <i class="fa fa-calendar"></i>															</div>														<?php														$pecah = explode("-",$databarang->Waktu_Report);														switch($pecah[1]){															case "1":															$bulan = "January";break;															case "2":															$bulan = "February";break;															case "3":															$bulan = "March";break;															case "4":															$bulan = "April";break;															case "5":															$bulan = "May";break;															case "6":															$bulan = "June";break;															case "7":															$bulan = "July";break;															case "8":															$bulan = "August";break;															case "9":															$bulan = "September";break;															case "10":															$bulan = "October";break;															case "11":															$bulan = "November";break;															case "12":															$bulan = "December";break;															default : $bulan = "ETC";break;														}														?>														<input type="text" class="form-control pull-right" id="datepicker<?php echo $record?>" name="waktureport" value="<?php echo $bulan." ".$pecah[0] ?>">														</div>													</div>												</div>												<div class="row">													<div class="col-md-6 col-sm-12">														<label for="exampleInputPassword1">Catatan General Affair</label>														<textarea class="form-control" rows="3" placeholder="Masukkan Catatan ..." name="catatanbarang" required><?php echo $databarang->Catatan_GA_Barang?></textarea>													</div>													<div class="col-md-6 col-sm-12">														<label for="exampleInputPassword1">Saran</label>														<textarea class="form-control" rows="3" placeholder="Masukkan Saran ..." name="saranbarang" required><?php echo $databarang->Saran_Barang?></textarea>													</div>												</div>											<!-- /.box-body -->										  </div>										</div>									  <div class="modal-footer">										<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>										<button type="submit" class="btn btn-success">Save changes</button>									  </div>											</form>									  </div>									<!-- /.modal-content -->									</div>								  <!-- /.modal-dialog -->								  </div>								</div>																<div class="modal modal-danger fade" id="delete-<?php echo $databarang->ID_Barang ?>">								  <div class="modal-dialog">									<div class="modal-content">									  <div class="modal-header">										<button type="button" class="close" data-dismiss="modal" aria-label="Close">										  <span aria-hidden="true">&times;</span></button>										<h3 class="modal-title"><center>Hapus Data Barang<?php echo $databarang->Nama_Barang ?> pada Bulan <?php echo $databarang->bulan ?> pada Tahun <?php echo $databarang->tahun ?></center></h3>									  </div>									  <div class="modal-body">										<p><center>Apakah anda yakin ingin menghapus data <?php echo $databarang->Nama_Barang?> ???</center></p>									  </div>									  <div class="modal-footer">										<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>										<a href="<?php echo site_url('kondisi_barang/hapus_barang/'),$databarang->ID_Barang;?>" type="button" class="btn btn-primary">Hapus</a>									  </div>									</div>									<!-- /.modal-content -->								  </div>								  <!-- /.modal-dialog -->								</div>													<?php }}?>								</tbody>								<tfoot>								<tr>								  <?php if($_SESSION['level'] == "General Affairs") {?>								  <th>Action</th>								  <?php }?>								  <th>Nama Barang</th>								  <th>Nama Ruangan</th>								  <th>Jumlah</th>								  <th>Status</th>								  <th>Keadaan / Kondisi Barang</th>								  <th>Catatan GA</th>								  <th>Saran</th>									</tr>								</tfoot>							</table>						</div>												</div>						<!-- /.box-body -->					  </div>					  <!-- /.box -->					<?php }} ?>					</div>					<!-- /.col -->				</div>              </div>              <!-- /.tab-pane -->			<?php $link_tab = $link_tab+1;}echo "<script>var loop = ",$jumlahbulan,"</script>" ?>            </div>                    <!-- /.box -->        </div>		</div>	  </div>	  	  		    </section>    <!-- /.content -->  </div>  <!-- /.content-wrapper -->  <footer class="main-footer">    <div class="pull-right hidden-xs">      <b>Version</b> 2.4.0    </div>    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights    reserved.  </footer>  <!-- Add the sidebar's background. This div must be placed       immediately after the control sidebar -->  <div class="control-sidebar-bg"></div></div><!-- ./wrapper --><!-- jQuery 3 --><script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script><!-- Bootstrap 3.3.7 --><script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script><!-- DataTables --><script src="<?php echo base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script><script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script><!-- bootstrap datepicker --><script src="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script><!-- SlimScroll --><script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script><!-- FastClick --><script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script><!-- AdminLTE App --><script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script><!-- AdminLTE for demo purposes --><script src="<?php echo base_url();?>assets/dist/js/demo.js"></script><!-- page script --><?php 	for($i = 1; $i <=$jumlahbulan; $i++){		echo "<script>  $(function () {    $('#example",$i,"').DataTable({      'paging'      : true,      'lengthChange': false,      'searching'   : false,      'ordering'    : true,      'info'        : true,      'autoWidth'   : false    })  })</script>";	}	for($i = 1; $i<=$record;$i++){		echo "<script>$('#datepicker",$i,"').datepicker({    autoclose: true,	format: 'MM yyyy',	viewMode: 'months', 	minViewMode: 'months',	orientation: 'bottom auto'})</script>				";	}?><script>    //Date picker    $('#datepicker').datepicker({      autoclose: true,	  format: 'MM yyyy',	  viewMode: 'months', 	  minViewMode: 'months',	  orientation: "bottom auto"    })</script></body></html>