<?php
/*
* 3. Написать класс в котором будет метод который на вход принимает массив из 
* произвольных цифр и букв, а возвращает массив в котором при ключе 'number' 
* будут только цифры, а в 'letters' только буквы.
* */

class ArrayDelimiter
{
    private $storage = [];
    public $result = [];
    public $delim;

    public function __construct(array $inc_array, $delim = 'numbers')
    {
        $this->storage = $inc_array;
        $this->result = $result;
        $this->delim = $delim;
    }

    public function delimiteArray()
    {
        $i = 0;
        foreach ($this->storage as $value)
        {
            if ($this->delim == 'numbers') {    
                if (is_int($value))
                    $this->result[$i] = $value;
                $i++;
            } 

            if ($this->delim == 'letters') {
                if (is_string($value))
                    $this->result[$i] = $value;
                $i++;
            }
        }
    return $this->result;
    }
}

$array = [1,'s',5,2,'t',6,7,'o','r',6,'a',5,6,'g',7,3,2,'e',];

$class = new ArrayDelimiter($array, 'letters');
var_dump($class->delimiteArray());
