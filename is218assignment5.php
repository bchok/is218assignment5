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



?>