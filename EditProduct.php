<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

    <title></title>
</head>
<body>

<table border="1">
    <tr>
        <th>Song Id</th>
        <th>Song Name </th>
        <th>Price </th>
        <th>Images </th>
        <th>Action </th>
     </tr>

     
         <?php
         include("connect.php");
         $sql = "SELECT * FROM song";
        $result = mysqli_query($connect, $sql);
        while($row= mysqli_fetch_array($result)){
               $song_id = $row['song_id'];
               $song_name = $row['song_name'];
               $song_price = $row['song_price'];
               $song_image = $row['song_img'];

            ?>
        <tr>
            <td> <?php echo $song_id ?></td>

            <td> <?php echo $song_name ?></td>
            <td> <?php echo $song_price ?></td>
            <td> <img src="Images/<?php echo $song_image ?>" style ="width: 100px;"></td>
            <td> <a href="editsong.php?id=<?php echo $song_id ?>">Update Song </a></td>
            <td> <a href="?id=<?php echo $song_id ?>">Delete Song </a></td>
             </tr>
             <?php
             }
             ?>
</table>
<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql="DELETE FROM song where song_id = $id";
    $result=mysqli_query($connect,$sql);
    if($result) {
        echo "<script> alert ('Xóa thành công!')</script>";
    }
} else{
    echo"Lỗi";
}
?>
</body>
</html>