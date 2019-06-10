<?php
if(method()=='POST'){

}else{
    $data=[
        'title'=>"Criar conta"
    ];
    view("signup",$data);
}
?>
