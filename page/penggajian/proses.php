<?php
require '../../config/config.php';
require '../../config/koneksi.php';


if (isset($_POST['simpan'])) {
    $id             = $_POST['ID'];
    $karyawan_nik   = $_POST['KARYAWAN_NIK'];
    $tahun          = $_POST['TAHUN'];
    $bulan          = $_POST['BULAN'];
    $gaji_bayar     = $_POST['GAJI_BAYAR'];

    $submit = $koneksi->query("INSERT INTO penggajian VALUES(
        '$id',
        '$karyawan_nik',
        '$tahun',
        '$bulan',
        '$gaji_bayar'
    )");

    if ($submit) {
        echo "<script>alert('Data Berhasil Ditambahkan !!');location.href='../penggajian';</script>";
    }else{
        echo "<script>alert('Data Gagal Ditambahkan !!');location.href='../penggajian/tambah';</script>";
    }
    
}else if (isset($_POST['edit'])) {
    $id             = $_POST['ID'];
    $karyawan_nik   = $_POST['KARYAWAN_NIK'];
    $tahun          = $_POST['TAHUN'];
    $bulan          = $_POST['BULAN'];
    $gaji_bayar     = $_POST['GAJI_BAYAR'];

    $submit = $koneksi->query("UPDATE penggajian SET
        ID              = '$id',
        KARYAWAN_NIK    = '$karyawan_nik',
        TAHUN           = '$tahun',
        BULAN           = '$bulan',
        GAJI_BAYAR      = '$gaji_bayar'
        WHERE
        ID              = '$id';
    ");

    if ($submit) {
        echo "<script>alert('Data Berhasil Diubah !!');location.href='../penggajian';</script>";
    }else{
        echo "<script>alert('Data Gagal Diubah !!');location.href='../penggajian/edit';</script>";
    }
    
}else if(isset ($_GET['id'])) {

    $delete = $koneksi->query("DELETE FROM penggajian WHERE ID = '$_GET[id]'");
    if ($delete) {
        echo "<script>alert('Data Berhasil Dihapus !!');location.href='../penggajian';</script>";
    }else{
        echo "<script>alert('Data Gagal Dihapus !!');location.href='../penggajian/';</script>";
    }
}