<?php 

namespace App\Utils;

class Calculator 
{
    public function add(int $a, int $b): int 
    {
        return $a + $b;
    }
    public function substract(int $a, int $b): int 
    {
        return $a - $b;
    }
}