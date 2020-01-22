<title>Laporan Data Disposisi</title>
<?php
	include 'koneksi.php';
	include 'function_tanggal.php';
?>
	<style type="text/css">
		body {
			font-size: 12px!important;
			color: #212121;
		}
		.header {
			text-align: center;
			margin: -.5rem 0;
		}
		#lead {
                width: auto;
                position: relative;
                margin: 25px 0 0 75%;
            }
		.lead {
			font-weight: bold;
			text-decoration: underline;
			margin-bottom: -10px;
		}
		.logo1 {
			float: left;
			position: relative;
			width: 80px;
			height: 80px;
			margin: 0 0 0 1.2rem;
		}
		.logo2 {
			float: right;
			position: relative;
			width: 80px;
			height: 80px;
			margin: 0 0 0 1.2rem;
		}
		.text {
			font-size: 15px!important;
			font-weight: bold;
			text-transform: uppercase;
		}
		#table tr th { 
			font-size: 11px;
	    } 
		#table tr td { 
			font-size: 10px; 
		}
	</style>

	<div class="row" align="center">
		<div class="header">
			<img src="assets/img/logo.gif" class="logo1">
			<!-- <img src="assets/img/logo_abroor.png" class="logo2"> -->
			<h6 class="text">PEMERINTAH KOTA BANJARMASIN<br> DINAS SOSIAL</h6>
			<h4>Jl. Ir. Pangeran H. Muhammad Noor Rt. 38 No. 02 Telp/Fax. (0511) 4412276 Banjarmasin 70118</h4>
			<h4>Email : Dinsos_Banjarmasin@yahoo.com Website : Simdakskbjm.com</h4>
			<td colspan="3" bordered="#000000">
				<div align="center" style="border: solid; font-size: 10px;">
				</div>
			</td>
		</div>
		<br>

		<?php
				if (isset($_POST['cetak'])) {
					$dari_tanggal = InggrisTgl($_POST['dari_tanggal']);
					$sampai_tanggal= InggrisTgl($_POST['sampai_tanggal']);

					//indonesia Tgl
					$dari_tanggal_indo = IndonesiaTgl($dari_tanggal);
					$sampai_tanggal_indo= IndonesiaTgl($sampai_tanggal);

					if ($_REQUEST['dari_tanggal']=="" || $_REQUEST['sampai_tanggal']=="") {
						echo '<script>
								window.location.href="./index.php?page=semua";
						 	 </script>';
						die();
					}else{
						$query	= "SELECT * FROM disposisi JOIN surat_masuk ON disposisi.id_surat = surat_masuk.id where batas_waktu between '$dari_tanggal' and '$sampai_tanggal'";
						$sql    = mysqli_query($connect, $query);
			?>
			<div class="col-md-10">
				<h4><strong>LAPORAN DATA DISPOSISI DARI TANGGAL <?php echo $dari_tanggal_indo;?> SAMPAI TANGGAL <?php echo $sampai_tanggal_indo;?></strong></h4>
			</div>	
				<table id="table" border="1" cellspacing="0" cellpadding="5" width="100%">
					<thead>
						<tr>
							<th width="1">No</th>
							<th>No Surat</th>
							<th>Sifat</th>
							<th>Batas Waktu</th>
							<th>Catatan</th>
							<th>Tujuan</th>
						</tr>
					</thead>
					<tbody>
						<?php
							if (mysqli_num_rows($sql) > 0) {
								$no=1;
								while ($data = mysqli_fetch_array($sql)) {
						?>
						<td width="1"><?php echo $no++; ?></td>
						<td><?php echo $data['no_surat']?></td>
						<td><?php echo $data['sifat']?></td>
						<td><?php echo IndonesiaTgl($data['batas_waktu'])?></td>
						<td><?php echo $data['catatan']?></td>
						<td><?php echo $data['tujuan']?></td>

						
					</tbody>
					<?php 
								}
							}else{
								echo '<tr><td colspan="9"><center><h2><strong>Tidak ada Agenda surat Keluar</></strong></h2></center></td></tr>';
							}
							}
						}	
					?>
						
				</table>
			<div id="lead">
				<p>Kepala Dinas Sosial</p>
				<div style="height: 50px;"></div>
				<?php 
				$query = mysqli_query($connect, "SELECT nama_kepala, nip FROM instansi");
				list($kepala,$nip) = mysqli_fetch_array($query);
				if(!empty($kepala)){
					echo '<p class="lead">'.$kepala.'</p>';
				} else {
					echo '<p class="lead">Ketua Dinas Sosial</p>';
				}
				if(!empty($nip)){
					echo '<p>NIP. '.$nip.'</p>';
				} else {
					echo '<p>NIP. -</p>';
				}
				?>
			</div>
	</div>
	<script type="text/javascript">
		window.print();
	</script>