<?php
	if ($_SESSION['level']== 'user') {
		echo '<script> 
				window.alert("Anda tidak memiliki hak akses ke halaman ini");
				window.location.href="./logout.php";
			  </script>';
	}
					
?>

	<!-- <div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Data Disposisi Semua Bidang</h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
						<div class="clearfix"><a href="cetak_semua.php" class="btn btn-success" title="Print" type="submit" target="_blank" name="cetak"><i class="fa fa-print"></i> Cetak Semua Data</a></div>
					</div>
					<div class="x_content">
						<table id="disposisi" class="table table-striped table-bordered table-hover">
							<thead>
								<tr style="font-size: 13px;">
									<th width="1" style="vertical-align: middle;">No</th>
									<th style="vertical-align: middle;"><center>No Surat</center></th>
									<th style="vertical-align: middle;"><center>Sifat, <br> Batas Waktu</center></th>
									<th style="vertical-align: middle;"><center>Catatan</center></th>
									<th style="vertical-align: middle;"><center>Tujuan</center></th>
									<th style="vertical-align: middle;"><center>Action</center></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php
										$no=1;
										$query2	= "SELECT * FROM disposisi JOIN surat_masuk ON disposisi.id_surat = surat_masuk.id";
										$sql2	= mysqli_query($connect, $query2);
										while ($row= mysqli_fetch_array($sql2)) {
									?>
									<td width="1" style="vertical-align: middle;"><?php echo $no++; ?></td>
									<td style="vertical-align: middle;"><?php echo $row['no_surat']; ?></td>
									<td style="vertical-align: middle;"><?php echo $row['sifat']?>, <br><?php echo IndonesiaTgl($row['batas_waktu']);?></td>
									<td style="vertical-align: middle;"><?php echo $row['catatan']; ?></td>
									<td style="vertical-align: middle;"><?php echo $row['tujuan']; ?></td>
									<td>
										<center>
                                        <a href="cetak_sekretaris.php?id=<?php echo $row['id_disp']; ?>" class="btn btn-success" title="Print" type="submit" target="_blank" name="cetak"><i class="fa fa-print"></i></a>
										</center>
									</td>
								</tr>
									<?php 
										}
									?>
							</tbody>
						</table>
					</div>	
				</div>
			</div>
		</div>
	</div> -->

	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Laporan Semua Disposisi</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Data Semua Disposisi</h2>
						<ul class="nav navbar-rigth panel_toolbox">
							<li><a class="colappse-link"></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<form class="form-horizontal form-label-left" method="post" action="cetak_semua.php" target="_blank">
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Dari Tanggal<span class="required">&nbsp; :</span></label>
								<div class="col-md-5 col-sm-5 col-xs-12">
									<input type="text" name="dari_tanggal" class="form-control has-feedback-left" id="tanggal">
									<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Sampai Tanggal<span class="required">&nbsp; :</span></label>
								<div class="col-md-5 col-sm-5 col-xs-12">
									<input type="text" name="sampai_tanggal" class="form-control has-feedback-left" id="tanggal2">
									<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div>
							<br/>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-3">
									<button type="submit" name="cetak" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Cetak</button>
									<a href="index.php?page=semua" class="btn btn-warning btn-sm"><i class="fa fa-refresh"></i> Refresh</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>