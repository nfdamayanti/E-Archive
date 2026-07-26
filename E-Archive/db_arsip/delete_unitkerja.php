<?php
	include "koneksi.php";
	$id=$_GET['id_uk'];
	$hapus= mysqli_query ($conn, "DELETE FROM unit_kerja WHERE id_uk ='$id'");
	
	
	
	if($hapus){
		echo "<script> alert('Hapus Data Berhasil') </script>";
		echo "<meta http-equiv='refresh' content='1;url=unit-kerja.php'>";
		header ("refresh:0;unit-kerja.php");		
	}else{
        echo "<script>alert('Simpan Data Gagal') </script>";
		echo "<meta http-equiv='refresh' content='1;url=unit-kerja.php'>";
        header ("refresh:0;unit-kerja.php");		
	}
	
?>