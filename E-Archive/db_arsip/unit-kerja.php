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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./styles/unit-kerja.css"/>
    <title>Halaman Unit Kerja</title>
  </head>

  <body>
    <div class="unitkerja">
      <div class="unitkerja-sidebar" style="justify-content: center; text-align: center">
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
              <div class="tombol-lingkaran-klik" style="justify-content: center;">
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
              <div class="tombol-lingkaran" style="justify-content: center; text-align: center">
                <img style="margin-top: 7.5px;" src="./assets/transaction1.png" width="55" height="55"/>
              </div>
              <h3 style="font-weight: 400; font-size: 20px;">Transaksi</h3>
            </a>
          </li>
        </ul>
      </div>
      <div class="kotak-unitkerja">
        <div class="tulisan">
          <ul>
            <li>
              <p><a href="beranda.php">Beranda</a></p>
            </li>
            <li>
              <p>></p>
            </li>
            <li>
              <p><a href="pegawai.php">Pegawai</a></p>
            </li>
            <li>
              <p>></p>
            </li>
            <li>
              <p><a href="unit-kerja.php">Unit Kerja</a></p>
            </li>
          </ul>
        </div>
        <div class="cari">
          <input style="height: 30px; width: 40%; margin: -40px 0px;" type="text" id="filter" placeholder="Cari Unit Kerja....."></input>
          <a href="form-uk.php">
            <button type="submit" style="text-decoration: none; color: black; margin: -50px 30px; height: 30px; border: none;">Tambah Data</button>
          </a> 
        </div>
          
          <?php
              require_once('koneksi.php');
              $query = "SELECT * FROM unit_kerja";
              $result = mysqli_query($conn,$query);
          ?>

          <table border="1">
            <tr>
            <td>No.</td>
            <td>Kode Unit Kerja</td>
            <td>Eselon 2</td>
            <td>Eselon 3</td>
            <td>Eselon 4</td>
            <td>Pengaturan</td>
            </tr>
            
            <?php

            $query = mysqli_query($conn, "SELECT * FROM unit_kerja");

            $no = 1;
            foreach ($query as $row) :
            ?>

            <tr>
              <td><?= $no++;['id_uk'] ?></td>
              <td><?= $row['kd_uk']; ?></td>
              <td><?= $row['eselon_2']; ?></td> 
              <td><?= $row['eselon_3']; ?></td>
              <td><?= $row['eselon_4']; ?></td>
              <td align="center"><a href="edit_unitkerja.php?id_uk=<?php echo $row['id_uk']; ?>"><img src="./assets/edit1.png" style="width: 40px;" onclick="return confirm('Yakin Ingin Mengedit Data?')"></a>
                  <a href="delete_unitkerja.php?id_uk=<?php echo $row['id_uk']; ?>"><img src="./assets/trash.png" style="width: 40px;" onclick="return confirm('Yakin Ingin Menghapus Data?')"></a></td>
            </tr>

            <?php endforeach; ?>
          </table>
      </div>
    </div>
    <script src="search.js"></script>
  </body>
</html>