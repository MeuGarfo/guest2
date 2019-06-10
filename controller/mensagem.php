<?php
if(method()=='POST'){
    $result=criarMensagem();
    if(isset($result['error'])){
        redirect($_ENV['SITE_URL'].'?erro');
    }else{
        redirect($_ENV['SITE_URL']);
    }
}else{
    //apagar mensagem
    $id=segment(3);
    $op=segment(4);
    if(is_numeric($id) && $op=='apagar'){
        apagarMensagem($id);
        redirect($_ENV['SITE_URL']);
    }
}

function apagarMensagem($id){
    $db=db();
    $where=[
        'id'=>$id
    ];
    $db->delete('mensagens',$where);
}

function criarMensagem(){
    $user=isAuth();
    $body=@$_POST['body'];
    $body=limparBody($body);
    $bodySize=mb_strlen($body);
    if($bodySize>1 && $bodySize<60 && $user){
        $data=[
            'body'=>$body,
            'created_at'=>time(),
            'user_id'=>$user['id']
        ];
        $db=db();
        $result=$db->insert('mensagens',$data);
    }else{
        $result=false;
    }
    if($result){
        return true;
    }else{
        return ['error'=>'unknown_error'];
    }
}
function limparBody($body){
    return trim($body);
}
?>
