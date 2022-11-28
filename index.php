<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<style type="text/css">
	.header-menu-login-list{
			list-style: none;
			display: flex;
			padding-right: 15px;
		}
		.header-login-list-login-text>p{
			margin: 0;
			padding-right: 15px;
			margin-top: 4px;
		}
		.header-login-list-login-text>p>a{
			text-decoration: none;
			color: white;
		}
		.header-login-list-login{
			padding-right: 15px;
		}
		.header-login-list-login-cart{
			padding-right: 15px;
		}
		.header-menu-login{

		}
</style>
</head>
<body>

	<?php 
    $connect = mysqli_connect('3.128.54.48','rew52','123@123a','music');
    if(!$connect)
    {
      echo "Connection failed";
    }
  ?>
<!-- menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
	  <a class="navbar-brand" href="#">Source</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="index.php"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="AddProduct.php"> <span class="glyphicon glyphicon-user"></span>Add Product</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Manage
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="edit.php">Edit</a>
                      <a class="dropdown-item" href="AddCard.php">Add Card</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div>
              </li>
          </ul>
          
          <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
						<input class="form-control mr-sm-2" type="search" placeholder="Search for toys" style="width: 400px" name="Search">
						<input type="submit"name="search" value="Search" />
          </form>

          <div style=" padding-left:30px" class="header-menu-login"> 
		    		<div class="header-menu-login-list">
		    			<div class="header-login-list-login">
		    				<?php
		    					if (isset($_SESSION['fullname']))
		    					{
		    						echo $_SESSION['fullname'];
		    					}
		    					else
		    					{
		    						?>
		    							<a href="login.php"><svg data-bbox="0 0 50 50" data-type="shape" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 50 50"><g><path d="M25 48.077c-5.924 0-11.31-2.252-15.396-5.921 2.254-5.362 7.492-8.267 15.373-8.267 7.889 0 13.139 3.044 15.408 8.418-4.084 3.659-9.471 5.77-15.385 5.77m.278-35.3c4.927 0 8.611 3.812 8.611 8.878 0 5.21-3.875 9.456-8.611 9.456s-8.611-4.246-8.611-9.456c0-5.066 3.684-8.878 8.611-8.878M25 0C11.193 0 0 11.193 0 25c0 .915.056 1.816.152 2.705.032.295.091.581.133.873.085.589.173 1.176.298 1.751.073.338.169.665.256.997.135.515.273 1.027.439 1.529.114.342.243.675.37 1.01.18.476.369.945.577 1.406.149.331.308.657.472.98.225.446.463.883.714 1.313.182.312.365.619.56.922.272.423.56.832.856 1.237.207.284.41.568.629.841.325.408.671.796 1.02 1.182.22.244.432.494.662.728.405.415.833.801 1.265 1.186.173.154.329.325.507.475l.004-.011A24.886 24.886 0 0 0 25 50a24.881 24.881 0 0 0 16.069-5.861.126.126 0 0 1 .003.01c.172-.144.324-.309.49-.458.442-.392.88-.787 1.293-1.209.228-.232.437-.479.655-.72.352-.389.701-.78 1.028-1.191.218-.272.421-.556.627-.838.297-.405.587-.816.859-1.24a26.104 26.104 0 0 0 1.748-3.216c.208-.461.398-.93.579-1.406.127-.336.256-.669.369-1.012.167-.502.305-1.014.44-1.53.087-.332.183-.659.256-.996.126-.576.214-1.164.299-1.754.042-.292.101-.577.133-.872.095-.89.152-1.791.152-2.707C50 11.193 38.807 0 25 0"></path></g></svg> </a>
		    						<?php
		    					}
		    				?>
          </div>
          </div>

		    			</div>
		    			<div class="header-login-list-login-cart">
		    				</a>
		    				<a href="CartManage.php"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="19" height="22" viewBox="0 0 164.9 196.4" preserveAspectRatio="xMinYMax meet" data-hook="svg-icon-9"><text x="84" y="131" dy=".35em" text-anchor="middle" class="LCo0H QVqyb" data-hook="items-count">0</text><path d="M81.9 11.5c-18.8 0-34.1 16-34.1 35.7v18.1h7.8V47.2c0-15.4 11.8-27.9 26.4-27.9 14.5 0 26.4 12.5 26.4 27.9v18.1h6.6V64h1.1V47.2c-.1-19.7-15.4-35.7-34.2-35.7z"></path><path d="M156.9 70.5v118H8v-118h148.9m8-8H0v134h164.9v-134z"></path></svg></a>
		    			</div>
		    			<a href="logout.php">Logout</a>
		    		</div>
		    	</div>

      </div>
  </div>
</nav>
<!-- end menu -->
<!-- slide -->
<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style= "margin: auto; max-width: 800px;" src="https://media.4rgos.it/i/Argos/sb-2322-m007-25-01-designafriend-doll?maxW=768&qlt=75&fmt=webp" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style= "margin: auto; max-width: 800px;" src="https://media.4rgos.it/i/Argos/sb-3322-m007-25-01-lego25?maxW=768&qlt=75&fmt=webp" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style= "margin: auto; max-width: 800px;" src="https://media.4rgos.it/i/Argos/sb-3422-m007-25-01-2489533-1475407-2209359-toys?maxW=768&qlt=75&fmt=webp" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end slide -->
<!-- list product -->
<div class="container">
	<div class="row mt-5">
		<h2 class="list-product-title">Best Seller</h2>
		<div class="list-product-subtitle">
			<p>List product</p>
		</div>
		<div class="product-group">
			<div class="row">
				<?php
            $sql = "SELECT * FROM song";            
            $result = mysqli_query($connect, $sql);
            // Trả về kết quả dạng 1 mảng
            while ($row_song = mysqli_fetch_array($result)){
                $song_id = $row_song['song_id'];
                $song_name = $row_song['song_name'];
                $song_img = $row_song['song_img'];
                ?>
                  <div class="col-md-3 col-sm-6 col-12">
                      <div class="card card-product mb-3">
                        <img class="card-img-top" src="image/<?php echo"$song_img
                        "?>">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo"$song_name"?></h5>
                         <?php
                           echo" <a href='detail.php?id=$song_id' class='btn btn-primary' >Details</a> "
                          ?>
                        </div>
                      </div>
                  </div>
                <?php
            }
          ?>			
			</div>
		</div>
	</div>
</div>
<!-- end list product -->

<!-- Load jquery trước khi load bootstrap js -->
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>