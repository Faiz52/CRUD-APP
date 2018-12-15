<?php
include 'includes/db.php';
?>

<?php 

if(isset($_GET['update'])){
    
    
    $id = $_GET['update'];
    

$query = "SELECT * FROM student WHERE id = $id";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_array($result)){
        
        $name  = $row['name'];
        $batch = $row['batch'];
        $email = $row['email'];
        }
    }
}


if(isset($_POST['update'])){
    
    $name  = clean($_POST['name']);
    $batch = clean($_POST['batch']);
    $email = clean($_POST['email']);
    
    $query  = "UPDATE student SET ";
    $query .= "name = '".escape($name)."', ";
    $query .= "batch = '".escape($batch)."', ";
    $query .= "email = '".escape($email)."' ";
    $query .= "WHERE id = {$id} ";
    
    $result = mysqli_query($conn,$query);
    
    if($result){
        
        header('location:index.php');
    }
    
}

?>
<div class="container">
    <div class="jumbotron text-center">
        <h2>Crud Application Using PHP</h2>
    </div>
    <br>
<form action="" method="post">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo $name ?>">
    </div>
    <div class="form-group">
        <label for="name">Batch:</label>
        <input type="text" name="batch" class="form-control" placeholder="Enter batch" value="<?php echo $batch ?>">
    </div>
    <div class="form-group">
        <label for="name">Email:</label>
        <input type="text" name="email" class="form-control" placeholder="Enter email" value="<?php echo $email ?>">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Update data" name="update">
    </div>
</form>

</div>
