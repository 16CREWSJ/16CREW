<?php
	include('db.php');
?>
<!DOCTYPE html>

<html>
	<head>
	
	</head>
	<body>
		<script>
			
				<?php
						$no = $_POST["num"];
						$title = $_POST["title"];
						$content = $_POST["content"];
			
						$sql="update comu set title='$title', content='$content' where num='$no'";
						$query = $con->prepare($sql);
						$query->execute();
						

				?>
			location.replace("http://localhost/SE/main_comu.php");
			
		</script>
	</body>
</html>
