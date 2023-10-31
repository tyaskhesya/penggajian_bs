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
<?php
$id = $_GET['id'];

$data = $koneksi->query("SELECT * FROM bagian WHERE ID = $id")->fetch_array();
?>
<body>
<h2 style="margin-top:20px; margin-bottom:20px; text-align: center;">Edit Data Karyawan</h2>


    <!--card-->
    <section class="container">
        <form action="proses" method="post">
        <div class="card">
       <div class="card-body" style="background-color: plum;">
            <div class="form group row">
                <div class="row mb-3">
                    <label class="col-2" style="color: black;">ID</label>
                    <div class="col-7">
                        <input name="ID" class="form-control" type="number" placeholder="Isikan ID." value="<?= $data['ID'] ?>">
                    </div>
                </div>
            </div>

          
            <div class="form group row">
                <div class="row mb-3">
                <label class="col-2" style="color: black;">Nama</label>
                    <div class="col-7">
                        <select class="form-control" name="NAMA" id="">
                            <option value="MARKETING" <?= $data['NAMA'] == 'MARKETING' ? "selected" :"" ?>>MARKETING</option>
                            <option value="HRD" <?= $data['NAMA'] == 'HRD' ? "selected" :"" ?>>HRD</option>
                            <option value="MANAGER" <?= $data['NAMA'] == 'MANAGER' ? "selected" :"" ?>>MANAGER</option>
                        </select>
                    </div>
                 </div>
            </div>
        <!---end input-->

        </div>
        </div>
        <div class="card-footer">
            <button type="submit" name="edit" class="btn btn-succsess">simpan</button>
        </div>
</from>
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