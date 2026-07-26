<?php
	include "koneksi.php";
	$id=$_GET['id_transaksi'];
	$hapus= mysqli_query ($conn, "DELETE FROM tbl_transaksi WHERE id_transaksi ='$id'");
	
	
	
	if($hapus){
		echo "<script> alert('Hapus Data Berhasil') </script>";
		echo "<meta http-equiv='refresh' content='1;url=transaksi.php'>";
		header ("refresh:0;transaksi.php");		
	}else{
        echo "<script>alert('Simpan Data Gagal') </script>";
		echo "<meta http-equiv='refresh' content='1;url=transaksi.php'>";
        header ("refresh:0;transaksi.php");		
	}
	
?>