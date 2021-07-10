<?php
// mysql_connect("localhost","root","");
// mysql_select_db("penggajian");
$host = "localhost";
$user = "iboydev";
$pass = "P@554mysql";
$db = "penggajian";
$con = mysqli_connect($host,$user,$pass,$db);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
    //echo 'Tahu';
    //echo $_SESSION['viewnya'];
}	

//fungsi format rupiah 
function format_rupiah($rp) {
	$hasil = "Rp." . number_format($rp, 0, "", ".") . ",00";
	return $hasil;
}
?>
