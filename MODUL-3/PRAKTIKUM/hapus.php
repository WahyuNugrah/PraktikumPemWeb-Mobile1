<?php 
require 'functions.php';

$id = $_GET["id"];

if(hapus($id) > 0 ){
	//cek keberhasilan Delete
		echo "
			<script>
				alert('data berhasil dihapus');
				document.location.href = 'index.php';
			</script>";
	}else{
		echo "
			<script>
				alert('data Gagal dihapus');
				document.location.href = 'index.php';
			</script>";
}

 ?>