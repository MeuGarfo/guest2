<?php
//Criado por Anderson Ismael
//23 de janeiro de 2019

require_once('Migration.php');

function dropAll($db){
    $Migration=new Basic\Migration($db);
    return $Migration->dropAll();
}

function migrate($db){
    return migrateAll($db);
}

function migrateAll($db){
    $Migration=new Basic\Migration($db);
    return $Migration->migrateAll();
}

function truncate($db){
    return truncateAll($db);
}

function truncateAll($db){
    $Migration=new Basic\Migration($db);
    return $Migration->trincaAll();
}
?>
