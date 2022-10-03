<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin GA | Laporan Kondisi Barang</title>
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style >
 	table{margin: auto; font-size: 12px;}
 	td,th{padding: 5px; text-align: center}
 	h1,h5{text-align: center}
 	th{background-color: padding: 5px;color: #000}
	hr{}
  </style>
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
   
    <!-- Table row -->
    <div class="row">
	<div class="col-xs-12 table-responsive">
		<table class="table">
		<tbody>
			<tr>
				<td style="padding-top: 30px;padding-bottom: 10px">
					<p style="font-weight: bold; font-size:30px;">PT. INFOGLOBAL</p>
					<p>Jl. Cilangkap Raya No.28, RT.7/RW.4, Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13840</p>
					<p>Email : marketing@infoglobal.co.id | Telepon :  +62 21-84309691 | Fax : +62 21-84309692</p>
				</td>
			</tr>
		</tbody>
		</table>
      </div>
	  <?php 
		  if($cetak != null){
		  foreach($cetak as $datacetak){
		  switch($datacetak->bulan){
			case "1":
			$bulan = "JANUARI";break;
			case "2":
			$bulan = "FEBRUARI";break;
			case "3":
			$bulan = "MARET";break;
			case "4":
			$bulan = "APRIL";break;
			case "5":
			$bulan = "MEI";break;
			case "6":
			$bulan = "JUNI";break;
			case "7":
			$bulan = "JULI";break;
			case "8":
			$bulan = "AGUSTUS";break;
			case "9":
			$bulan = "SEPTEMBER";break;
			case "10":
			$bulan = "OKTOBER";break;
			case "11":
			$bulan = "NOVEMBER";break;
			case "12":
			$bulan = "DESEMBER";break;
			default : $bulan = "ETC";break;
		  }
	  ?>
	  <h5>LAPORAN KONDISI BARANG PADA BULAN <?php echo $bulan.' TAHUN '.$datacetak->tahun ?></h5>
		  <?php break;}}?>
		  <br>
      <div class="col-xs-12 table-responsive">
        <table class="table table-bordered">
          <thead>
          <tr>
							      <th>Nama Barang</th>
								  <th>Nama Ruangan</th>
								  <th>Jumlah</th>
								  <th>Status</th>
								  <th>Keadaan / Kondisi Barang</th>
								  <th>Catatan GA</th>
								  <th>Saran</th>
          </tr>
          </thead>
          <tbody>
		  <?php 
		  if($cetak != null){
		  foreach($cetak as $datacetak){?>
          <tr>
		  
								  <td><?php echo $datacetak->Nama_Barang?></td>
								  <td><?php echo $datacetak->Nama_Ruangan?></td>
								  <td><?php echo $datacetak->Jumlah_Barang?></td>
								  <td><?php echo $datacetak->Status_Barang?></td>
								  <td><?php echo $datacetak->Kondisi_Barang?></td>	
								  <td><?php echo $datacetak->Catatan_GA_Barang?></td>								  
								  <td><?php echo $datacetak->Saran_Barang?></td>
          </tr>
		  <?php 
		  }
		  } else {
			echo "<tr>Data tidak tersedia</tr>";
		  }?>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
