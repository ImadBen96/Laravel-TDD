<?php

namespace App\BackingClasses;

use Illuminate\Support\Str;

class Char
{
//    public function koko() {
//        return "welcome to koko !!";
//    }

    public function getCamelCase(string $string)
    {
        return Str::camel($string);
    }

}
