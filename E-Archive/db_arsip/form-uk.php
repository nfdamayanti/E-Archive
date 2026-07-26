<?php
    require_once('koneksi.php');
    $query = "SELECT * FROM unit_kerja";
    $result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Krub%3A700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lilita+One%3A400"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login2.css" media="screen" title="no title">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./styles/form-uk.css"/>
    <title>Tambah Data Unit Kerja</title>
  </head>

  <body>
    <div class="form-dt-uk">
      <h1>DATA UNIT KERJA PEGAWAI</h1>

      <form action="" method="POST" class="form-item">
        <div class="kotak-id-uk">KODE</div>
        <p><a class="titik-dua-1">:</a></p>
        <input type="text" name="kd_uk" class="id-uk"></input>

        <div class="kotak-eselon-2">ESELON II</div>
        <p><a class="titik-dua-2">:</a></p>
        <input type="text" name="eselon_2" class="eselon-2"></input>

        <div class="kotak-eselon-3">ESELON III</div>
        <p><a class="titik-dua-3">:</a></p>
        <input type="text" name="eselon_3" class="eselon-3"></input>

        <div class="kotak-eselon-4">ESELON IV</div>
        <p><a class="titik-dua-4">:</a></p>
        <input type="text" name="eselon_4" class="eselon-4"></input>

        <a href="unit-kerja.php">
          <button type="submit" name="simpan" class="btn-simpan">SIMPAN</button>
        </a>
        <a href="unit-kerja.php">
          <button type="submit" name="batal" class="btn-batal">BATAL</button>
        </a>
      </form>
    </div>
  </body>
</html>

<?php
if(isset($_POST['simpan'])){
  $id_uk = $_POST['id_uk'];    
  $kd_uk = $_POST['kd_uk'];
  $eselon_2 = $_POST['eselon_2'];
  $eselon_3 = $_POST['eselon_3'];
  $eselon_4 = $_POST['eselon_4'];

    mysqli_query($conn,"INSERT INTO unit_kerja VALUES('','$kd_uk','$eselon_2','$eselon_3','$eselon_4')") OR die(mysqli_error($conn));

?>

<script type="text/javascript">
alert("Data Berhasil Ditambahkan");
window.location='unit-kerja.php';
</script>

<?php
}  if(isset($_POST['batal'])){
?>

<script type="text/javascript">
alert("Tambah Data Dibatalkan");
window.location='unit-kerja.php';
</script>

<?php
}
?>