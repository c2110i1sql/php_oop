<?php 
include 'DB.php';
// include 'Cat.php';

// $cat = new Cat("Mèo mướp", 2, 'Đực');
// $cat1 = new Cat("Mèo tam thể", 2, 'Cái');


// echo '<pre>';
// // $cat->name;
// // $cat->gender;
// $cat->runing();
// $cat->eating();
// $cat1->runing();
// $cat1->eating();

$db = new DB;
// echo '<pre>';
$cats = $db->query('category');


// print_r($cats);

// $eb->query('category'); //=> "SELECT * FROM category"
// $eb->d
// elete('category', 1); //=> "DELETE FROM category WERe id = 1"
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