<?php
	include "koneksi.php";
	$id=$_GET['id_kardus'];
	$hapus= mysqli_query ($conn, "DELETE FROM tbl_kardus WHERE id_kardus ='$id'");
	
	
	
	if($hapus){
		echo "<script> alert('Hapus Data Berhasil') </script>";
		echo "<meta http-equiv='refresh' content='1;url=kardus.php'>";
		header ("refresh:0;kardus.php");		
	}else{
        echo "<script>alert('Simpan Data Gagal') </script>";
		echo "<meta http-equiv='refresh' content='1;url=kardus.php'>";
        header ("refresh:0;kardus.php");		
	}
	
?>