<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Buku</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_buku WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Perpustakaan Umum Kisaran </h2>
                        <h4>Jl. Cokro Aminoto No.30a, Kisaran Kota, <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA BUKU</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>ID</td> <td><?= $data['id'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Judul Buku</td> <td><?= $data['judul_buku'] ?></td>
                                </tr>
                                <tr>
                                    <td>Pengarang</td> <td><?= $data['pengarang'] ?></td>
                                </tr>
								<tr>
                                    <td>Penerbit</td> <td><?= $data['penerbit'] ?></td>
                                </tr>
								<tr>
                                    <td>Jenis Buku</td> <td><?= $data['jenis_buku'] ?></td>
                                </tr>
								<tr>
                                    <td>Keterangan</td> <td><?= $data['ket'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Perpus, S.Hum<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>