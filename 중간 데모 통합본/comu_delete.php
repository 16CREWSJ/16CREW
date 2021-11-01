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
        $no = $_GET["num"];
		
		
        $sqli = "delete from comu where num='$no'";
        $query = $con -> prepare($sqli);
        $query -> execute();

        $sqll = "update comu set num = (num-1) where num>'$no'";
        $queryy = $con -> prepare($sqll);
        $queryy -> execute();

        ?>
        location.replace('loginMain.php');
    </script>
	
</body>

</html>