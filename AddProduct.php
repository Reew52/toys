<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php 
$connect = mysqli_connect('3.132.234.157','rew52','123@123a','musics');
if($connect){
	echo "";
}else{
	echo "Connection failed!";
}
?>

<div class="container mt-3">
  <h2>ADD Product</h2>
  <form method="Post" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Name of Toy" name="song_name">
    </div>
    <div class="mb-3">
      <label for="pwd">Price:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Price of Toy" name="song_price">
    </div>
     <div class="mb-3">
      <label for="pwd">Description:</label>
      <textarea class="form-control" id="pwd" name="song_description"></textarea>
    </div>

    <div class="mb-3">
      <label for="pwd">Image:</label>
      <input type="file" name="song_img">

    <button type="submit" class="btn btn-primary" name="add_product">ADD</button>
  </form>
</div>
<?php
			$connect = mysqli_connect('3.132.234.157','rew52','123@123a','musics');
			if (isset($_POST['add_product'])) {
			$song_name =$_POST['song_name'];
			$song_description =$_POST['song_description'];
			$song_price =$_POST['song_price'];
			//lấy ảnh từ thư mục bất kỳ của máy tính
			$song_img =$_FILES['song_img']['name'];
			//di chuyển ảnh từ thư mục bất kỳ sang thư mục tmp_name của htdocs
			$song_img_tmp =$_FILES['song_img']['tmp_name'];
			//đưa ảnh từ thư mục tmp sang thư mục cần lưu
			move_uploaded_file($song_img_tmp, "image/$song_img");
			//lấy audio từ thư mục bất kỳ của máy tính

			$sql = "INSERT INTO song VALUES('','$song_name','$song_description','$song_price','$song_img')";
			$result = mysqli_query($connect, $sql);
			if($result){
				echo "<script>alert('New successful product added!') </script>";
				echo "<script> window.location.href = 'index.php' </script>";
				}
			else{
				echo "<script>alert('Add new error!') </script";
			}

			}
		?>
</body>
</html>
