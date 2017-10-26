<?php
/**
 * Created by PhpStorm.
 * User: M_hacker
 * Date: 11.05.2017
 * Time: 12:14
 */
class urls{
    static function get_package_contents(){
        return $str = file_get_contents("package.json");
    }
    static function get_index(){
        return json_decode(self::get_package_contents())->url->index;
    }
}