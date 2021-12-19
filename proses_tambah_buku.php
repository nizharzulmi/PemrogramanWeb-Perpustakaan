<?php
	if($_POST){
		$judul_buku = $_POST['judul_buku'];
		$pengarang = $_POST['pengarang'];
		if(empty($judul_buku)){
			echo "<script>alert('Judul Buku Tidak Boleh Kosong');location.href='tambah_buku.php';</script>";
		}
	elseif (empty($pengarang)){
		echo "<script>alert('Pengarang Tidak Boleh Kosong');location.href='tambah_buku.php';</script>";		
	}
	else {
		include "koneksi.php";
		$insert = mysqli_query($conn, "insert into buku (judul_buku, pengarang) value ('".$judul_buku."','".$pengarang."')");
		if($insert){
			echo "<script>alert('sukses menambahkan data buku');location.href='buku.php';</script>";
		}
		else {
			echo "<script>alert('gagal menambahkan data buku');location.href='tambah_buku.php';</script>";
		}
	}
	}
?>