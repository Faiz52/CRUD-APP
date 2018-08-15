<?php

include 'includes/db.php';

?>
<div class="container">
    <div class="jumbotron text-center">
        <h2>Crud Application Using PHP</h2>
    </div>
    <br>
    
    <a href="insert.php" role="button" class="btn btn-primary pull-right">Insert Data</a>
    <br>
    <br>
    <table class="table table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Batch</th>
            <th>Email</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
<?php
        
$query = "SELECT * FROM student";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_array($result)){
        
        $id = $row['id'];
        
        ?>
        
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['batch']; ?></td>
            <td><a href="update.php?update=<?php echo $id ?>" class="btn btn-success" role="button">Update</a></td>
            <td><a href="index.php?delete=<?php echo $id ?>" class="btn btn-danger" role="button">Delete</a></td>
        </tr>
        <?php
    }
}  
        
    if(isset($_GET['delete'])){
        
        $id = $_GET['delete'];
        
        $query = "DELETE FROM student WHERE id = $id";
        
        $result = mysqli_query($conn,$query);
        
        if($result){
            
            header('location:index.php');
            
        }
        
    }    
        
        
        
?>
       
    
        
        
        
        
        
    </table>
</div>



