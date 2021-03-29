<?php
if (empty($_POST['nama'])) { //  method post input type nama kosong
	header("location:kosong.php"); //browser akan meredirect pada halaman kosong.php
} else {
	echo "<center>Nama :".$_POST['nama']."</center><br>"; //Menampilkan  nilai dari method Post iinput type nama
}
?> 