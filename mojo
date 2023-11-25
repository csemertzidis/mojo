<?php 

//do not show wornings
error_reporting(E_ERROR | E_PARSE);

include_once("mojos/basicmojos.php");


echo "\n";
echo "|------------------------------------------|\n";
echo "|               mojo works                 |\n";
echo "|------------------------------------------|\n\n";
echo defineMojo($argv[1])[0]." - ".defineMojo($argv[1])[1];


echo "\n\n\n|------------------------------------------|\n";

