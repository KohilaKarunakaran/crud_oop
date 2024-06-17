<?php

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if(isset($_GET['action']) && isset($_GET['id'])) {
            $action = $_GET['action'];
            $id = $_GET['id'];
            if($action == 'edit') {
            } else if($action == 'delete') {
                }else if($action == 'add') {
                }
        }else {
        }
        break;
        case 'POST';
        if(isset($_POST['action']) && isset($_POST['id'])) {
            $action = $_POST['action'];
            $id = $_POST['id'];
            if($action == 'add') {
            }else if($action == 'update') {
            }
        }
        break;
        default:
}
?>