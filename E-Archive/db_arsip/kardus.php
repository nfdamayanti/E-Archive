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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./styles/kardus.css"/>
    <title>Halaman Kardus</title>
  </head>

  <body>
    <div class="kardus">
      <div class="kardus-sidebar" style="justify-content: center; text-align: center">
        <ul>
          <li>
            <img src="./assets/user2.png" width="70" height="70"/>
            <h3 style="font-family: DM Serif Display;">USER</h3>
          </li>
          <li>
            <a href="beranda.php">
              <div class="tombol-lingkaran" style="justify-content: center; text-align: center">  
                <img style="margin-top: 5px;" src="./assets/home1.png" width="55" height="55"/>
              </div>
              <h3 style="font-weight: 400; font-size: 20px;">Beranda</h3>
            </a>
          </li>
          <li>
            <a href="pegawai.php">
              <div class="tombol-lingkaran" style="justify-content: center;">
                <img style="margin-top: 10px;" src="./assets/division1.png" width="55" height="55"/>
              </div>
              <h3 style="font-weight: 400; font-size: 20px;">Pegawai</h3>
            </a>
          </li>
          <li>
            <a href="kardus.php">
              <div class="tombol-lingkaran-klik" style="justify-content: center;">
                <img style="margin-top: 7.5px;" src="./assets/files.png" width="55" height="55"/>
              </div>
              <h3 style="font-weight: 400; font-size: 20px;">Kardus</h3>
            </a>
          </li>
          <li>
            <a href="transaksi.php">
              <div class="tombol-lingkaran" style="justify-content: center; text-align: center; margin-left: 10px">
                <img style="margin-top: 7.5px;" src="./assets/transaction1.png" width="55" height="55"/>
              </div>
              <h3 style="font-weight: 400; font-size: 20px; margin-left: 5px">Transaksi</h3>
            </a>
          </li>
          <li>
            <a href="index.php">
            <button style="background: rgba(252, 9, 24, 0.7); border: 1px solid rgba(252, 9, 24, 0.7); border-radius: 10px; color: white; margin-top: 20px;" type="submit" name="logout" class="btn-logout">KELUAR</button>
            </a>
          </li>
        </ul>
      </div>
      <div class="kotak-kardus">
        <div class="tulisan">
          <ul>
            <li>
              <p><a href="beranda.php">Beranda</a></p>
            </li>
            <li>
              <p>></p>
            </li>
            <li>
              <p><a href="kardus.php">Kardus</a></p>
            </li>
          </ul>
        </div>
        <div class="cari">
          <input style="height: 30px; width: 40%; margin: -40px 0px;" type="text" id="filter" placeholder="Cari Kardus....."></input>
          <a href="form-kardus.php">
            <button type="submit" style="text-decoration: none; color: black; margin: -50px 30px; height: 30px; border: none;">Tambah Data</button>
          </a> 
        </div>
            <?php
                require_once('koneksi.php');
                $query = "SELECT * FROM tbl_kardus";
                $result = mysqli_query($conn,$query);
            ?>
                <table border="1">
                    <tr>
                    <td>No.</td>
                    <td>KODE KARDUS</td>
                    <td>JUDUL KARDUS</td>
                    <td>JUDUL TRANSAKSI</td>
                    <td>TANGGAL TRANSAKSI DIBUAT</td>
                    <td>KODE RAK</td>
                    <td>KETERANGAN RAK</td>
                    <td>BARIS RAK</td>
                    <td>KOLOM RAK</td>
                    <td>KODE SHAF</td>
                    <td>KETERANGAN SHAF</td>
                    <td>SUB TOTAL KARDUS</td>
                    <td>PENGATURAN</td>
                    </tr>
                    
                    <?php

                    $query = mysqli_query($conn, "SELECT k.id_kardus, k.kd_kardus, k.judul_kardus, t.judul_transaksi, t.tgl_diterima, r.kd_rak, r.keterangan, r.baris_ke, r.kolom_ke, s.kd_shaf, s.kt_shaf, k.sub_total_kardus FROM tbl_kardus k
                    INNER JOIN tbl_transaksi t ON k.id_transaksi = t.id_transaksi
                    INNER JOIN tbl_rak r ON k.id_rak = r.id_rak
                    INNER JOIN tbl_shaf s ON r.id_shaf = s.id_shaf");

                    $no = 1;
                    foreach ($query as $row) :
                    ?>

                    <tr>
                    <td><?= $no++;['id_kardus'] ?></td>
                    <td><?= $row['kd_kardus']; ?></td>
                    <td><?= $row['judul_kardus']; ?></td> 
                    <td><?= $row['judul_transaksi']; ?></td>
                    <td><?= $row['tgl_diterima']; ?></td>
                    <td><?= $row['kd_rak']; ?></td> 
                    <td><?= $row['keterangan']; ?></td> 
                    <td><?= $row['baris_ke']; ?></td> 
                    <td><?= $row['kolom_ke']; ?></td> 
                    <td><?= $row['kd_shaf']; ?></td> 
                    <td><?= $row['kt_shaf']; ?></td> 
                    <td><?= $row['sub_total_kardus']; ?></td>
                    <td align="center"><a href="edit-kardus.php?id_kardus=<?php echo $row['id_kardus']; ?>"><img src="./assets/edit1.png" style="width: 40px;" onclick="return confirm('Yakin Ingin Mengedit Data?')"></a>
                        <a href="delete-kardus.php?id_kardus=<?php echo $row['id_kardus']; ?>"><img src="./assets/trash.png" style="width: 40px;" onclick="return confirm('Yakin Ingin Menghapus Data?')"></a></td>
                    </tr>

                    <?php endforeach; ?>
      </div>
    </div>
  </body>     
</html>