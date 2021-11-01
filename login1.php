<?php 
    error_reporting(E_ALL); 
    ini_set('display_errors',1); 

    include('db.php');

    $android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");

     $id=$_POST['id'];
     $password=$_POST['password'];

        if($id != NULL)
        {
            try{
            $sql ="select * from user where id='$id' and password='$password'"; 
            $stmt = $con->prepare($sql);
            $stmt->execute();
           
            if ($stmt->rowCount() == 0){
               echo "incorrect"; 
            }
            else{
               echo "<script>location.href='logoutMain.php'</script>";
            }
            
            } catch(PDOException $e) {
                die("Database error: " . $e->getMessage()); 
            }
   }
?>
