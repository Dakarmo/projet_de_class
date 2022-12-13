<?php

namespace apps\router;

class router
{
    public function route()
    {
        spl_autoload_register(function ($class) {
            include_once str_replace('\\', '/', $class) . ".php";
        });
        if (isset($_GET['goto'])) {
            switch ($_GET['goto']) {
                case 'user':
                    $user = new \controllers\users;
                    break;
                case 'reservation':
                    $user = new \controllers\reservation;
                    break;
            }
        } else {
            $user = new \controllers\users;
        }
    }
}
