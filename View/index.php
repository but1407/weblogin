<?php

include_once "../Model/Dbconfig.php";
$db = new Database;
$db -> connect();
echo '<pre>';
print_r($_GET);



if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
}else{
    $controller = '';
}
switch($controller){
    case 'member':
        require_once '../Controller/members/index.php';
    
}

?>