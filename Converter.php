<?php
namespace Tisikkirlir;

class Converter {

    public static function convert($message)
    {
        return preg_replace('/a|e|ı|o|ö|u|ü/u', 'i', preg_replace('/A|E|I|O|Ö|U|Ü/u', 'İ', $message));
    }

}
