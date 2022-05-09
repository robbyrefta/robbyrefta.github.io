<?php 
session_start();
// include 'admin/db.php';
/*$uname=$_POST['uname'];
$pass=$_POST['pass'];
$pas=md5($pass);
$query=mysql_query("select * from admin where uname='$uname' and pass='$pas'")or die(mysql_error());
if(mysql_num_rows($query)==1){
	
	$q=mysql_fetch_array($query);
	file_put_contents('php://stderr', print_r(($q['id']), TRUE));
	$_SESSION['id_admin']=$q['id'];
	$_SESSION['uname']=$uname;
	header("location:admin/index.php");
}else{
	header("location:index.php?pesan=gagal")or die(mysql_error());
	// mysql_error();
}*/
$username = $_POST['username'];
$password = $_POST['password'];
if($username=='admin' && $password=='admin'){
	$_SESSION['uname']=$username;
	header("location:dash");
}
else{
	header("location:index.php?ms=er")or die(mysql_error());
}
 ?>