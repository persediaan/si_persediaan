<?php
$nope=$_GET['nope'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE kode ='$nope'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Produk Hasil</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">

                        <div class="form-group">
                            <label for="kode_input" class="col-sm-3 control-label">Kode Input</label>
                               <div class="col-sm-2 col-xs-9">
                                <input type="text" name="kode_Input" class="form-control" id="inputEmail3" 
                                   placeholder="Inputkan Kode Input" required> 
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="text" name="tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal " required>
                            </div>
                        </div>

                            <div class="form-group">
                            <label for="kode" class="col-sm-3 control-label">Kode Produk</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode" class="form-control" id="inputEmail3" placeholder="Inputkan Kode Produk" required>
                            </div>
                            </div>
                            
                            <div class="form-group">
                            <label for="nama_produk" class="col-sm-3 control-label">Nama Produk</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_produk" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Produk" required>
                            </div>
                            </div>

                             <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" class="form-control" id="inputEmail3" placeholder="Inputkan Harga" required>
                            </div>
                            </div>
                             <div class="form-group">
                            <label for="stok_awal" class="col-sm-3 control-label">Stok Awal</label>
                            <div class="col-sm-9">
                                <input type="text" name="stok_awal" class="form-control" id="inputEmail3" placeholder="Inputkan Stok Awal" required>
                            </div>
                            </div>
                         <div class="form-group">
                            <label for="jumlah_masuk" class="col-sm-3 control-label">Jumlah Masuk </label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah Masuk" required>
                            </div>
                            </div>
                              <div class="form-group">
                            <label for="jumlah_bs" class="col-sm-3 control-label">Jumlah BS </label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_bs" class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah BS" required>
                            </div>
                            </div>
                              <div class="form-group">
                            <label for="jumlah_keluar" class="col-sm-3 control-label">Jumlah Keluar </label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_keluar" class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah Keluar" required>
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="stok_akhir" class="col-sm-3 control-label">Stok Akhir </label>
                            <div class="col-sm-9">
                                <input type="text" name="stok_akhir" class="form-control" id="inputEmail3" placeholder="Inputkan Stok Akhir" required>
                            </div>
                            </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=hasil&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Produk
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $kode_input=$_POST['kode_input'];
  $tanggal=$_POST['tanggal'];
  $kode=$_POST['kode'];
  $nama_produk=$_POST['nama_produk'];
  $harga=$_POST['harga'];
  $stok_awal=$_POST['stok_awal'];
  $jumlah_masuk=$_POST['jumlah_masuk'];
  $jumlah_bs=$_POST['jumlah_bs'];
  $jumlah_keluar=$_POST['jumlah_keluar'];
    $stok_akhir=$_POST['stok_akhir'];
    
    //buat sql
    $sql="INSERT INTO tbl_keluar VALUES ('$kode_input','$tanggal','$kode','$nama_produk','$harga,'$stok_awal','$jumlah_masuk','$jumlah_bs,'$jumlah_masuk','$stok_akhir')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Produk Hasil Error");
    if ($query){
        echo "<script>window.location.assign('?page=hasil&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
