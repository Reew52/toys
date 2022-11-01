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
	<?php 
$connect = mysqli_connect('3.132.234.157','rew52','123@123a','musics');
if($connect){
	echo "";
}else{
	echo "Connection failed";
}
?>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Full Name" name="fullname"/>
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password" name="password"/>
			<button name="register">Sign Up</button>
		</form>
	</div>
<?php 
$connect = mysqli_connect('3.132.234.157','rew52','123@123a','musics');
if($connect){
	echo "";
}else{
	echo "Connection failed";
}
if(isset($_POST['register'])){
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "INSERT INTO users VALUES('','$email', '$password','$fullname') ";
	$result = mysqli_query($connect, $sql);
	if($result){
		echo "<script>alert('Successful account registration') </script>";
		echo "<script> window.location.href = 'login.php' </script>";
	}else{
		echo "Failure";
	}
}
?>

	<div class="form-container sign-in-container">
		<form method="POST">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="email" />
			<input type="password" placeholder="Password" name="password"/>
			<a href="#">Forgot your password?</a>
			<button name="login">Sign In</button>
		</form>
	</div>

	<?php
if(isset($_POST['login'])){
$email = $_POST['email'];
$password = $_POST['password'];
//lựa từ bảng user cột username

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
// Thực thi truy vấn từ csdl dùng hàm mysqli_query
$result = mysqli_query($connect, $sql);
$num_rows = mysqli_num_rows($result);
if($num_rows ==0){
	echo "Email or password is incorrect";
}else{
	while ($user = mysqli_fetch_array($result))
	{
		$_SESSION['fullname'] = $user['fullname'];
		$_SESSION['user_id'] = $user['user_id'];
	}
	echo "<script> alert('Login success')</script>";
    echo"<script>window.open('index.php','_self')</script>";
            }
}
?>

	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer>




<script>
	
	const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>

</body>
</html>