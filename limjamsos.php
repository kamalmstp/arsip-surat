<?php
	if ($_SESSION['level']== 'user') {
		echo '<script> 
				window.alert("Anda tidak memiliki hak akses ke halaman ini");
				window.location.href="./logout.php";
			  </script>';
	}
					
?>

	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Data Disposisi Limmjamsos & P.K</h3>
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
						<div class="clearfix"></div>
					</div>
						<div class="bs-example-popovers">
							<div class="alert alert-success alert-dismissible fade-in" role="alert">
								<h2><strong>Limjamsos & P.K</strong></h2><br>
							</div>
						</div>
					<div class="x_content">
						<table id="disposisi" class="table table-striped table-bordered table-hover">
							<thead>
								<tr style="font-size: 13px;">
									<th width="1" style="vertical-align: middle;">No</th>
									<th style="vertical-align: middle;"><center>No Surat</center></th>
									<th style="vertical-align: middle;"><center>Isi Disposisi</center></th>
									<th style="vertical-align: middle;"><center>Sifat, <br> Batas Waktu</center></th>
									<th style="vertical-align: middle;"><center>Action</center></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php
										$no=1;
										$query2	= "SELECT * FROM disposisi JOIN surat_masuk ON disposisi.id_surat = surat_masuk.id where tujuan = 'limjamsos'";
										$sql2	= mysqli_query($connect, $query2);
										while ($row= mysqli_fetch_array($sql2)) {
									?>
									<td width="1" style="vertical-align: middle;"><?php echo $no++; ?></td>
									<td style="vertical-align: middle;"><?php echo $row['no_surat']; ?></td>
									<td style="vertical-align: middle;"><?php echo $row['isi_disposisi']; ?></td>
									<td style="vertical-align: middle;"><?php echo $row['sifat']?>, <br><?php echo IndonesiaTgl($row['batas_waktu']);?></td>
									<td>
										<center>
                                        <a href="cetak_limjamsos.php?id=<?php echo $row['id_disp']; ?>" class="btn btn-success" title="Print" type="submit" target="_blank" name="cetak"><i class="fa fa-print"></i></a>
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
	</div>