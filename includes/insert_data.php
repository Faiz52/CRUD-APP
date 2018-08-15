<?php

include 'db.php';


if(isset($_POST['insert'])){
    
    $name  = $_POST['name'];
    $batch = $_POST['batch'];
    $email = $_POST['email'];
    
    $query = "INSERT INTO `student` (name,batch,email) VALUES ('$name','$batch','$email') ";
    
    $result = mysqli_query($conn,$query);
    
    if($result){
        
        header('location:../index.php');
    }
    
}


?>