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
        $sql = "INSERT INTO $table SET ";
        if (is_array($data)) {
            foreach($data as $key => $value) {
                $sql .= " $key = '$value', ";
            }
            $sql = rtrim($sql, ', ');
            return mysqli_query($this->conn, $sql);
        } 

        return false;
    }

    public function update($table, $data, $id)
    {
        $sql = "UPDATE $table SET ";

        if (is_array($data)) {
            foreach($data as $key => $value) {
                $sql .= " $key = '$value', ";
            }

            $sql = rtrim($sql, ', '). " WHERE id = $id";
            return mysqli_query($this->conn, $sql);
        } 

        return false;
    }
}

