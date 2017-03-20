<?php
session_start();
require '../include/global.php' ;
require '../include/function.php' ;
if(!isset($_SESSION['administrator'])){
		if(isset($_GET['id'])){
		$user_id_admin = $_GET['id'];
		if(_CHKADMIN($user_id_admin)){
//			echo "<script>window.location.href='panel.php?id=$user_id_admin'</script>";
		}else{
			echo "<script>window.location.href='../index.php'</script>";
		}
	}else{
			echo "<script>window.location.href='../index.php'</script>";
		}
}
if(isset($_SESSION['administrator'])){
	header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin-Login</title>
		<style>
			.center{
				margin-left: 38%;
				margin-top: 14%;
			}
			.login-form{
				width: 356px;
			}
			.label{
				font-family: sans-serif ,'Open Sans';
				font-weight: bold;
				font-size: 14px;
				color: #293a4a;
			}
			.form-text{
				width: 280px;
				height: 33px;
				border: 2px solid #ccc;
				border-radius: 3px;
				padding-left: 10px;
				margin-bottom: 30px;
				margin-top: 5px;
			}
			.form-button{
				font-family: 'arial' , 'helvetica' , 'sans-serif' ,'Open Sans';
				color: #fff;
				background-color: #179bd7;
    			width: 290px;
				height: 40px;
				border-radius: 4px;
    			font-weight: 600;
				border: 1px solid #179bd7;
    			
			}
			.form-button:hover{
				cursor: pointer;
				background-color: #095779;
			}
			.error{
				color: red;
				font-family: 'arial' , 'helvetica' , 'sans-serif' ,'Open Sans';
				padding-left: 21%;
				font-weight: bold;
				font-size: 14px;
			}
		</style>
	</head>
	<body>
		<div class="login-form center">
			<form method="post">
				<?php 
					if(isset($_POST['user_name']) && isset($_POST['pass_word']) ){
						$usr = mysqli_real_escape_string($conn , htmlentities($_POST['user_name']));
						$pass = mysqli_real_escape_string($conn , htmlentities($_POST['pass_word']));
						if(_ADMINLOGIN($usr , $pass)){
							$_SESSION['administrator'] = $usr;
							header("location: index.php");
						}else{
							echo "<p class='error'>Invalid Login details</p>";
						}
					}
				?>
				<label for="user_name" class="label">Username: </label><br />
				<input type="text" class="form-text" placeholder="Enter your account username" required="required" name="user_name"/><br />
				<label for="pass_word" class="label">Password: </label><br />
				<input type="password" class="form-text" placeholder="Enter your account password" required="required" name="pass_word"/><br />
				<input type="submit" name="submit" value="Log in" class="form-button" />
			</form>
		</div>
	</body>
</html>