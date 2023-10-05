<?php
require_once '../Model/DbConfig.php';

if(isset($_GET['action'])){

    $action = $_GET['action'];
}else{
    $action = '';
}
$tableName ='members';
$successArr = [];
switch($action){
    case 'add':
        if(isset($_POST['add_user'])){
            $name = $_POST['name'];
            $birthday = $_POST['birthday'];
            $hometown = $_POST['hometown'];
            echo '<pre>';
            print_r($_POST);
            if($db->insertData($name, $birthday, $hometown)){
                $successArr[] = 'add_success';
            }
        }
        require_once '../View/members/add_user.php';
        break;
    
    case 'edit':
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            // echo    $id;
            $dataId = $db->getDataById($tableName,$id);
            if(isset($_POST['update_user'])){
                print_r(($_POST['update_user']));
                $name = $_POST['fullname'];
                $birthday = $_POST['birthday'];
                $hometown = $_POST['hometown'];
                $db->updateData($id, $name, $birthday, $hometown);
                header('location:index.php?controller=member&action=list');
        }
        }
        require_once ('../View/members/edit_user.php');
        break;


    case 'delete':
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            // echo    $id;
            $dataId = $db->getDataById($tableName,$id);
            if(isset($_POST['delete_user'])){
                $db->deleteData($id);
                header('location:index.php?controller=member&action=list');
            }
        }
        require_once '../View/members/delete_user.php';
        break;

    case 'list':
        $db->queryList($tableName);
        $data = $db->getAllData($tableName);
        require_once '../View/members/list.php';
        break;

    case 'search_user':

        if(isset($_GET['keyword'])){
            $key = $_GET['keyword'];
            // print_r($key);
            // get data drom Modal: DbConfig.php
            $dataSearch=$db->getDataSearch($tableName, $key);
        }
        require_once '../View/members/search_user.php';
        break;
        
    default:
        require_once '../View/members/list.php';
        break;
    
}


?>