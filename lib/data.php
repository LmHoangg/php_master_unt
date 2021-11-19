<?php
 function show_array($data){
     if(is_array($data)){
         echo "<pre>";
         echo print_r($data);
         echo "<pre>";
     }
 }