<?php

namespace App\models;
session_start();

class Validator
{
    public static function preProcessing($data)
    {
        return htmlspecialchars(trim($data));
    }


    public static function validLength($name, $data, $field, $minLength = 3, $maxLength = 50)
    {
        if (mb_strlen($data) < $minLength) {
            $_SESSION['error'][$field] = "В поле \ " . $name . "\ должно быть указано не менее $minLength симв. \n";
            return false;
        }

        if (strlen($data) > $maxLength) {
            $_SESSION['error'][$field] = "В поле \ " . $name . "\ должно быть указано не более $maxLength симв. \n";
            return false;
        }
        unset($_SESSION['error'][$field]);
        return true;
    }

}