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
    <link rel="stylesheet" href="./styles/transaksi.css"/>
    <title>Halaman Transaksi</title>
  </head>

  <body>
    <div class="transaksi">
      <div class="transaksi-sidebar" style="justify-content: center; text-align: center">
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
              <div class="tombol-lingkaran" style="justify-content: center;">
                <img style="margin-top: 7.5px;" src="./assets/files.png" width="55" height="55"/>
              </div>
              <h3 style="font-weight: 400; font-size: 20px;">Kardus</h3>
            </a>
          </li>
          <li>
            <a href="transaksi.php">
              <div class="tombol-lingkaran-klik" style="justify-content: center; text-align: center; margin-left: 10px">
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
      <div class="kotak-transaksi">
        <div class="tulisan">
          <ul>
            <li>
              <p><a href="beranda.php">Beranda</a></p>
            </li>
            <li>
              <p>></p>
            </li>
            <li>
              <p><a href="kardus.php">Transaksi</a></p>
            </li>
          </ul>
        </div>
        <div class="cari">
          <input style="height: 30px; width: 40%; margin: -40px 0px;" type="text" id="filter" placeholder="Cari Transaksi....."></input>
          <a href="form-transaksi-1.php">
            <button type="submit" style="text-decoration: none; color: black; margin: -50px 30px; height: 30px; border: none;">Tambah Data</button>
          </a> 
        </div>
            <?php
                require_once('koneksi.php');
                $query = "SELECT * FROM tbl_transaksi";
                $result = mysqli_query($conn,$query);
            ?>
            <table border="1">
                    <tr>
                    <td>No.</td>
                    <td>KODE TRANSAKSI</td>
                    <td>JUDUL TRANSAKSI</td>
                    <td>TANGGAL DITERIMA</td>
                    <td>PENERIMA</td>
                    <td>PENGIRIM</td>
                    <td>JUMLAH KARDUS</td>
                    <td>PENGATURAN</td>
                    </tr>
                    
                    <?php

                    $query = mysqli_query($conn, 
                    "SELECT 
                        t.id_transaksi,
                        t.kd_transaksi,
                        t.judul_transaksi,
                        t.tgl_diterima,
                        p1.nip AS nip_penerima,
                        p2.nip AS nip_pengirim,
                        p1.nama_pegawai AS nama_penerima,
                        p2.nama_pegawai AS nama_pengirim,
                        t.jumlah_kardus
                    FROM 
                        tbl_transaksi t
                    JOIN 
                        tbl_pegawai p1 ON t.id_penerima = p1.id_pegawai
                    JOIN 
                        tbl_pegawai p2 ON t.id_pengirim = p2.id_pegawai;");

                      if ($query) {
                        while ($row = $query->fetch_assoc()) {
                            $date = $row['tgl_diterima'];
                            $newFormat = date('d M Y', strtotime($date));
                        }
                      }

                    $no = 1;
                    foreach ($query as $row):
                    ?>

                    <tr>
                    <td><?= $no++;['id_transaksi'] ?></td>
                    <td><?= $row['kd_transaksi']; ?></td>
                    <td><?= $row['judul_transaksi']; ?></td> 
                    <td><?= $row['tgl_diterima']; ?></td>
                    <td><?= $row['nip_penerima']; ?> - <?= $row['nama_penerima']; ?></td> 
                    <td><?= $row['nip_pengirim']; ?> - <?= $row['nama_pengirim']; ?></td> 
                    <td><?= $row['jumlah_kardus']; ?></td> 
                    <td align="center"><a href="edit-transaksi.php?id_transaksi=<?php echo $row['id_transaksi']; ?>"><img src="./assets/edit1.png" style="width: 40px;" onclick="return confirm('Yakin Ingin Mengedit Data?')"></a>
                        <a href="delete-transaksi.php?id_transaksi=<?php echo $row['id_transaksi']; ?>"><img src="./assets/trash.png" style="width: 40px;" onclick="return confirm('Yakin Ingin Menghapus Data?')"></a>
                        <a href="print-ba.php?id_transaksi=<?php echo $row['id_transaksi']; ?>"><img src="./assets/print.png" style="width: 40px;" onclick="return confirm('Yakin Ingin Mencetak Data?')"></a></td>
                    </tr>

                    <?php endforeach; ?>

                    <?php

                    ?>
      </div>
    </div>
  </body>
</html>