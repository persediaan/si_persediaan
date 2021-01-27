<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Produk Terbaru</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_keluar WHERE kode ='" . $_GET ['kode'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">$kode_input</td> <td><?= $data['kode_input'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td> <td><?= $data['tanggal'] ?></td>
                        </tr>
                        <tr>
                            <td>Kode Produk</td> <td><?= $kode['kode'] ?></td>
                        </tr>
                         <tr>
                            <td>Nama Produk</td> <td><?= $nama_produk['nama_produk'] ?></td>
                        </tr>
                         <tr>
                            <td>Harga</td> <td><?= $data['harga'] ?></td>
                        </tr>
                         <tr>
                            <td>Stok Awal</td> <td><?= $stok_awal['stok_awal'] ?></td>
                        </tr>
                         <tr>
                            <td>Jumlah Masuk</td> <td><?= $jumlah_masuk['jumlah_masuk'] ?></td>
                        </tr>
                         <tr>
                            < <td>Jumlah BS</td> <td><?= $jumlah_bs['jumlah_bs'] ?></td>
                        </tr>
                         <tr>
                             <td>Jumlah Keluar</td> <td><?= $jumlah_keluar['jumlah_keluar'] ?></td>
                        </tr>
                        
                    </table>
                
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=keluar&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Produk</a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

