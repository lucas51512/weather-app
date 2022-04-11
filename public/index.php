<?php

if ($_SERVER["PATH_INFO"] === "/clima-now"){
    require "main.php";
    require "src/php/openWeatherMapApi.php";
    require "src/vendor/autoload.php";
}; 
