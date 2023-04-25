<?php 

require 'data.php';
require 'classes.php';

foreach ($nomes as $nome) {
    echo $nome . "<br>";
}

//create a new client
$client = new Client();
$client->setName('Daniel');

// //create a new product
// $product = new Product();
// $product->setName('Mouse');








?>

<!-- 
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    Data: 25/04/2023
 -->