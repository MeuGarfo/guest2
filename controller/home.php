<?php
$data=[
    'title'=>'Guest2',
    'user'=>isAuth()
];
view("home",$data);
?>
