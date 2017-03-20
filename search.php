<?php
require 'include/global.php';
require 'include/function.php';
if(isset($_POST['search_term'])){
	$search_term = mysqli_real_escape_string($conn , htmlentities($_POST['search_term']));
	if(!empty($search_term)){
		$search = mysqli_query($conn , "SELECT * FROM products WHERE `product_search_keyword` LIKE '%$search_term%' ");
		echo "<tr>";
		while($row =  mysqli_fetch_assoc($search)){
			echo "<td><img src='". $row['product_image_location']. "'/></td>";
			echo "<td><img src='". $row['product_image_location']. "'/></td>";
			echo "<td><img src='". $row['product_image_location']. "'/></td>";
			echo "<td><img src='". $row['product_image_location']. "'/></td>";
			echo "</tr><tr>";
			echo "<td><img src='". $row['product_image_location']. "'/></td>";
			echo "<td><img src='". $row['product_image_location']. "'/></td>";
			echo "<td><img src='". $row['product_image_location']. "'/></td>";
			echo "<td><img src='". $row['product_image_location']. "'/></td>";
			echo "</tr><tr>";
			echo "<td><img src='". $row['product_image_location']. "'/></td>";
			echo "<td><img src='". $row['product_image_location']. "'/></td>";
			echo "<td><img src='". $row['product_image_location']. "'/></td>";
			echo "<td><img src='". $row['product_image_location']. "'/></td>";
			echo "</tr>";
		}
		
	}else{
		LoadStd();
	}
}
?>