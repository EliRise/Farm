<?php
require_once 'Farm.php';
require_once 'All_Animals.php';
require_once 'Cow.php';
require_once 'Chicken.php';


$farm = new Farm(); // Создаем ферму

$farm->Add_Animal(new Cow);
for ($i = 0; $i < 10; $i++) 
{ 
    $farm->Get_Animal(new Cow);
}
$farm->Add_Animal(new Chicken);
for ($i = 0; $i < 20; $i++)
{ 
    $farm->Get_Animal(new Chicken);
}


$farm->Count_Animals(); //в хлеве 10 коров и 20 кур


$farm->Get_Week();//произвели сбор продукции 


echo PHP_EOL."съездили на рынок, купили животных".PHP_EOL;
for ($i = 0; $i < 5; $i++){ 
    $farm->Get_Animal(new Chicken);
}
$farm->Get_Animal(new Cow);

$farm->Count_Animals();

$farm->Get_Week();

?>