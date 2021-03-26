<?php
if($_POST['go']){
	mysql_connect("localhost", "root", "root");
	mysql_select_db("tutorial");
 
	$nama	= htmlentities(mysql_real_escape_string($_POST['nama']));
	$email	= htmlentities(mysql_real_escape_string($_POST['email']));
	$web	= htmlentities(mysql_real_escape_string($_POST['website']));
	$pesan	= htmlentities(mysql_real_escape_string($_POST['pesan']));
	$tgl	= time();
 
	if($nama && $email && $pesan){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$in = mysql_query("INSERT INTO bukutamu VALUES(NULL, '$tgl', '$nama', '$email', '$web', '$pesan')");
			if($in){
				echo '<script language="javascript">alert("Terima kasih, data Anda berhasil disimpan"); document.location="index.php";</script>';
			}else{
				echo '<div id="error">Uppsss...! Query ke database gagal dilakukan!</div>';
			}
		}else{
			echo '<div id="error">Uppsss...! Email Anda tidak valid!</div>';
		}
	}else{
		echo '<div id="error">Uppsss...! Lengkapi form!</div>';
	}
}
?>