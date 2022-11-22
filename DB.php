<?php 
class DB {
    private $conn;
    protected $table;
    public function __construct()
    {
       $this->conn = mysqli_connect('localhost','root','','demo_shopping');
    }

    public static function query()
    {
        $_this = new static;
        $result = [];
        $sql = "SELECT * FROM $_this->table";
        $query = mysqli_query($_this->conn, $sql);

        while ($row = mysqli_fetch_object($query)) {
           $result[]  = $row;
        }

        return $result;
    }

    public static function delete($table, $id)
    {
        $_this = new static;
       return mysqli_query($_this->conn, "DELETE FROM $table WHERE id = $id");
    }

        /***
         * $data = [
         *  'name' => 'Áo name',
         * 'status' => 1
         * ]
         */
    public static function create($table, $data)
    {
        $_this = new static;
        $sql = "INSERT INTO $table SET ";
        if (is_array($data)) {
            foreach($data as $key => $value) {
                $sql .= " $key = '$value', ";
            }
            $sql = rtrim($sql, ', ');
            return mysqli_query($_this->conn, $sql);
        } 

        return false;
    }

    public static function update($table, $data, $id)
    {
        $_this = new static;
        $sql = "UPDATE $table SET ";

        if (is_array($data)) {
            foreach($data as $key => $value) {
                $sql .= " $key = '$value', ";
            }

            $sql = rtrim($sql, ', '). " WHERE id = $id";
            return mysqli_query($_this->conn, $sql);
        } 

        return false;
    }

    // public function __get($name)
    // {
    //     echo 'Thuộc tính <b>'. $name. '</b> không tồn tại trong lớp DB này';
    // }
    // public function __set($name, $value)
    // {
    //     echo 'bạ đang gán giá trị <b>'.$value.'</b> cho thuộc tính <b>'. $name. '</b> không tồn tại trong lớp DB này';
    // }
}

