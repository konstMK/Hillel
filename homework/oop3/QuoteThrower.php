<?php 
/*2. Напишите класс функционал которого будет заключаться в отображении 
какой то умной цитаты (придумайте сами какие).*/

class QuoteThrower
{
  const LIB = [
    'Winter is coming! @ Game of Thrones',
    'Winter is a time to pause, reflect and renew for the coming Spring. @ Eileen Anglin',
    'Winter is much like unrequited love: cold and merciless. @ Kellie Elmore',
    'In the deep shivering winter, I can feel the joy of a dancing summer in my heart. @ Debasish Mridha ',
    'Winter is going, but who knows spring will come or not! @ Ali Rezavand Zayeri',
  ];
  
  public function throwQuote()
  {
    return self::LIB[array_rand(self::LIB)];
  }
}

$quote = new QuoteThrower();
echo $quote->throwQuote();
