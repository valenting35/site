<?php 

function dataGet($data, $defaultValue = "") {
    if(isset($_GET[$data]))
    {
        $value = $_GET[$data];
    }
    else {
        $value = $defaultValue;
    }
    return $value;
}

?>