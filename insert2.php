<?php 

    error_reporting(E_ALL); 
    ini_set('display_errors',1); 

    include('dbcon.php');


    if( ($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['submit']))
    {

        $id=$_POST['id'];
        $password=$_POST['password'];

        if(empty($id)){
            $errMSG = "ID을 입력하세요.";
        }
        else if(empty($password)){
            $errMSG = "password를 입력하세요.";
        }

        if(!isset($errMSG))
        {
            try{
                $stmt = $con->prepare('INSERT INTO login(id, password) VALUES(:id, :password)');
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':password', $password);

                if($stmt->execute())
                {
                    $successMSG = "새로운 사용자를 추가했습니다.";
                }
                else
                {
                    $errMSG = "사용자 추가 에러";
                }

            } catch(PDOException $e) {
                die("Database error: " . $e->getMessage()); 
            }
        }

    }
?>

<html>
   <body>
        <?php 
        if (isset($errMSG)) echo $errMSG;
        if (isset($successMSG)) echo $successMSG;
        ?>
        
        <form action="<?php $_PHP_SELF ?>" method="POST">
            Name: <input type = "text" name = "id" />
            password: <input type = "text" name = "password" />
            <input type = "submit" name = "submit" />
        </form>
   
   </body>
</html>