<?php
include 'database.php';
$obj = new database();

if(isset($_GET['id'])){
     $obj->deletedata($_GET['id']);
}
