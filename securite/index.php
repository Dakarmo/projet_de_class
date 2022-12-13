<?php
session_start();
include 'config/conf.php';
require 'controllers/Session.php';
require 'controllers/user.php';
if(isset($_GET['page'])){
    switch(DecryptData($_GET['page'])){
        case 'home':
            Home();
            break;
        case 'login':
            UserLogin();
            break;
        case 'disconnect':
            Disconnect();
            break;
        default :
            UserLogin();
    }
}else{
    UserLogin();
}