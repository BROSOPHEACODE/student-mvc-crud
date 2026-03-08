<?php

    require_once 'app/controllers/StudentControllers.php';
    require_once 'config/database.php';

    // if(Database::connection()){
    //     echo "Your connect is succuess 👍";
    // }

    $controller = new StudentControllers();
    $page = $_GET['page'] ?? 'index';

    $id = $_GET['id'] ?? null;

    switch($page){
        case 'create':
            $controller->create();
            break;
        case 'edit':
            $controller->update($id);
            break;
        case 'destroy':
            $controller->destroy($id);
        default:
            $controller->index();
            break;
    }

?>