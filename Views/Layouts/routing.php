<?php
$controllers = array(
    'usuarioComun' => ['index', 'register','start','error','info','modify','delete'],
    'admin' => ['index', 'register','start','error','info','modify','delete','update']

);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('usuarioComun', 'error');
    }
} else {
    call('usuarioComun', 'error');
}

function call($controller, $action)
{
    require_once('Controllers/' . $controller . 'Controller.php');

    switch ($controller) {
        case 'usuarioComun':
            require_once('Models/usuarioComun.php');
            $controller = new usuarioComunController();
            break;

        case 'admin':
            require_once('Models/admin.php');
            $controller = new adminController();
            break;
        default:
            # code...
            break;
    }
    $controller->{$action}();
}

