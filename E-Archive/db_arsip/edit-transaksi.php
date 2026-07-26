<?php
 include "koneksi.php";
 $id = $_GET['id_transaksi'];
 $ambilData = mysqli_query($conn,"SELECT * FROM tbl_transaksi WHERE id_transaksi='$id'");
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
    <link rel="stylesheet" href="./styles/form-transaksi-1.css"/>
    <title>Edit Data Transaksi</title>
  </head>

  <body>
    <div class="form-transaksi-1">
      <h1>EDIT TRANSAKSI BERITA ACARA (BA)</h1>

      <form action="" method="POST" class="form-item">
        <div class="kotak-kode-transaksi">KODE TRANSAKSI</div>
        <p><a class="titik-dua-1">:</a></p>
        <input type="text" name="kd_transaksi" class="kode-transaksi" value="<?php echo $data['kd_transaksi'] ?>"></input>

        <div class="kotak-judul-transaksi">JUDUL</div>
        <p><a class="titik-dua-2">:</a></p>
        <input type="text" name="judul_transaksi" class="judul-transaksi" value="<?php echo $data['judul_transaksi'] ?>"></input>

        <div class="kotak-tanggal-transaksi">TANGGAL</div>
        <p><a class="titik-dua-3">:</a></p>
        <input type="date" name="tgl_diterima" class="tanggal-transaksi" value="<?php echo $data['tgl_diterima'] ?>"></input>

        <div class="kotak-jum-kardus">JUMLAH KARDUS</div>
        <p><a class="titik-dua-6">:</a></p>
        <input type="text" name="jumlah_kardus" class="jum-kardus" value="<?php echo $data['jumlah_kardus'] ?>"></input>

        <div class="kotak-penerima">PENERIMA</div>
        <p><a class="titik-dua-4">:</a></p>
        <select name="id_pegawai" id="id_pegawai" class="penerima">
            <option>Pilih Pegawai</option>
                <?php
                  include "koneksi.php";
                  $query = mysqli_query($conn,"SELECT * FROM tbl_pegawai") or die (mysqli_error($conn));
                  while($data = mysqli_fetch_array($query)){
                  echo "<option value=$data[id_pegawai]> $data[nip] - $data[nama_pegawai]</option>";
                  }
                ?>
              </select>

        <div class="kotak-pengirim">PENGIRIM</div>
        <p><a class="titik-dua-5">:</a></p>
        <select name="id_pegawai" id="id_pegawai" class="pengirim">
            <option>Pilih Pegawai</option>
                <?php
                  include "koneksi.php";
                  $query = mysqli_query($conn,"SELECT * FROM tbl_pegawai") or die (mysqli_error($conn));
                  while($data = mysqli_fetch_array($query)){
                  echo "<option value=$data[id_pegawai]> $data[nip] - $data[nama_pegawai]</option>";
                  }
                ?>
              </select>

        <a href="transaksi.php">
          <button type="submit" name="simpan" class="btn-simpan">SIMPAN</button>
        </a>
        
        <a href="transaksi.php">
          <button type="submit" name="batal" class="btn-batal">BATAL</button>
        </a>
      </form>
    </div>
  </body>
</html>

<?php
if(isset($_POST['simpan'])){

    $kd_transaksi = $_POST['kd_transaksi'];
    $judul_transaksi = $_POST['judul_transaksi'];
    $tgl_diterima = $_POST['tgl_diterima'];
    $id_pegawai = $_POST['id_pegawai'];
    $jumlah_kardus = $_POST['jumlah_kardus'];

    mysqli_query($conn,"UPDATE tbl_transaksi 
    SET kd_transaksi='$kd_transaksi',judul_transaksi='$judul_transaksi',tgl_diterima='$tgl_diterima',id_pegawai='$id_pegawai',jumlah_kardus='$jumlah_kardus'
    WHERE id_transaksi='$id'
    ") OR die(mysqli_error($conn));

?>

<script type="text/javascript">
alert("Data Berhasil Diedit");
window.location='transaksi.php';
</script>

<?php
}  if(isset($_POST['batal'])){
?>

<script type="text/javascript">
alert("Data Gagal Diedit");
window.location='transaksi.php';
</script>

<?php
}
?>