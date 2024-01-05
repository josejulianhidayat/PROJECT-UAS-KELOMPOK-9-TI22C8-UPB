<?php 
$host="localhost";
$user="root";
$pass="";
$database="user__level";

$koneksi=mysqli_connect($host,$user,$pass);
 
// Check connection
if ($koneksi)
{
	$buka=mysqli_select_db($koneksi,$database);
	echo "Database dapat terhubung";
	if (!$buka)
	{
		echo "Database tidak dapat terhubung";
	}
}
else
{
	echo "MySQL tidak terhubung";
}
 
?>