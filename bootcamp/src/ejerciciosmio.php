<?php
mb_internal_encoding('UTF-8');

function sumArray($values) {
    $sum = 0;
    foreach ($values as $key => $value) {
        $sum += $value;
    }
    return $sum;
}

function findMax($values) {
    $max = $values[0];
    foreach ($values as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
    return $max;
}

function averageAge($people) {
    $avg = 0;
    foreach ($people as $person) {
        $avg += $person["age"];
    }
    return $avg / count($people);
}

function filterAge($people, $edad) {
    $peopleFiltered = [];
    foreach ($people as $person) {
        if ($person["age"] >= $edad) {
            array_push($peopleFiltered, $person);
        }
    }
    return $peopleFiltered;
}

function reverseString(string $string): string
{
    $chars = mb_str_split($string);
    return implode('', array_reverse($chars));
}

function reverseWords(string $words): string
{
    $arrayWords = explode(' ',$words);
    return implode(' ', array_reverse($arrayWords));
}

function reverseCharactersInWords($text) : string
{
    $chars = mb_str_split($text);
    $words = array_reverse(explode(' ',implode('', array_reverse($chars))));
    return implode(' ', $words);
}