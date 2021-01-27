<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Produk</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_akhir WHERE id='" . $_GET ['kode'] . "'";
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
                        <h2>Sistem Informasi Persediaan Zakia Cake & Bakery </h2>
                        <h4>Jalankedai ledang no.042, Kisaran, Sendang Sari, Kisaran Barat<br>
                              Kabupaten Asahan, Sumatera Utara, Kode Pos : 21211</h4>
                        <hr>
                        <h3>DATA PRODUK TERBARU</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
                                <tr>
                                    <td>Tanggal</td> <td><?= $data['tanggal'] ?></td>
                                </tr>
                                <tr>
                                   
                                    <td>Kode Produk</td> <td><?= $data['kode'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Nama Produk</td> <td><?= $data['nama_produk'] ?></td>
                                </tr>
                                <tr>
                                   
                                    <td>Harga</td> <td><?= $data['harga'] ?></td>
                                </tr>
                                <tr>
                                   
                                    <td>Stok Awal</td> <td><?= $data['stok_awal'] ?></td>
                                </tr>
                                <tr>
                                   
                                    <td>Jumlah Masuk</td> <td><?= $data['jumlah_masuk'] ?></td>
                                </tr>
                                 <tr>
                                   
                                    <td>Jumlah BS</td> <td><?= $data['jumlah_bs'] ?></td>
                                </tr>
                                 <tr>
                                   
                                    <td>Jumlah Keluar</td> <td><?= $data['jumlah_keluar'] ?></td>
                                </tr>

                                <tr>
                                   
                                    <td>Stok Akhir</td> <td><?= $data['stok_akhir'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
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