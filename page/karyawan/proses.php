<?php
require '../../config/config.php';
require '../../config/koneksi.php';


if (isset($_POST['simpan'])) {
    $nik                = $_POST['NIK'];
    $nama               = $_POST['NAMA'];
    $tanggal_mulai      = $_POST['TANGGAL_MULAI'];
    $gaji_pokok         = $_POST['GAJI_POKOK'];
    $status_karyawan    = $_POST['STATUS_KARYAWAN'];
    $bagian_id          = $_POST['BAGIAN_ID'];

    $submit = $koneksi->query("INSERT INTO karyawan VALUES(
        '$nik',
        '$nama',
        '$tanggal_mulai',
        '$gaji_pokok',
        '$status_karyawan',
        '$bagian_id'
    )");

    if ($submit) {
        echo "<script>alert('Data Berhasil Ditambahkan !!');location.href='../karyawan';</script>";
    }else{
        echo "<script>alert('Data Gagal Ditambahkan !!');location.href='../karyawan/tambah';</script>";
    }
    
}else if (isset($_POST['edit'])) {
    $nik                = $_POST['NIK'];
    $nama               = $_POST['NAMA'];
    $tanggal_mulai      = $_POST['TANGGAL_MULAI'];
    $gaji_pokok         = $_POST['GAJI_POKOK'];
    $status_karyawan    = $_POST['STATUS_KARYAWAN'];
    $bagian_id          = $_POST['BAGIAN_ID'];

    $submit = $koneksi->query("UPDATE karyawan SET
        NIK = '$nik',
        NAMA = '$nama',
        TANGGAL_MULAI = '$tanggal_mulai',
        GAJI_POKOK = '$gaji_pokok',
        STATUS_KARYAWAN = '$status_karyawan',
        BAGIAN_ID = '$bagian_id'
        WHERE
        NIK = '$nik';
    ");

    if ($submit) {
        echo "<script>alert('Data Berhasil Diubah !!');location.href='../karyawan';</script>";
    }else{
        echo "<script>alert('Data Gagal Diubah !!');location.href='../karyawan/edit';</script>";
    }
    
}else if(isset ($_GET['id'])) {

    $delete = $koneksi->query("DELETE FROM karyawan WHERE NIK = '$_GET[id]'");
    if ($delete) {
        echo "<script>alert('Data Berhasil Dihapus !!');location.href='../karyawan';</script>";
    }else{
        echo "<script>alert('Data Gagal Dihapus !!');location.href='../karyawan/';</script>";
    }
}