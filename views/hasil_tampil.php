<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Produk Hasil </h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th width="5%">Kode Input</th>
                                <th width="15%">Tanggal</th>
                                <th width="5%">Kode Produk</th>
                                <th width="20%">Nama Produk</th>
                                <th width="5%">Stok Awal</th>
                                <th width="5%">Jumlah Masuk</th>
                                <th width="5">Jumlah Bs</th>
                                 <th width="5%">Jumlah Keluar</th>  
                                <th width="5%">Stok Akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php

                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_akhir";
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
                                    <td><?= $data['kode_input'] ?></td>
                                    <td><?= $data['tanggal'] ?></td>
                                    <td><?= $data['kode'] ?></td>
                                      <td><?= $data['nama_produk'] ?></td>
                                        <td><?= $data['harga'] ?></td>
                                          <td><?= $data['stok_awal'] ?></td>
                                            <td><?= $data['jumlah_masuk'] ?></td>
                                           <td><?= $data['jumlah_bs'] ?></td>
                                            <td><?= $data['jumlah_keluar'] ?></td>
                                             <td><?= $data['stok_akhir'] ?></td>
                                    <td>
                                        <a href="?page=hasil&actions=detail&kode=<?= $data['kode'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=hasil&actions=edit&kode=<?= $data['kode'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        
                                        <a href="?page=hasil&actions=delete&kode=<?= $data['kode'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=hasil&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Data

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

