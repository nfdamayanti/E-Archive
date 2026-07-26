<?php
	include "koneksi.php";
	$id=$_GET['id_pegawai'];
	$hapus= mysqli_query ($conn, "DELETE FROM tbl_pegawai WHERE id_pegawai ='$id'");
	
	
	
	if($hapus){
		echo "<script> alert('Hapus Data Berhasil') </script>";
		echo "<meta http-equiv='refresh' content='1;url=data-pegawai.php'>";
		header ("refresh:0;data-pegawai.php");		
	}else{
        echo "<script>alert('Simpan Data Gagal') </script>";
		echo "<meta http-equiv='refresh' content='1;url=data-pegawai.php'>";
        header ("refresh:0;data-pegawai.php");		
	}
	
?>