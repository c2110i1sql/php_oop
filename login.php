<?php 
include 'connect.php';
if (isset($_POST['email'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

    $query = mysqli_query($conn, $sql);
    
    echo $sql;
    // $demo->
    echo '<pre>';
    print_r($query);
    echo '</pre>';
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    
</head>
<body>
    
    <div class="container">
        <hr>
        
        <form action="" method="POST" role="form">
            <legend>Form login</legend>
        
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Input name">
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" name="password" placeholder="Input name">
            </div>
        
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
        <hr>
        
    </div>
    
</body>
</html>