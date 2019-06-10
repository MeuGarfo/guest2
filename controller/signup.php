<?php
if(method()=='POST'){
    $result=signup();
    if(isset($result['error'])){
        redirect($_ENV['SITE_URL'].'signup?erro');
    }else{
        redirect($_ENV['SITE_URL']);
    }
}else{
    $data=[
        'title'=>"Criar conta"
    ];
    view("signup",$data);
}
?>
