<?php
session_start();

require 'controllers/user.php';
if(isset($_GET['page'])){
    
    switch($_GET['page']){
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