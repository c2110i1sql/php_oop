<?php 
class Cat {
    // đặc điểm, là các biến
    public $name;
    public $age;
    public $gender;

    public function __construct($n, $a, $g)
    {
        $this->name = $n;
        $this->age = $a;
        $this->gender = $g;
    //    echo 'Hàm __construct luôn chạy trước</br />';
    }

    public function __destruct()
    {
    //    echo '</br />Hàm _destruct luôn chạy sau';
    }

    // các phương thức
    public function runing()
    {
        if ($this->gender == 'Đực') {
            echo 'Mèo này đang chạy</br />';
        } else {
            echo 'Mèo này đang ngủ nướng</br />';
        }
       
    }

    public function eating()
    {
        if ($this->gender == 'Đực') {
            echo 'Mèo này đang ăn</br />';
        } else {
            echo 'Mèo này đang ngủ nướng</br />';
        }
       
    }

}
