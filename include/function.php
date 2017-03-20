<?php
	function _REG($user_data){
		include 'global.php';
		$data = array();
		$data = $user_data;
		$ini = $data[0];
		$fname = $data[1];
		$lname = $data[2];
		$email = $data[3];
		$phone = $data[4];
		$fullname = $fname . " " . $lname;
		$password = md5($data[5]);
		
		$sql = "INSERT INTO users SET user_initials = '$ini' , user_fullname = '$fullname' , user_email = '$email' , user_password = '$password'";
		$result = mysqli_query($conn , $sql);
		if(!$result){
			$error = mysqli_error($conn);
			return $error;
		}elseif($result){
			return true;
		}
	}

	function _LOG($user_data){
		include 'global.php';
		$data = array();
		$data = $user_data;
		$email = $data[0];
		$password = md5($data[1]);
		
		$sql = "SELECT * FROM users WHERE user_email = '$email' AND user_password = '$password'";
		$result = mysqli_query($conn , $sql);
		if(!$result){
			$error = mysqli_error($conn);
		}else{
			$output = mysqli_num_rows($result);
			if($output > 0){
				return true;
			}else{
				return false;
			}
		}
	}

	function _LPRODUCTS(){
		include 'global.php';
	}
	
	function _CHKADMIN($id){
		include 'global.php';
		$sql = "SELECT * FROM administrators WHERE admin_username = '$id'";
		$result = mysqli_query($conn , $sql);
		if(mysqli_num_rows($result) > 0){
			return true;
		}else{
			return false;
		}
	}

	function _ADMINLOGIN($user , $pass){
		include 'global.php';
		$passwrd = md5($pass);
		$sql = "SELECT * FROM administrators WHERE admin_username = '$user' AND admin_password = '$passwrd' ";
		$result = mysqli_query($conn , $sql);
		if($result){
			if(mysqli_num_rows($result) > 0){
				return true;
			}else{
				return false;
				}
		}
	}

	function _LOADORDERS(){
		include 'global.php';
		$sql = "SELECT * FROM orders";
		$result = mysqli_query($conn , $sql);
		while($output = mysqli_fetch_array($result)){
			$customer_id = $output['customer_id'];
			$sql2 = "SELECT * FROM customer WHERE customer_id = '$customer_id' ";
			$result2 = mysqli_query($conn , $sql2);
			$output2 = mysqli_fetch_array($result2);
			echo "<tr>";
			echo "<td>" .$output['customer_id']."</td>";
			echo "<td>" .$output2['customer_name']."</td>";
			echo "<td>" .$output['order_id']."</td>";
			echo "<td>" .$output['customer_location']."</td>";
			echo "<td>" .$output['order_contents']."</td>";
			echo "<td>$" .$output['order_amount']."</td>";
			echo "<td>$" .$output['order_discount']."</td>";
			echo "<td>" .$output['order_status']."</td>";
			echo "<td><a href='#'>Cancel</a></td>";
			echo "</tr>";
		}
	}
?>