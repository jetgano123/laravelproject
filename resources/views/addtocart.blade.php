@php

use phpDocumentor\Reflection\Location;
session_start();
$id = 0;
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
if(!isset($_SESSION["cart"])){
    $_SESSION["cart"] = array($id => $id);
}else{
    $_SESSION["cart"]["$id"] = $id;
}
header('location:cart');
exit;
@endphp