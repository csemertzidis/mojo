<?php

function defineMojo($arg){

    $args = array();

      if (empty($arg)){
        $args = array(
             "Ignorant",
             "Learn Mojo with php mojo list:commands",
        );
        return $args;
    }

    //split args in an array of two ellements before : and after :
    $args = explode(":", $arg);

    //if there is no : in the arg, then the first element is the name of the mojo and the second is the value
    if(count($args) == 1){
        $args[1] = $args[0];
        $args[0] = "mojo";
        return $args;
    }

    return $args;
   
}