<?php

namespace App;

class Calculate
{
    
    public function getAreaOfRectangle($length, $width)
    {
        return $length*$width;
    }
    public function ptbac1($a, $b)
    {
      
       if($a==0){
           return 'pt vo nghiem';
       }
       else{
           return -$b/$a;
       }
    }

}