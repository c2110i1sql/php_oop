<?php 
class Addition implements ICaculator {
    public $a;
    public $b;

    public function setNumber($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function excecute()
    {
        return $this->a + $this->b;
    }
}