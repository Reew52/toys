<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <title>Toy details</title>
    <style type="text/css">
        .images-detail img {
        margin-top: 5%;
        width: 100%;
        align-items: center;
        border-radius: 100%;
        margin-bottom: 30px;
        animation: app-logo-spin infinite 20s linear
        }
        @keyframes app-logo-spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

    </style>
</head>
<body>
    <?php 
    $connect = mysqli_connect('3.128.54.48','rew52','123@123a','musics');
    if(!$connect)
    {
      echo "Connection failed";
    }
  ?>
<div class="container">
    <div class="row">
        <?php
        session_start();
        $id = $_GET["id"];
        $sql = "SELECT * FROM song WHERE song_id = {$id}";
        $result = mysqli_query($connect, $sql);
        while($row= mysqli_fetch_array($result)){
            $id = $row['song_id'];
            ?>
            <div class="col-md-6" style="text-align: left;">
                <h2> Name of Toy: <?php echo $row['song_name'];?> </h2>
                <p>Price: <?php echo $row['song_price'];?> </p>

                        <textarea cols="40" rows="10" disabled><?php echo $row["song_description"];?></textarea>

                      <a href="AddCard.php?id=<?php echo $id ;?>">  <button type="submit" name ="buy" class='btn btn-primary'><i class="fas fa-cart-plus"></i> Add to cart</button> </a>
                    
            </div>  
            <!-- cho ảnh quay tròn-->
            <div class="images-detail">
            <div class="col-md-6">
                <img src="image/<?php echo $row['song_img'] ?>" style = "width: 500px;height: 500px;">
            </div>
        </div>
       
            <?php
        }

    ?>
    </div>
</div>
</body>
</html>