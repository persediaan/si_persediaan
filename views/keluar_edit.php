<?php
$id=$_GET['kode'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_keluar WHERE kode ='$kode'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Produk Terbaru</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                            <div class="form-group">
                            <label for="kode_input" value ="<?=$data[ 'kode_input']?>" class="col-sm-3 control-label">Kode Input</label>
                               <div class="col-sm-2 col-xs-9">
                                <input type="text" name="kode_input" class="form-control" id="inputEmail3" 
                                   placeholder="Inputkan Kode Input" required> 
                            </div>

                         <div class="form-group">
                            <label for="tanggal" value ="<?=$data[ 'tanggal']?>" class="col-sm-3 control-label">Tanggal</label>
                            < <div class="col-sm-2 col-xs-9">
                                <input type="text" name="tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal" required>
                            </div>

                         <div class="form-group">
                            <label for="kode" value ="<?=$data[ 'kode_produk']?>" class="col-sm-3 control-label">Kode Produk</label>
                            < <div class="col-sm-2 col-xs-9">
                                <input type="text" name="kode_produk" class="form-control" id="inputEmail3" placeholder="Inputkan Kode Produk" required>
                            </div>

                         <div class="form-group">
                            <label for="nama_produk" class="col-sm-3 control-label">Nama Produk</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_produk" value ="<?=$data[ 'nama_produk']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Produk" required>
                            </div>


                            <div class="form-group">
                            <label for="harga" value ="<?=$data[ 'harga']?>" class="col-sm-3 control-label">Harga</label>
                            < <div class="col-sm-2 col-xs-9">
                                <input type="text" name="harga" class="form-control" id="inputEmail3" placeholder="Inputkan Harga Produk" required>
                            </div>

                            <div class="form-group">
                            <label for="stok_awal" value ="<?=$data[ 'stok_awal']?>" class="col-sm-3 control-label">Stok Awal</label>
                            < <div class="col-sm-2 col-xs-9">
                                <input type="text" name="stok_awal" class="form-control" id="inputEmail3" placeholder="Inputkan Stok Awal" required>
                            </div>
                            <div class="form-group">
                            <label for="jumlah_masuk" value ="<?=$data[ 'jumlah_masuk']?>" class="col-sm-3 control-label">Jumlah Masuk</label>
                            < <div class="col-sm-2 col-xs-9">
                                <input type="text" name="jumlah_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah Masuk" required>
                            </div>
                            <div class="form-group">
                            <label for="jumlah_bs" value ="<?=$data[ 'jumlah_bs']?>" class="col-sm-3 control-label">Jumlah BS</label>
                            < <div class="col-sm-2 col-xs-9">
                                <input type="text" name="jumlah_bs" class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah BS" required>
                            </div>
                            <div class="form-group">
                            <label for="jumlah_keluar" value ="<?=$data[ 'jumlah_keluar']?>" class="col-sm-3 control-label">Jumlah Keluar</label>
                            < <div class="col-sm-2 col-xs-9">
                                <input type="text" name="jumlah_keluar" class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah Keluar" required>
                            </div>
                    
                    
                    
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                          
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data </button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=keluar&actions=tampil" class="btn btn-danger btn-sm">
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
    //buat sql
    $sql="UPDATE tbl_keluar SET kode_input='$kode_input',tanggal='$tanggal',kode='$kode',nama_produk='$nama_produk',harga='$harga',stok_awal='$stok_awal',jumlah_masuk='$jumlah_masuk',jumlah_bs='$jumlah_bs',jumlah_keluar='$jumlah_keluar',=WHERE kode ='$kode'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=keluar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



