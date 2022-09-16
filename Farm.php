<?php
   class Farm
   {
    public $types_animals = array();
    public $result;

    public function Get_Animal($animal)
    {
        array_push($this->types_animals[$animal->Name_Class()], $animal);
    }
 
    public function Count_Animals()
    {
        echo "Количество животных по категориям: " . PHP_EOL;
        foreach ($this->types_animals as $animal => $value) 
        {
            echo "$animal: " . count($value) . PHP_EOL;
        }
    }

    
    public function Get_Week()   //Сбор и вывод продукции
    {

        echo PHP_EOL . "Производим сбор продукции".PHP_EOL;
        
        for ($i=0; $i < 7; $i++) //Считакс сколько собрали
        { 
            $this->Get_Day();
        }

        echo "Произведенная продукция за неделю(по категориям): ". PHP_EOL;
        
        foreach ($this->result as $type => $count) 
        {
            echo  $type . ": " . $count .PHP_EOL;
        }
       
    }
    
    public function Add_Animal($animal)  //Если добавляем животных 
    {
        $this->types_animals[$animal->Name_Class()] = array();
    }
    public function Get_Day()
    {

       
        foreach ($this->types_animals as $nameanimal => $value)
         {
           
            $type = $value[0]->product; //тип продукта
            $sum = 0;
            $this->result[$type] = $sum;
            
            foreach ($value as $animal) // подсчет продукции у определенных животных
            {
                $sum += $animal->Get_Product();
            }
            $this->result[$type] += $sum;
        }

    }
}
   
?>