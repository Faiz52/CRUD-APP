<?php
include 'includes/db.php';
?>
<div class="container">
    <div class="jumbotron text-center">
        <h2>Crud Application Using PHP</h2>
    </div>
    <br>
    
<form action="includes/insert_data.php" method="post">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Name">
    </div>
    <div class="form-group">
        <label for="name">Batch:</label>
        <input type="text" name="batch" class="form-control" placeholder="Enter batch">
    </div>
    <div class="form-group">
        <label for="name">Email:</label>
        <input type="text" name="email" class="form-control" placeholder="Enter email">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Insert data" name="insert">
    </div>
</form>

</div>
