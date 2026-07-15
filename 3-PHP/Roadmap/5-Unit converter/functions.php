<?php

function debuguear($variable){
    echo "<pre>";
	    var_dump($variable);
    echo "<pre>";
    exit();
}

//TEMPERATURE
function celsiusToFahrenheit($temp){
    return ((int)$temp * 1.8) + 32;
}

function celsiusToKelvin($temp){
    return $temp + 273.15;
}

function fahrenheitToCelsius($temp){
    return $temp * 1.8 + 32;
}

function fahrenheitToKelvin($temp){
    return ($temp - 32) / 1.8;
}

function kelvinToCelsius($temp){
    return $temp - 273.15;
}

function kelvinToFahrenheit($temp){
    return ($temp - 273.15) * 1.8 + 32;
}

