<html>
<head>
	<title>Cetak Absensi</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/cetak.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css" />
	<script src="<?php echo base_url(); ?>assets/moment.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>

</head>
<style type="text/css">
	#header{
		border-color: black;
		font-family: initial;
	}
	.margin
	{
		margin-left: 20px;
	}
</style>
<body>
	<page size="A4">
		<table width="100%" border="5px" id="header">
			<tbody>
				<tr>
					<td align="center">
						<b style="font-size:25px;">DAFTAR HADIR PEMBELAJARAN <br>DIKLAT {KEARSIPAN}</b> 
						<br>
						<span style="font-size: 15px">BADAN PENGEMBANG SUMBER DAYA MANUSIA DAERAH <br> PROVINSI KALIMANTAN SELATAN <br> TAHUN <?php echo date('Y') ?></span>
					</td>
				</tr>
			</tbody>
		</table>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<table style="font-size:14px;">
					<tbody>
						<tr  class="margin">
							<td width="200px" style="padding-bottom:10px">HARI / TANGGAL</td>
							<td width="10px" style="padding-bottom:10px">:</td>
							<td style="padding-bottom:10px">......................................................................................</td>

						</tr>
						<tr>
							<td width="200px" style="padding-bottom:10px">WAKTU</td>
							<td width="10px" style="padding-bottom:10px">:</td>
							<td style="padding-bottom:10px">......................................................................................</td>

						</tr>
						<tr>
							<td width="200px" style="padding-bottom:10px">MATERI PELAJARAN</td>
							<td width="10px" style="padding-bottom:10px">:</td>
							<td style="padding-bottom:10px">......................................................................................</td>
						</tr>
						<tr>
							<td width="200px" style="padding-bottom:10px">DOSEN / PENGAJAR</td>
							<td width="10px" style="padding-bottom:10px">:</td>
							<td style="padding-bottom:10px">......................................................................................</td>

						</tr>
						<tr><td><br></td></tr>
					</tbody>
				</table>
			</div>
			<br><br><br>
		</div>
		<div class="row clearfix">
			<div class="col-md-12">
				<table class="table table-bordered" style="width: 100%">
					<thead>
						<tr>
							<th rowspan="2" width="1px" class="text-center" style="vertical-align: middle;">NO</th>
							<th rowspan="2" class="text-center" style="vertical-align: middle;">NAMA / NIP</th>
							<th colspan="" class="text-center" style="vertical-align: middle;">INSTANSI</th>
							<th colspan="" class="text-center" style="vertical-align: middle;">TANDA TANGAN</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach (array(1,2,3,4,5,5,5,5) as $key => $value): ?>
						<tr>
							<td style="vertical-align: middle;" class="text-center"><?php echo $key+1 ?>.</td>
							<td style="vertical-align: middle;" class="text-left">
								Ruby Hamdani, S.Sos <br>
								NIP. 19123123 123123123 1 123
							</td>
							<td style="vertical-align: middle;" class="text-center">Dinas Perdagangan <br> Provinsi Kalimantan Selatan</td>
							<td style="vertical-align: middle;" class="text-left"><?php echo $key+1 ?>.</td>
						</tr>
						<?php endforeach ?>

					</tbody>
				</table>
			</div>
		</div>

		<div class="row clearfix">
			<div class="col-md-12">
				<table style="width: 100%">
						<tr>
							<td style="vertical-align: middle; color: red" class="text-left">Diklat {Kearsipan}</td>
							<td style="vertical-align: middle;" class="text-right">Banjarbaru, .......................................................</td>
						</tr>
				</table>
			</div>
		</div>
		<br><br>
		<div class="row clearfix">
			<div class="col-md-12">
				<table style="width: 100%">
						<tr>
							<td style="vertical-align: middle;" class="text-center"><b>Ketua Kelas</b></td>
							<td style="vertical-align: middle;" class="text-center"><b>Piket Kelas</b></td>
							<td style="vertical-align: middle;" class="text-center"><b>Pengajar / Widyaswara,</b></td>
						</tr>
						<tr colspan = "3" height="70px">

						</tr>
						<tr>
							<td style="vertical-align: middle;" width="200px" class="text-center">........................................................</td>
							<td style="vertical-align: middle;" width="200px" class="text-center">........................................................</td>
							<td style="vertical-align: middle;" width="200px" class="text-center">........................................................</td>
						</tr>
				</table>
			</div>
		</div>

		<br>
		<br>
		<br>
		<br>
	</page>

</body>

</html>