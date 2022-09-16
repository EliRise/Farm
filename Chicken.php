<?php 
require_once 'All_Animals.php';


class Chicken extends All_animals
{
    function __construct()
    {
        $this->idAnimal = parent::$id++;
        $this->product = "Яйца";
    }
       function Get_Product()
    {
        return rand(0,1);
    }
}
?>