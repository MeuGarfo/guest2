<?php
//Criado por Anderson Ismael
//31 de janeiro de 2019
function e(string $text, bool $print=true){
    if ($print) {
        print htmlentities($text);
    } else {
        return htmlentities($text);
    }
}
