<?php 
    include_once "connect.php";
    include_once "plugins.php";
    
    $id = $_GET['id'];
    $object = new Book;
    echo $object->readMore($id);

?>