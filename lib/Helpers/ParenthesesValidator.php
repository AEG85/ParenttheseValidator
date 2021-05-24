<?php


namespace AEG85\Helpers;


class ParenthesesValidator
{
    /**
     * This method will help you check a string containing opening and closing parentheses.
     * @param $string string
     * @return bool
     */
    public static function validateBrackets(string $string): bool
    {
        if (empty($string))
            return false;
        //RegExp pattern
        $exp = '/\A[^\(\)]*(\((?>[^\(\)]|(?1))*\)[^\(\)]*)+\z/';
        preg_match($exp, $string, $matches);
        if (empty($matches))
            return false;
        else
            return true;
    }
}