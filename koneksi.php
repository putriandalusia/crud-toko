<?php
	//mysql_connect('localhost','root','','showroo2_qurban');
  // $db ='toko';
	// $con = mysqli_connect('localhost','pmauser','28','toko');
	//$con = mysqli_connect($host_p, $usernm_p, $pass_p, $db);
  $db ='putritokobaju';
  $con = mysqli_connect('localhost','pmauser','28',$db);
	$now = date('Y-m-d');
	date_default_timezone_set('Asia/Jakarta');
/*
	if ($con->connect_error) {
  echo $con->connect_error;
} else {
  echo "konek sih";
}
*/
	?>
