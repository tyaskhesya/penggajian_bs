<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>
<!doctype html>
<html lang="en">

<?php
include '../../templates/head.php';
?>
        
<?php
include '../../templates/navbar.php';
?>

<!-- End Navbar -->

<body>
    <h2 style="margin-top:20px; margin-bottom:20px; text-align: center;">Karyawan</h2>


    <!--card-->
    <section class="container">
        <div class="card">
            <div class="card-header">
            <a href="tambah" class="btn bg-primary" style="margin-left:10px; color:white;">Tambah</a>
</div>
       <div class="card-body">
       <table class="table" id="example"> 
        <thead style="background-color: plum;">
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Mulai</th>
      <th scope="col">Gaji Pokok</th>
      <th scope="col">Status Karyawan</th>
      <th scope="col">Bagian</th>
      <th scope="col">Opsi</th>

</div>
</td>
    </tr>
  </thead>
  <tbody>
    <?php
    $no =1;
    $karyawan = $koneksi->query("select * from karyawan order by nik desc");
    while ($data = $karyawan->fetch_array()){
    ?>
    <tr>
        <td><?= $no++?></td>
        <td><?= $data['NIK'] ?></td>
        <td><?= $data['NAMA'] ?></td>
        <td><?= $data['TANGGAL_MULAI'] ?></td>
        <td><?= $data['GAJI_POKOK'] ?></td>
        <td><?= $data['STATUS_KARYAWAN'] ?></td>
        <td><?= $data['BAGIAN_ID'] ?></td>
        <td>
      <a href="edit?id=<?= $data['NIK'] ?>" class="btn bg-success" style="color:white;">Edit</a>
      <a href="proses?id=<?= $data['NIK'] ?>" class="btn bg-danger" style="color:white;">Hapus</a>
      </td>
    </tr>
    <?php }?>
    </tbody>
</table>
        </div>
    </section>
    <!--End card-->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <?php
include '../../templates/script.php';
?>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>

<script>
    new DataTable('#example');
    </script>