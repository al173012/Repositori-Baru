<?php
require_once 'db.php';

$alamat =$_GET['alamat'];
mysql_query("DELATE FROM mahasiswa WHEREalamat='$alamat' ")or die (mysql_eror());

header("location:index.php?pesan=hapus);
?>
