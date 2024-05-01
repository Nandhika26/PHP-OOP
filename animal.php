<?php

    class animal{

    public $name;
    public $legs = "4";
    public $cold_blooded;

    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function legs()
    {
        return $this->legs = 2;
    }

    public function cold_blooded()
    {
        return $this->cold_blooded = "no";
    }
}
?>
