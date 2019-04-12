<?php

class Model_news
{
   function get_date()
   {
       $a = array(
             array(
                 'Год'=>'2019',
                 'Месяц'=>'Аперель',
                 'Число'=>'14'
             ),
             array(
                 'Год'=>'2020',
                 'Месяц'=>'декабрь',
                 'Число'=>'20'
             )
       );

       return $a;
   }

}