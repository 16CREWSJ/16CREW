<?php

	header("Content-Type: text/html; charset=UTF-8");
	$conn = new mysqli("localhost", "root", "dlalstn", "opentutorials");
	mysqli_query($conn, 'SET NAMES utf8');
	
	/* $user_ID = $_POST['user_ID'];
     $user_PW1 = $_POST['user_PW1'];
	 $user_name = $_POST['user_name'];
     $year = $_POST['year'];
	 $month = $_POST['month'];
     $day = $_POST['day'];*/
	 
	 $id = $_POST['id'];
     $password = $_POST['password'];
	 $name = $_POST['name'];
	 $id_num = $_POST['id_num'];
	 $address = $_POST['address'];
	 $phoneNumber = $_POST['phoneNumber'];
	 $email = $_POST['email'];
	 $sex = $_POST['sex'];
	
	/*$sql = "insert into member values ('$user_ID', '$user_PW1', '$user_name', '$year.$month.$day')";
	$res = $conn->query($sql);*/
	
	$sql = "insert into semember values ('$id', '$password', '$name', '$id_num', '$address', '$phoneNumber', '$email', '$sex')";
	$res = $conn->query($sql);
	
	echo $id;
	echo $password;
	echo $name;
	echo $id_num;
	echo $address;
	echo $phoneNumber;
	echo $email;
	echo $sex;
?>