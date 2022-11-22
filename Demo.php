<?php 
class Demo {
    // public $id;
    // public $name;
    public $data = [
        'id' => 1,
        'name' => 'Tên của cái gì đó',
        'email' => ''
    ];

    public function __get($key)
    {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }
    }

    public function __set($key, $value)
    {
        if (isset($this->data[$key])) {
            $this->data[$key] = $value;
        }
    }

    public function __call($fn_name, $argc)
    {
        print_r($argc);
        echo 'Phuogn thức <b>'.$fn_name.'</b> không tồn tại trong Demo';
    }
}