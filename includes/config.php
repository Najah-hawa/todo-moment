<?php
//Aktivera felrapportering
error_reporting(-1);
ini_set("display_errors", 1);


 //autoinkludering av klasser
 spl_autoload_register(function ($class_name) {
    include './classes/' . $class_name . '.class.php'; //sökväg till mappen för dina klasser
});

// aktivera sessioner 
session_start();

?>