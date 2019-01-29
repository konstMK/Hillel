<?php
/*
* 4. Спроектируйте класс для работы со строками, класс должен иметь как публичные
* так и приватные методы, право решение какие методы какими делать стоит за вами, 
* но хорошее правило делать приватными только те методы которые 
* будут использоваться внутри класса.
* Список того что этот класс должен уметь:
*  а) Делать строку в верхний регистр
*  б) Заменять пробелы на + при это строка должна быть в верхнем регистре
*  в) Заменять О на 0 (ноль), I на 1 (один), S на $
*  г) Искать подстроку в строке (функция strstr http://php.net/manual/ru/function.strstr.php )
*  д) Создавать случайную строку из имеющегося набора букв (в нижнем регистре) и 
*     цифр и возвращать ее в верхний регистр
***/

class StringAbuser
{
    public $string;
    public $rand_string;
    public $str_len;

    public function __construct($text)
    {
        $this->string = $text;  
    }

    private function stringToUp()
    {
        return strtoupper($this->string);
    }

    public function spaceToPlus()
    {
        return str_replace(' ', '+', $this->string);
    }

    public function oToZero()
    {
        return str_replace('O', '0', $this->string);
    }

    public function iToOne()
    {
        return str_replace('I', '1', $this->string);
    }  

    public function sToDollar()
    {
        return str_replace('S', '$', $this->string);
    }

    public function strStr($needle)
    {
        return strstr($this->string, $needle);
    }

    public function randomString()
    {
        $this->str_len = strlen($this->string);
        
        for($i = 0; $i < $this->str_len; $i++)
        {
            $this->randstring .= strtoupper($this->string[rand(0, $this->str_len)]);
        }
        
        return $this->randstring;
    }

    //when access object as string, it uppercase the input text
    public function __ToString()
    {
        return $this->stringToUp();
    }
}
$test = 'this Is maddness bOb77';

echo $Str = new StringAbuser($test);
echo  "\n";
echo $Str->spaceToPlus();
echo  "\n";
echo $Str->oToZero();
echo  "\n";
echo $Str->strStr('mad');
echo  "\n";
echo $Str->randomString(1);
