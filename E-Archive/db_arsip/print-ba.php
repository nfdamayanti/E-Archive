<?php
 include "koneksi.php";
 $id = $_GET['id_transaksi'];
 $ambilData = mysqli_query($conn,  
"SELECT 
    t.id_transaksi,
    t.kd_transaksi,
    t.judul_transaksi,
    t.tgl_diterima,
    t.tgl_huruf,
    p1.nip AS nip_penerima,
    p1.nama_pegawai AS nama_penerima,
    p1.jabatan AS jabatan_penerima,
    p2.nip AS nip_pengirim,
    p2.nama_pegawai AS nama_pengirim,
    p2.jabatan AS jabatan_pengirim,
    t.jumlah_kardus
FROM 
    tbl_transaksi t
JOIN 
    tbl_pegawai p1 ON t.id_penerima = p1.id_pegawai
JOIN 
    tbl_pegawai p2 ON t.id_pengirim = p2.id_pegawai
 WHERE t.id_transaksi='$id'");
 $data = mysqli_fetch_array($ambilData);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Berita Acara</title>
    <link rel="stylesheet" href="./styles/print-ba.css"/>
</head>
<script>
function Export2Doc(element, filename = '') {

            var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
            var postHtml = "</body></html>";

            var html = preHtml + document.getElementById(element).innerHTML + postHtml;

            var blob = new Blob(['\ufeff', html], {
                type: 'application/msword'
            });

            var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);


            filename = filename ? filename + '.doc' : 'document.doc';


            var downloadLink = document.createElement("a");

            document.body.appendChild(downloadLink);

            if (navigator.msSaveOrOpenBlob) {
                navigator.msSaveOrOpenBlob(blob, filename);
            } else {

                downloadLink.href = url;
                downloadLink.download = filename;
                downloadLink.click();
            }

            document.body.removeChild(downloadLink);
        }

</script>

<body>
    <div id="exportContent">
        <div class="kop-surat">
            <ul>
                <li>
                    <img style="width: 70%; height: 70%; margin-top: 0.1%;" src="./assets/logo.jpeg">
                </li>
                <li>
                    <h3 style="text-align: Center; margin-top: 1%; margin-bottom: 1%;">PEMERINTAH   PROVINSI   JAWA  TIMUR</h3>
                    <h3 style="text-align: Center; margin-top: 1%; margin-bottom: 1%;">DINAS  PEKERJAAN  UMUM  BINA  MARGA</h3>   
                    <h3 style="text-align: Center; margin-top: 1%; margin-bottom: 1%;">Jl.  Gayung  Kebonsari  167 Telp.( 031 )  8290186,  8282690</h3>
                    <h3 style="text-align: Center; margin-top: 1%; margin-bottom: 1%; text-decoration: underline;">S U R A B A Y A – 60235</h3>
                </li>
            </ul> 
        </div>
        <h3 style="text-align: Center;">BERITA ACARA SERAH TERIMA ARSIP/BERKAS</h3>
        <div class="isi-surat">
            <ul>
                <li style="text-align: justify; line-height: 1.5;">
                    Pada hari ini <?php echo $data['tgl_huruf']?>, bertempat di Surabaya, kami yang bertanda tangan di bawah ini :<br>
                </li>
                <li style="margin-top: 5px; margin-left: 2.5%;">
                    1.	Nama <span style="margin-left: 9.5%"> : </span><?php echo $data['nama_pengirim'] ?><br>
                    <p style="margin-left: 17.5px; margin-top: 5px;"> NIP / NIK <span style="margin-left: 5%"> : </span><?php echo $data['nip_pengirim'] ?></p>
                    <p style="margin-left: 17.5px; margin-top: -12.5px;"> Jabatan <span style="margin-left: 7%"> : </spa><?php echo $data['jabatan_pengirim'] ?></p>
                    <p style="margin-left: -15px; margin-top: -10px; line-height: 1.5;">Selanjutnya disebut PIHAK PERTAMA bertindak untuk dan atas nama (...)</p>
                    2.	Nama <span style="margin-left: 9.5%"> : </span><?php echo $data['nama_penerima'] ?><br>
                    <p style="margin-left: 17.5px; margin-top: 2.5px;"> NIP / NIK <span style="margin-left: 5%"> : </span><?php echo $data['nip_penerima'] ?></p>
                    <p style="margin-left: 17.5px; margin-top: -12.5px;"> Jabatan <span style="margin-left: 7%"> : </span><?php echo $data['jabatan_penerima'] ?></p>
                </li>
                <li style="margin-left: 2.5%; line-height: 1.5;">
                    <p style="margin-left: -15px; margin-top: -10px; text-align: justify; line-height: 1.5;">Selanjutnya disebut PIHAK KEDUA bertindak untuk dan atas nama Tim Arsip Dinas PU Bina Marga Prov. Jatim, telah melaksanakan serah terima <?php echo $data['judul_transaksi'] ?>. Yang memiliki nilai guna dan kepentingan Dinas PU Bina Marga Prov. Jatim seperti yang tercantum dalam daftar terlampir untuk disimpan di Record Center Dinas PU Bina Marga Prov. Jatim.</p>
                </li>
            </ul>
            <p style="text-align: right; margin-bottom: -60px;">Surabaya, <?php echo $data['tgl_diterima'] ?></p>
        </div>
        <div class="ttd">
            <center>
                <ul>
                    <li style="text-align: center; margin-left: 2.5%;line-height: 1.5;">
                        PIHAK KEDUA<br>
                        <?php echo $data['jabatan_pengirim']?><br>
                            <br>
                            <br>
                            <br>
                            <br>
                        <span style="text-decoration: underline;"><?php echo $data['nama_pengirim'] ?></span><br>
                        <?php echo $data['nip_pengirim'] ?>
                    </li>
                    <li style="text-align: center; line-height: 1.5; white-space: normal;">
                        PIHAK PERTAMA<br>
                        <?php echo $data['jabatan_penerima']?><br>
                            <br>
                            <br>
                            <br>
                            <br>
                        <span style="text-decoration: underline;"><?php echo $data['nama_penerima'] ?></span><br>
                        <?php echo $data['nip_penerima'] ?>
                    </li>
                </ul>
            </center>
        </div>
    </div>
</body>
</html>