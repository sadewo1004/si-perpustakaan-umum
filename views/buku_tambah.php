<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
						 <div class="form-group">
                            <label for="judul_buku" class="col-sm-3 control-label">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul_buku" class="form-control" id="inputEmail3" placeholder="Inputkan Judul Buku" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="pengarang" class="col-sm-3 control-label">Pengarang</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengarang" class="form-control" id="inputEmail3" placeholder="Inputkan Pengarang Buku" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="penerbit" class="col-sm-3 control-label">Penerbit</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerbit" class="form-control" id="inputEmail3" placeholder="Inputkan Penerbit" required>
                            </div>
                        </div>
						
                        <!--Status-->

                        <div class="form-group">
                            <label for="jenis_buku" class="col-sm-3 control-label">Jenis Buku</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="jenis_buku" class="form-control">
									<option value="Umum">Umum</option>
									<option value="Pelajaran">Pelajaran</option>
                                    <option value="Novel">Novel</option>
                                    <option value="Dongeng">Dongeng</option>
                                    <option value="Majalah">majalah</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->

						<div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Arsip</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=buku&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Buku
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $judul_buku=$_POST['judul_buku'];
	$pengarang=$_POST['pengarang'];
	$penerbit=$_POST['penerbit'];
	$jenis_buku=$_POST['jenis_buku'];
    $ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO tbl_buku VALUES ('','$judul_buku','$pengarang','$penerbit','$jenis_buku','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=buku&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
