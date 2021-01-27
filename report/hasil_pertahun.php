<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Produk Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                         <h2>Sistem Informasi Persediaan Zakia Cake & Bakery </h2>
                        <h4>Jalankedai ledang no.042, Kisaran, Sendang Sari, Kisaran Barat<br>
                              Kabupaten Asahan, Sumatera Utara, Kode Pos : 21211</h4>
                        <hr>
                        <h3>DATA ARSIP TAHUN   <? echo "$ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<tr>
									<th>No.</th><th width="18%">Tanggal</th><th>Kode Produk</th><th width="14%"><th>Nama Produk</th><th>Harga</th><th>Stok Awal</th><th>Jumlah Masuk</th><th>Jumlah BS</th><th>Jumlah Keluar</th></th><th>Stok Akhir</th><</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_akhir WHERE substr(tanggal,1,4)='$ambilthn'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    
									 <td><?= $nomor ?></td>
                                    <td><?= $data['tanggal'] ?></td>
                                    <td><?= $data['kode'] ?></td>
                                    <td><?= $data['nama_produk'] ?></td>
                                     <td><?= $data['harga'] ?></td>
                                      <td><?= $data['stok_awal'] ?></td>
                                       <td><?= $data['jumlah_masuk'] ?></td>
                                       <td><?= $data['jumlah_bs'] ?></td>
                                       <td><?= $data['jumlah_keluar'] ?></td>
                                       <td><?= $data['stok_akhir'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                        Kisaran,  &nbsp <?= date("d-m-Y") ?>
                                         Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>ADMIN<strong></u><br>
                                        NIP.11416712
									             </td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
