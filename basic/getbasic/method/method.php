<?php
//Criado por Anderson Ismael
//15 de outubro de 2018

function method($RAW=false){
    $method=$_SERVER['REQUEST_METHOD'];
    if($RAW){
        return $method;
    }else{
        if($method=='POST'){
            return 'POST';
        }else{
            return 'GET';
        }
    }    
}
