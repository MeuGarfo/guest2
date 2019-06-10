<?php
require 'basic/basic.php';
inc([
    'auth',
    'controller',
    'db',
    'e',
    'env',
    'error',
    'method',
    'redirect',
    'segment',
    'view'
]);
error();
switch(segment(2)){
    case false:controller("home");break;
    case 'logout':controller("logout");break;
    case 'mensagem':controller("mensagem");break;
    case 'signin':controller("signin");break;
    case 'signup':controller("signup");break;
    default:view('404');break;
}
