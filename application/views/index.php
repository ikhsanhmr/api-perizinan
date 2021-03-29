 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<section class="content-header">
 		<h1>
 			Admin
 			<small>Aplikasi Perijinan</small>
 		</h1>
 		<ol class="breadcrumb">
 			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
 			<li><a href="#">Admin</a></li>
 			<li class="active">Aplikasi Perijinan</li>
 		</ol>
 	</section>

 	<!-- Main content -->
 	<section class="content">
 		<div class="row">
 			<div class="col-xs-12">
 				<div class="box">
 					<div class="box-header">
 						<h3 class="box-title">Aplikasi Perijinan</h3>
 					</div>
 					<!-- /.box-header -->
 					<div class="box-body">
 						<div class="table-responsive">
 							<table id="table_aplikasi_perijinan" class="table table-bordered table-striped">
 								<thead>
 									<tr>
 										<th>No. </th>
 										<th>No Pendaftaran</th>
 										<th>Nama Pemohon</th>
 										<th>Nama Izin</th>
 										<th>Lokasi Izin</th>
 										<th>Kebutuhan Listrik</th>
 										<th>Tahun Rencana Operasi</th>
 										<th>Status Berkas</th>
 										<th>No Telepon</th>
 										<th>Alamat Pemohon</th>
 										<th>Nama Perusahaan</th>
 										<th>Alamat Perusahaan</th>
 										<th>Email Perusahaan</th>
 										<th>No Telepon Perusahaan</th>
 										<th>NPWP Perusahaan</th>
 										<th>NIB</th>
 										<th>Provinsi</th>
 										<th>Kabupaten</th>
 										<th>Kecamatan</th>
 										<th>Kelurahan</th>
 									</tr>
 								</thead>
 								<tbody>

 								</tbody>
 							</table>
 						</div>
 						<div class="row">

 						</div>
 					</div>
 					<!-- /.box-body -->
 				</div>
 				<!-- /.box -->
 			</div>
 			<!-- /.col -->
 		</div>
 		<!-- /.row -->
 	</section>
 	<!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

 <script>
 	fetch('https://siaplayani.sumutprov.go.id/main/apiweb/pln/yu8wgeArYwxn/all')
 		.then(res => {
 			return res.json()
 		}).then(data => {
 			let html = ""
 			let no = 1
 			data.map(item => {
 				html = html + `
          <tr>
            <td>${no}</td>
            <td>${item.no_pendaftaran}</td>
            <td>${item.nama_pemohon}</td>
            <td>${item.nama_izin}</td>
            <td>${item.lokasi_izin}</td>
            <td>${item.kebutuhan_listrik}</td>
            <td>${item.thn_rencana_operasi}</td>
            <td>${item.status_berkas}</td>
            <td>${item.telp}</td>
            <td>${item.alamat_pemohon}</td>
            <td>${item.nama_perusahaan}</td>
            <td>${item.alamat_perusahaan}</td>
            <td>${item.email_perusahaan}</td>
            <td>${item.telp_perusahaan}</td>
            <td>${item.npwp_perusahaan}</td>
            <td>${item.NIB}</td>
            <td>${item.provinsi}</td>
            <td>${item.kabupaten}</td>
            <td>${item.kecamatan}</td>
            <td>${item.kelurahan}</td>
          </tr>
        `
 				no++
 			})
 			dataPerijinan = [...data]
 			document.querySelector('#table_aplikasi_perijinan tbody').innerHTML = html
 			console.log(dataPerijinan)
 		})
 </script>