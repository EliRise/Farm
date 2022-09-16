<?php
require_once 'All_Animals.php';


class Cow extends All_animals
{
    function __construct()
    {
        $this->idAnimal = parent::$id++;
        $this->product = "Молоко";
    }
        function Get_Product()
    {
        return rand(8,12);
    }
}
?>