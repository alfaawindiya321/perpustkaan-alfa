<?php
//Proses insert data
if (isset($_POST['save'])) {
$nis        = $_POST['nis'];
$nama       = $_POST['nama'];
$jenis_kelamin         = $_POST['jenis_kelamin'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$kelas      = $_POST['kelas'];
$jurusan    = $_POST['jurusan'];
$no_telp        = $_POST['no_telp'];
$alamat     = $_POST['alamat'];
$query_insert = mysqli_query($konek,"INSERT INTO anggota 
VALUES('','$nis','$nama','$jenis_kelamin','$tanggal_lahir','$kelas','$jurusan','$no_telp','$alamat')");
    if($query_insert)
    {
        ?> 
            <div class="alert alert-success">
                Data Berhasil Disimpan
            </div>
        <?php
        header('refresh:3; URL=http://localhost/perpustakaan/dashboard.php?page=anggota');
    }
    else
    {
        ?>
            <div class="alert alert-danger">
                Data GAGAL Disimpan !!!!!!!!!
            </div>
        <?php
    }
}
//// End of proses insert /////////////////////////////////////////////////////////
?>