<?php 
 //simple page redirect 
 function redirect($page){
    header('location: ' . URLROOT . '/' .$page);
 }
?>