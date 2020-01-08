<?php 
session_start();
include('functions.php');

$user = $_POST['user'];
$password = $_POST['password'];

$query = mysqli_query($konek, " SELECT * FROM user where  id ='$user' && password = '$password'");

// $query2 = mysqli_query($konek, "SELECT * FROM user WHERE hasil");

$data = mysqli_fetch_array($query);

$lvl = $data['level'];
$nilai = $data['hasil'];

$row = mysqli_num_rows($query);

if ($row > 0) {
	$_SESSION['user'] = $user;
	if ($lvl == 'pakar') {
		header("refresh:0;url=pakar");
	} elseif ($lvl == 'user') {
		if ($nilai != ""){
			$_SESSION['kd']=$nilai;
			header("Location:user/hasiil.php");
		}else{
			$_SESSION['no']=1;
			header("refresh:0;url=user");
		}		
	}
}else {
	echo "<script>
		alert('gagal login!');
		</script>
		";
	header("refresh:0;url=index.php");
}

// if ($row['hasil'] !="") {
// 	header("Location:user/cekhasil_login.php");
// } elseif ($row['level']== "pakar") {
// 	header("refresh:0;url=pakar");
// } elseif ($row['level'] == 'user') {
// 	header("refresh:0;url=user"); 
// } else {
// 	echo "<script>
// 			alert('gagal login!');
// 			document.location.href =index.php;
// 			</script>";
// }
?>