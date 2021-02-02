

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Pengajuan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">NIK</label>
                            <div class="col-sm-9">
								<input type="text" name="nik" class="form-control"  placeholder="Nomor Perkara" required >
                            </div>
                        </div>

						<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama </label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control"  placeholder="Nama Pengajuan" required>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-3">
                                <input type="text" name="alamat" class="form-control"  placeholder="Alamat" required> 
                            </div>
                        </div>

						 <div class="form-group">
                         <label for="foto" class="col-sm-3 control-label">Foto Pengajuan</label>
				<div class="col-sm-6">
					<input type="file" name="foto">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Pengajuan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pengajuan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pengajuan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nik=$_POST['nik'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
    $foto=$_POST['foto'];
    //buat sql
    $sql="INSERT INTO tbl_pengajuan VALUES ('','$nik','$nama','$alamat','$foto')";
	$query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Peminjaman Error");
	if ($query){
        echo "<script>window.location.assign('?page=pengajuan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
