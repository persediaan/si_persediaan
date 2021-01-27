<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Laporan Produk Perhari</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th><th width="17%">Tanggal</th><th>Kode</th><th>Nama Produk </th><th  width="2%">Harga</th><th  width="2%">Stok Awal</th><th width="2%">Jumlah Masuk</th><th  width="2%">Jumlah BS</th><th  width="2%">Jumlah Keluar</th><th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_keluar";
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
                                    <td>
                                        <a href="report/keluar_satu.php?kode=<?= $data['kode'] ?>" target="_blank" class="btn btn-info btn-xs">
                                            <span class="fa fa-print"></span>
                                        </a>

                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="9">
                                    <a href="report/keluar_semua.php" target="_blank" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Semua Data

                                   
       
        </form>
    </div>
</div>
