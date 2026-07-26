<?php
 include "koneksi.php";
 $id = $_GET['id_pegawai'];
 $ambilData = mysqli_query($conn,"SELECT * FROM tbl_pegawai WHERE id_pegawai='$id'");
 $data = mysqli_fetch_array($ambilData);
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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login2.css" media="screen" title="no title">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./styles/form-dtpegawai.css"/>
    <title>Edit Data Pegawai</title>
  </head>

  <body>
      <div class="dtpegawai">
      <h1>EDIT DATA PEGAWAI</h1>

      <div class="kotak-nip">NIP</div>
      <p><a class="titik-dua-1">:</a></p>
      <input type="text" name="nip" value="<?php echo $data['nip'] ?>" class="nip-pegawai"></input>

      <div class="kotak-nama">NAMA</div>
      <p><a class="titik-dua-2">:</a></p>
      <input type="text" name="nama_pegawai" value="<?php echo $data['nama_pegawai'] ?>" class="nama-pegawai"></input>

      <div class="kotak-unit-kerja">UNIT KERJA</div>
        <p><a class="titik-dua-3">:</a></p>
        <select name="id_uk" class="unit-kerja-pegawai">
          <option>Pilih Bidang</option>
              <?php
                include "koneksi.php";
                $query = mysqli_query($conn,"SELECT * FROM unit_kerja") or die (mysqli_error($conn));
                while($data = mysqli_fetch_array($query)){
                echo "<option value=$data[id_uk]> $data[kd_uk] - $data[eselon_3] - $data[eselon_4]</option>";
                }
              ?>
            </select>

      <div class="kotak-status">STATUS</div>
      <p><a class="titik-dua-4">:</a></p>
      <select name="status_pegawai" id="status" value="<?php echo $data['status_pegawai'] ?>" class="status-pegawai">
        <option value="Aktif">Aktif</option>
        <option value="Tidak Aktif">Tidak Aktif</option>
      </select>

      <div class="kotak-jabatan">JABATAN</div>
      <p><a class="titik-dua-5">:</a></p>
      <input type="text" name="jabatan" value="<?php echo $data['jabatan'] ?>" class="jabatan"></input>

      <div class="kotak-skpd">SKPD</div>
      <p><a class="titik-dua-6">:</a></p>
      <input type="text" name="skpd" value="<?php echo $data['skpd'] ?>" class="skpd-pegawai"></input>

      <a href="data-pegawai.php">
        <button type="submit" name="simpan" class="btn-simpan">SIMPAN</button>
      </a>

      <a href="data-pegawai.php">
        <button type="submit" name="batal" class="btn-batal">BATAL</button>
      </a>

    </div>
  </body>
</html>


<?php
if(isset($_POST['simpan'])){
    $nip = $_POST['nip'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $id_uk = $_POST['id_uk'];
    $status_pegawai = $_POST['status_pegawai'];
    $jabatan = $_POST['jabatan'];
    $skpd = $_POST['skpd'];

    mysqli_query($conn,"UPDATE tbl_pegawai 
    SET nip='$nip',nama_pegawai='$nama_pegawai',id_uk='$id_uk',status_pegawai='$status_pegawai',jabatan='$jabatan',skpd='$skpd'
    WHERE id_pegawai='$id'
    ") OR die(mysqli_error($conn));
?>
<script type="text/javascript">
alert("Data Berhasil Diedit");
window.location='data-pegawai.php';
</script>

<?php
}  if(isset($_POST['batal'])){
?>

<script type="text/javascript">
alert("Data Gagal Diedit");
window.location='data-pegawai.php';
</script>

<?php
}
?>