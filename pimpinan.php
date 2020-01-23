<?php
		if ($_SESSION['level']== 'user') {
			echo '<script> 
					window.alert("Anda tidak memiliki hak akses ke halaman ini");
					window.location.href="./logout.php";
				 </script>';
        }
        
        if (isset($_REQUEST['edit'])) {
			$id 	= $_POST['id'];
			$nama	= $_POST['nama'];
			$nip    = $_POST['nip'];

            $query2 = "UPDATE instansi SET nama_kepala='$nama', nip='$nip' WHERE id='$id'";
            $sql2   = mysqli_query($connect, $query2);

            if ($sql2) {
                echo '<script>
                        window.alert("Data berhasil di ubah");
                        window.location.href="./index.php?page=pimpinan";
                        </script>';
            }else{
                echo '<script>
                        window.alert("Data gagal di ubah");
                        </script>';
            }
		}
	?>

	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Data Pimpinan</h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
					</div>
					<div class="x_content">
						<!-- Form tambah user -->
						<form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                            <?php 
                                $query  = "SELECT * FROM instansi";
                                $sql    = mysqli_query($connect, $query);
                                
                                while ($row = mysqli_fetch_array($sql)) {
                            ?>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pimpinan<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
									<input type="text" name="nama" class="form-control col-md-7 col-xs-12" value="<?php echo $row['nama_kepala']; ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">NIP<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="nip" class="form-control col-md-7 col-xs-12" value="<?php echo $row['nip']; ?>">
								</div>
							</div>
							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-3">
									<input type="submit" class="btn btn-success" name="edit" value="Perbarui">
								</div>
							</div>

                            <?php
                                }
                            ?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>