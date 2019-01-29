<?php
// 2 Написать класс для работы с временем, необходимо получать текущее время и выводить его в нескольких форматах. Форматы необходимо оформить как строковые константы.

class DateWorker extends DateTime 
{
    const FORMAT = ["Y -- m -- D",
              "D - M - Y",
              "D - M - Y H:i:s",
             ];
    public $format;

    /**
    * @param int $format
    * @return string
    */
    public function formattedTime(int $format)
    {
        $this->format = self::FORMAT[$format];
        return parent::format($this->format);
    }
}

$date = new DateWorker();
var_dump($date->formattedTime(0));