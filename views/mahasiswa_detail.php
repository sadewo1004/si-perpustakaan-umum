<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Calon Mahasiswa</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail penduduk-->
                    <?php
                    $sql = "SELECT *FROM tbl_dcm WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">NIK</td> <td><?= $data['nik'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>L/P</td> <td><?= $data['jk'] ?></td>
                        </tr>
						<tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>No. Telp</td> <td><?= $data['no_telp'] ?></td>
                        </tr>
                       
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=mahasiswa&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Calon Mahasiswa </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

