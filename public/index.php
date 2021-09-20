<?php 

$host="localhost";
$user="root";
$password="";
$db="demo";

$db=mysqli_connect($host,$user,$password,$db);
mysqli_select_db($db,'demo');
if(mysqli_connect_error()){
	die ("There is error connecting to database");
}


if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $query="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysqli_query($db,$query);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
		
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form in my Blog</title>
	<link rel="stylesheet" a href="./css/style.css">
	<script src="https://use.fontawesome.com/445a168dcf.js"></script>
</head>
<body>
	<div class="container">
	<img src="./images/download.jpg"/>
		<form method="post" action="#">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Enter your password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>   