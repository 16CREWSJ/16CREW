<?php

    header("Content-Type: text/html; charset=UTF-8");
    $conn = new mysqli("localhost", "root", "dbsrudtn", "login");
    mysqli_query($conn, 'SET NAMES utf8');
    
	$id=$_POST['id'];
    $password=$_POST['password'];
	$name=$_POST['name'];
	$id_num=$_POST['id_num'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$phoneNumber=$_POST['phoneNumber'];
	$email=$_POST['email'];
   
   $sql = "insert into user values ('$id', '$password', '$name', '$id_num', '$address', '$gender', '$phoneNumber', '$email' )";
   $res = $conn->query($sql);
   
   echo "<script>location.href='loginMain.php'</script>";
?>
