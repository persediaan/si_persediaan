<?php
$id=$_GET['kode'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE kode ='$kode'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Produk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                            <div class="form-group">
                            <label for="kode" value ="<?=$data[ 'kode']?>" class="col-sm-3 control-label">Kode</label>
                               <div class="col-sm-2 col-xs-9">
                                <input type="text" name="kode" class="form-control" id="inputEmail3" 
                                   placeholder="Inputkan Kode Produk" required> 
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
                    <a href="?page=produk&actions=tampil" class="btn btn-danger btn-sm">
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
    $kode=$_POST['kode'];
    $nama=$_POST['nama_produk'];
    $har=$_POST['harga'];
    //buat sql
    $sql="UPDATE tbl_produk SET kode='$kode',nama_produk='$nama',harga='$harga' WHERE kode ='$kode'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit data Error");
    if ($query){
        echo "<script>window.location.assign('?page=produk&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



