<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Karyawan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Karyawan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Karyawan">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-3">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Masukkan Alamat">
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No Hp</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" class="form-control" id="inputEmail3" placeholder="Masukkan No Hp">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Karyawan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=karyawan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Karyawan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$no_hp=$_POST['no_hp'];
    //buat sql
    $sql="INSERT INTO karyawan VALUES ('','$nama','$alamat','$no_hp')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Peminjaman Error");
    if ($query){
        echo "<script>window.location.assign('?page=karyawan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
