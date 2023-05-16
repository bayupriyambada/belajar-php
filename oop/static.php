<?php

class staticMethod
{
    // definisi fungsi statik
    public static function staticFunc()
    {
        echo "Ini adalah static function method";
    }
}
staticMethod::staticFunc();
echo "<br>";

class staticMethod2
{
    public static $oop = "Ini adalah statik function v2";
    public static function staticFunc2()
    {
        
    }
}
staticMethod2::staticFunc2();
