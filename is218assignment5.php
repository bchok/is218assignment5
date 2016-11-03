<?php

$car = "ford fusion";
if(!empty($car) && isset($car)){
    echo 'you have selected a car type<br>';
}else if (empty($car)){
    echo 'a car exists but you have not specified what it is<br>';
}else if (is_null($car)){
    echo 'a car does not exist<br>';
}

$bike = '';
if (isset($bike) || empty($bike)){
    echo 'a bike in some form exists<br>';
}else if (is_null($bike)){
    echo 'a bike does not exists at all<br>';
}

$boat;
if(isset($boat)){
    echo 'hey there is a boat of a certain type<br>';
}else if(empty($boat)){
    echo 'what kind of boat exists<br>';
}else if(is_null($boat)){
    echo 'there is no value for the variable declared<br>';
}

$working = true;
if (isset($working)){
    echo 'your device is working<br>';
}else if(empty($working)){
    echo 'your device is not working<br>';
}else if(is_null($working)){
    echo 'no device status declared<br>';
}
/////////////////////////////////////////////////////

switch($car){
    case isset($car):
        echo 'you have selected a car type<br>';
        break;
    case empty($car):
        echo 'a car exists but you have not specified what it is<br>';
        break;
    case is_null($car):
        echo 'a car does not exist<br>';
        break;
    default:
        echo 'some form of invalid input was created<br>';
        break;
}

switch($bike){
    case (!isset($bike)):
        echo 'a bike in some form does not exist<br>';
        break;
    case (empty($bike)):
        echo 'a bike in some form exists<br>';
        break;
    case (is_null($bike)):
        echo 'nothing seems to exist<br>';
        break;
    default:
        echo 'please define some sort of bike<br>';
        break;
}

switch($boat){
    case (isset($boat)):
        echo 'a boat has been defined<br>';
        break;
    case (empty($bike)):
        echo 'a boat may exist but it may not be defined<br>';
        break;
    case (is_null($boat)):
        echo 'nothing exists or is defined<br>';
        break;
    default:
        echo 'im confused, please create something that is not null<br>';
        break;
}

switch($working){
    case (isset($working) || empty($working)):
        echo 'your device is working in some state<br>';
        break;
    case (is_null($working)):
        echo 'no status on your device at the moment<br>';
        break;
    default:
        echo 'I am unsure if a device exists<br>';
        break;
}



?>