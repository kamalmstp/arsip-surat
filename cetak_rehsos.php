<title>Lembar Disposisi</title>
<?php
	include 'koneksi.php';
	include 'function_tanggal.php';
?>
	<style type="text/css">
		body {
			font-size: 12px!important;
			color: #212121;
		}
		table {
			width: 100%;
			font-size: 12px;
			color: 212121;
		}
		tr, td {
			border: 1px solid #444;
			padding: 8px!important;
			vertical-align: middle;!important;
		}
		#lbr {
			font-size: 17px;
			font-weight: bold;
		}
		.isi_rks {
			height: 150px!important;
		}
		.tgh {
			text-align: center;
		}
		#right {
            border-right: none !important;
        }
        #left {
            border-left: none !important;
        }
        #bwh {
            border-top: none !important;
        }
		.header {
			text-align: center;
			margin: -.5rem 0;
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
		#lead {
			width: auto;
			position: relative;
			margin: 15px 0 0 75%;
		 }
		 .lead {
		 	font-weight: bold;
		 	text-decoration: underline;
		 	margin-bottom: -10px;
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
		<br>
		<table cellspacing="0" cellspacing="5" >
			<?php
				$id_disp=$_REQUEST['id'];
				$query	= "SELECT * FROM disposisi JOIN surat_masuk ON disposisi.id_surat = surat_masuk.id WHERE id_disp='$id_disp'";
				$sql    = mysqli_query($connect, $query);
				while ($data = mysqli_fetch_array($sql)) {
	
			?>
				<tr>
					<td class="tgh" ="tgh" id="lbr" colspan="5">LEMBAR DISPOSISI</td>
				</tr>
				<tr id="bwh">
					<td id="right" width="200">
                        <strong> Surat Dari :</strong><br>
                        </td>
					<td id="left" colspan="2"><?php echo IndonesiaTgl($data['asal_surat']); ?></td>
                    <td id="right"><strong>Diterima tgl :</strong></td>
                    <td id="left"><?php echo IndonesiaTgl($data['tanggal_terima']) ?></td>
				</tr>
                <tr id="bwh">
                    <td id="right" width="200"></td>
					<td id="left" colspan="2"></td>
                    <td id="right"><strong>No Agenda :</strong></td>
                    <td id="left"><?php echo $data['no_agenda'] ?></td>
				</tr>
				<tr id="bwh">
					<td id="right" width="200"><strong> Nomor Surat :</strong></td>
					<td id="left" colspan="2"><?php echo $data['no_surat']?></td>
                    <td id="right"><strong>Sifat</strong></td>
                    <td id="left"></strong><?php echo $data['sifat'] ?></strong></td>
				</tr>
				<tr>
					<td id="right" width="200"><strong> Tgl. Surat :</strong></td>
					<td id="left" colspan="2"><?php echo $data['tanggal_surat']?></td>
                    <td id="right"></td>
					<td id="left"></td>
				</tr>
				<tr>
					<td width="200"colspan="6"><strong> Perihal</strong><br>
                        <?php echo $data['isi_ringkas']?>
                    </td>
				</tr>
                <tr>
					<td width="200"colspan="6"><strong> Tujuan</strong><br>
                        <h2>
                        <?php
                            if ($data['tujuan'] == 'sekretaris') {
                                echo 'Sekretaris';
                            }elseif($data['tujuan'] == 'pdik') {
                                echo 'Bidang P.D & Informasi Kessos';
                            }elseif($data['tujuan'] == 'limjamsos') {
                                echo 'Bidang Limjamsos & P.K';
                            }elseif($data['tujuan'] == 'rehsos') {
                                echo 'Bidang Rehsos';
                            }elseif($data['tujuan'] == 'dayasos') {
                                echo 'Bidang Dayasos';
                            }
                        ?>
                        </h2>
                    </td>
				</tr>	

				<tr>
					<td width="200"colspan="6"><strong> Catatan</strong><br>
                        <h2>
                        <?php echo $data['catatan']?>
                        </h2>
                    </td>
				</tr>	
			<?php
				}
			?>			
		</table>
		<div id="lead">
			<!-- <p>Mengetahui,<br>
			Kepala Dinas Sosial</p>
			<div style="height: 50px"></div>
			<p class="lead">Nama</p>
			<p>NIP</p> -->
		</div>
	</div>	
	
	<script type="text/javascript">
		window.print();
	</script>