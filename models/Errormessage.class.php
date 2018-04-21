<?php
/**
 * Created by PhpStorm.
 * User: alpho
 * Date: 18/04/2018
 * Time: 23:31
 */

class Errormessage
{
    public static function  message($errors){
        if($errors!= ''){
            foreach ($errors as $t) {
                echo '<a style="color: red">'.$t . '</a><br>';
            }
        }
    }
}