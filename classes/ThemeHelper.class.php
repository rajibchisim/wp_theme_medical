<?php
/**
 *
 */
class ThemeHelper
{
    public static function rgbTorgba($rgb, $a)
    {
        return 'rgba('.hexdec(substr($rgb, 1, 2)).','.hexdec(substr($rgb, 3, 2)) .','.hexdec(substr($rgb, 5, 2)).','.$a.')';
    }
    public static function is_rgba($color)
    {
        if (preg_match('/[rR][gG][bB][aA] *\(.*\)/', $color)) {
            return true;
        }
        return false;
    }
    public static function is_rgb($color)
    {
        if (preg_match('/[rR][gG][bB] *\(.*\)/', $color)) {
            return true;
        }
        return false;
    }
}
