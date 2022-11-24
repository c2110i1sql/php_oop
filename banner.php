<?php 
// include 'connect.php';
include 'connectPDO.php';
$image = '';
if (!empty($_FILES['image']['name'])) {
    $f = $_FILES['image'];
    $image = $f['name'];
    $tmp_name = $f['tmp_name'];

    move_uploaded_file($tmp_name,'uploads/'.$image);
}

if (isset($_POST['name'])) {
    
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO banner SET name = ?, image = ?, `desc` = ?";

    $stm = $conn->prepare($sql);
    $query = $stm->execute([$name, $image, $desc]);
    
    echo $sql;
    // $demo->
    echo '<pre>';
    var_dump($query);
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

    <link rel="stylesheet" href="summernote/summernote.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
    
    <div class="container">
        <hr>
        
        <form action="" method="POST" enctype="multipart/form-data">
            <legend>Form thêm mới banner</legend>
        
            <div class="form-group">
                <label for="">Banner name</label>
                <input type="text" class="form-control" name="name" placeholder="Input name">
            </div>

            <div class="form-group">
                <label for="">Content</label>
                
                <textarea name="desc" class="form-control desc"></textarea>
                
            </div>
            <div class="form-group">
                <label for="">Image</label>
                
                <input type="file" class="form-control" name="image" >
                
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
        <hr>
        
    </div>
    
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="summernote/summernote.min.js"></script>

    <script>
        $('.desc').summernote({
            height: 200
        });
    </script>
</body>
</html>

