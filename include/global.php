<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "konga";
$base_path = "localhost/project.konga.com";
$conn = mysqli_connect($db_host , $db_user , $db_pass);
    if(!$conn) die(
      "Unable to establish connection"
    );
    mysqli_select_db($conn , $db_name) or die ("Unable to Connect to Database");

?>