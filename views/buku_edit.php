<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_buku WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="judul_buku" class="col-sm-3 control-label">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul_buku" value="<?=$data['judul_buku']?>"class="form-control" id="inputEmail3" placeholder="Judul Buku">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="pengarang" class="col-sm-3 control-label">Pengarang</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengarang" value="<?=$data['pengarang']?>"class="form-control" id="inputEmail3" placeholder="Pengarang">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="penerbit" class="col-sm-3 control-label">Penerbit</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerbit" value="<?=$data['penerbit']?>"class="form-control" id="inputEmail3" placeholder="Penerbit">
                            </div>
                        </div>
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
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['ket']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Buku</button>
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
    $sql="UPDATE tbl_buku SET judul_buku='$judul_buku',pengarang='$pengarang',penerbit='$penerbit',jenis_buku='$jenis_buku',ket='$ket' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=buku&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



