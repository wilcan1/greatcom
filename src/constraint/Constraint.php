<?php

namespace App\src\constraint;

class Constraint
{
    public function notBlank($name, $value)
    {
        if(empty($value)) {
            return '<p>Le champ '.$name.' saisi est vide</p>';
        }
    }
    public function minLength($name, $value, $minSize)
    {
        if(strlen($value) < $minSize) {
            return '<p>Le champ '.$name.' doit contenir au moins '.$minSize.' caractères</p>';
        }
    }
    public function maxLength($name, $value, $maxSize)
    {
        if(strlen($value) > $maxSize) {
            return '<p>Le champ '.$name.' doit contenir au maximum '.$maxSize.' caractères (chiffres et lettres confondus)</p>';
        }
    }
    public function validePassword($name, $value)
    {
        if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])#', $value));
    }
    public function valideMail($name, $value)
    {
        if(filter_var($value, FILTER_VALIDATE_EMAIL));
    }
}