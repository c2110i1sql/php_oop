<?php 
class DB {
    public $conn;


    public function __construct()
    {
        // mở kết nói, gán chuỗi kết nối cho thuộc tính $conn
    }

    public function query($table)
    {
        // thực hiện truy vấn và trả về mảng dữ liệu trong CĐL
    }

    public function delete($table, $id)
    {
        // xóa dữ liệu trong bảng theo id
    }
}

$db = new DB;
$eb->query('category'); //=> "SELECT * FROM category"
$eb->delete('category', 1); //=> "DELETE FROM category WERe id = 1"