<?php 
include 'DB.php';
include 'Category.php';
include 'Product.php';

$products = Product::query();


// $demo->
echo '<pre>';
// print_r($products);
echo '</pre>';

$cats = Category::query();


if (isset($_POST['name'])) {
    if (Category::create('category',$_POST)) {
        header('location: index.php');
    }
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
        <h2>Danh mục</h2>
        <hr>
        
        <form action="" method="POST" role="form">
            <legend>Form title</legend>
        
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Input name">
            </div>
        
            <div class="form-group">
                <label for="">Status</label>
                
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="1" checked>
                        Hiển thị
                    </label>
                </div>
                 
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="0" >
                        Ẩn
                    </label>
                </div>
            </div>
        
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($cats as $cat) : ?>
                <tr>
                    <td><?php echo $cat->id;?></td>
                    <td><?php echo $cat->name;?></td>
                    <td><?php echo $cat->status;?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        
    </div>
    
</body>
</html>