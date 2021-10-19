<?php 
    error_reporting(E_ALL); 
    ini_set('display_errors',1); 

    include('dbcon.php');

    $android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");

    if( (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['submit'])) || $android )
    {
      $id=$_POST['id'];
		//$id="aaaa";
     // $password=$_POST['password'];

		if(empty($id)){
            $errMSG = "ID을 입력하세요.";
        }
       /* else if(empty($password)){
            $errMSG = "password를 입력하세요.";
        }*/

        if(!isset($errMSG))
        {
            try{
				
				//$stmt = $con->prepare("SELECT id FROM login WHERE login.id=:id");
				// $stmt = $con->prepare('INSERT INTO login(id, password) VALUES(:id, :password)');

				//$stmt = $con->prepare("SELECT * FROM login");
				$sql ="select * from login where id='$id'"; 
				$stmt = $con->prepare($sql);
				$stmt->execute();
				
				if ($stmt->rowCount() == 0){
					echo 0;
					//echo '0';
					/*echo "'";
					echo $id;
					echo "'은 찾을 수 없습니다.";*/
				}
				else{
					echo 1;
				}
				
				//$stmt = $con->prepare("SELECT id FROM member WHERE login.id=aaaa");
				//echo var_dump($stmt);
				
                //$stmt->bindParam(':id', $id);
				//$stmt->execute();
				//$count = $stmt -> rowCount();
				//echo $count;
               // $stmt->bindParam(':password', $password);

               /* if($stmt->execute())
                {
                    $successMSG = "새로운 사용자를 추가했습니다.";
                }
                else
                {
                    $errMSG = "사용자 추가 에러";
                }*/
            } catch(PDOException $e) {
                die("Database error: " . $e->getMessage()); 
            }
        }
	}
?>


<?php 	
	//echo $count;
	//echo print_r($count);
	/*if($stmt->rowCount()){
		echo "123456";
	}
	else{
		echo "1223213213";
	}*/
	
	$android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");
   
    if( !$android )
    {
?>
    <html>
       <body>
           <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Name: <input type = "text" name = "id" />
				password: <input type = "text" name = "password" />
                <input type = "submit" name = "submit" />
           </form>
       </body>
    </html>

<?php 
    }
?>