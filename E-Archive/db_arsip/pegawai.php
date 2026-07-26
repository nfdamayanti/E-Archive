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
    <link rel="stylesheet" href="./styles/pegawai.css"/>
    <title>Halaman Pegawai</title>
  </head>

  <body>
    <div class="pegawai">
      <div class="pegawai-sidebar" style="justify-content: center; text-align: center">
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
      <div class="kotak-pegawai">
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
          </ul>
        </div>
        <div class="menu-lain">
          <ul>
            <li>
              <a href="unit-kerja.php">
              <div class="tombol-lingkaran-2" style="justify-content: center; text-align: center">  
                <img style="margin-top: 5px;" src="./assets/united1.png" width="70" height="70"/>
              </div>
              <h3 style="font-weight: 400; font-size: 20px;">Unit Kerja</h3>
              </a>
            </li>
            <li>
              <a href="data-pegawai.php">
                <div class="tombol-lingkaran-2" style="justify-content: center; text-align: center">  
                  <img style="margin-top: 10px;" src="./assets/division1.png" width="70" height="70"/>
                </div>
                <h3 style="font-weight: 400; font-size: 20px; margin-left: -10px">Data Pegawai</h3>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>