<!DOCTYPE html>

<html>
	<head>
	
	</head>
	<body>
		<script>
			
	<?php
   header("Content-Type: text/html; charset=UTF-8");
	$conn = new mysqli("localhost", "root", "dbsrudtn", "login");
	mysqli_query($conn, 'SET NAMES utf8');
   
   if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $title = $_POST['title'];
      $name = $_POST['name'];
	  $content = $_POST['content'];
	  $time=date("Y-m-d");
      
	  $sql = "select * from comu";
      $re = $conn->query($sql);
	  $total = $re->num_rows;
	  
      
	  $sqli = "insert into comu values ($total+1 ,'$name', '$title', '$content', '$time')";
	  $res = $conn->prepare($sqli);
	  $res->execute();
	  
   }   
?>
		location.replace("http://localhost/soft3/loginmain.php");
			
		</script>
	</body>
</html>
