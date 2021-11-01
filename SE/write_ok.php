

<!DOCTYPE html>

<html>
	<head>
	
	</head>
	<body>
		<script>
			
				<?php
   header("Content-Type: text/html; charset=UTF-8");
	$conn = new mysqli("localhost", "root", "dlalstn", "opentutorials");
	mysqli_query($conn, 'SET NAMES utf8');
   
   if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $title = $_POST['title'];
      $name = $_POST['name'];
	  $content = $_POST['content'];
	  $time=date("Y-m-d");
      
	  $sql = "select * from comu";
      $re = $conn->query($sql);
      /*$re->execute();
	  
	   $total_rows = mysqli_num_rows($re);*/
	  $total = $re->num_rows;
	  
	  //echo $count;
      
	  $sqli = "insert into comu values ($total+1 ,'$name', '$title', '$content', '$time')";
	  $res = $conn->prepare($sqli);
	  $res->execute();
	  
	  
	  /*if($re->rowCount() == 0) {
        echo "<script>alert('아이디랑 비밀번호가 일치하지 않습니다. 다시 입력해주세요');</script>";
      }
      else{
        header("Location: web_login2.php");  
      }   */
   }   
?>
			location.replace("http://localhost/SE/main_comu.php");
			
		</script>
	</body>
</html>


