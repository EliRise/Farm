<?php

class All_Animals
{
    static $id  = 1; 
    public $idAnimal = 0;
    public $product;
    protected function Get_Product(){}
    public function Name_Class()
    {
        return static::class;
    }
}

?>