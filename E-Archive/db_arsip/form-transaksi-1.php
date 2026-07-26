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
    <title>Tambah Data Transaksi</title>
  </head>

  <body>
    <div class="form-transaksi-1">
      <h1>TRANSAKSI BERITA ACARA (BA)</h1>

      <form action="" method="POST" class="form-item">
        <div class="kotak-kode-transaksi">KODE TRANSAKSI</div>
        <p><a class="titik-dua-1">:</a></p>
        <input type="text" name="kd_transaksi" class="kode-transaksi"></input>

        <div class="kotak-judul-transaksi">JUDUL</div>
        <p><a class="titik-dua-2">:</a></p>
        <input type="text" name="judul_transaksi" class="judul-transaksi"></input>

        <div class="kotak-tanggal-transaksi">TANGGAL</div>
        <p><a class="titik-dua-3">:</a></p>
        <input type="text" name="tgl_diterima" class="tanggal-transaksi"></input>

        <div class="kotak-teks-tgl">TANGGAL TEKS</div>
        <p><a class="titik-dua-4">:</a></p>
        <input type="text" name="tgl_huruf" class="teks-tgl" placeholder="Contoh: Senin Tanggal Delapan Belas bulan Maret tahun Dua Ribu Dua Puluh Empat"></input>

        <div class="kotak-jum-kardus">JUMLAH KARDUS</div>
        <p><a class="titik-dua-7">:</a></p>
        <input type="text" name="jumlah_kardus" class="jum-kardus"></input>

        <div class="kotak-penerima">PENERIMA</div>
        <p><a class="titik-dua-5">:</a></p>
        <select name="id_penerima" id="id_penerima" class="penerima">
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
        <p><a class="titik-dua-6">:</a></p>
        <select name="id_pengirim" id="id_pengirim" class="pengirim">
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
    $tgl_huruf = $_POST['tgl_huruf'];
    $id_penerima = $_POST['id_penerima'];
    $id_pengirim = $_POST['id_pengirim'];
    $jumlah_kardus = $_POST['jumlah_kardus'];

    mysqli_query($conn,"INSERT INTO tbl_transaksi VALUES('','$kd_transaksi','$judul_transaksi','$tgl_diterima','$tgl_huruf','$id_penerima','$id_pengirim','$jumlah_kardus')
    ") OR die(mysqli_error($conn));

?>

<script type="text/javascript">
alert("Data Berhasil Ditambahkan");
window.location='transaksi.php';
</script>

<?php
}  if(isset($_POST['batal'])){
?>

<script type="text/javascript">
alert("Tambah Data Dibatalkan");
window.location='transaksi.php';
</script>

<?php
}
?>