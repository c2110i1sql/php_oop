<?php 
class DB {
    public $conn;

    public function __construct()
    {
       $this->conn = mysqli_connect('localhost','root','','demo_shopping');
    }

    public function query($table)
    {
        $result = [];
        $sql = "SELECT * FROM $table";
        $query = mysqli_query($this->conn, $sql);

        while ($row = mysqli_fetch_object($query)) {
           $result[]  = $row;
        }

        return $result;
    }

    public function delete($table, $id)
    {
       return mysqli_query($this->conn, "DELETE FROM $table WHERE id = $id");
    }

        /***
         * $data = [
         *  'name' => 'Áo name',
         * 'status' => 1
         * ]
         */
    public function create($table, $data)
    {
        if (is_array($data)) {
            // "INSERT INTO $table SET key = 'value'"
        } 

        return false;
    }

    public function update($table, $data, $id)
    {
        if (is_array($data)) {
            // "INSERT INTO $table SET key = 'value' WHERE id = $id"
        } 

        return false;
    }
}

