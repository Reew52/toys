<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>trang add product</h1>
	<?php 
    $connect = mysqli_connect('3.132.234.157','rew52','123@123a','musics');
    if(!$connect)
    {
      echo "Kết nối thất bại";
    }
  ?>
  
	<?php
	$song_id =  $_GET['id'];
	echo $_SESSION['user_id'];
	if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != null){
		$user_id = $_SESSION['user_id'];
		$sql="select * from cart where song_id = $song_id AND user_id='$user_id'";
		$result = mysqli_query($connect, $sql);
		$check_song = mysqli_num_rows($result);
		if ($check_song > 0) {
			echo "<script>alert('Song already in the cart')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		}
		else {
			$date = date('y-m-d');
			$sql = "insert into cart values ('$user_id', $song_id, '$date') ";
			$result = mysqli_query($connect, $sql);	
			if ($result) {
				echo "<script>alert('Song added to the cart successfully!')</script>";
				echo "<script>window.open('index.php','_self')</script>";
			}
			else {
				echo "<script>alert('Error')</script>";
				//echo "<script>window.open('index.php','_self')</script>";
			}
		}
	}
	else {
		echo "<script>alert('You need to be logged in to perform this action')</script>";
		echo "<script>window.open('login.php','_self')</script>";
	}
?>
</body>
</html>