@php
session_start();
$id = 0;
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
if(isset($_SESSION["cart"])){
    unset($_SESSION["cart"][$id]);
}
header('location:cart');
exit;
@endphp