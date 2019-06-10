<?php
if(method()=='POST'){
    $result=signup();
    if(isset($result['error'])){
        redirect($_ENV['SITE_URL'].'signup?erro');
    }else{
        redirect($_ENV['SITE_URL'].'signup/done');
    }
}else{
    if(segment(3)=='done'){
        $data=[
            'title'=>"Sucesso",
            'msg'=>"Conta criada com sucesso. Você já pode fazer entrar no site."
        ];
        view("msg",$data);
    }else{
        $data=[
            'title'=>"Criar conta"
        ];
        view("signup",$data);
    }
}
?>
