@php
session_start();
$id = 0;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
if(!isset($_SESSION["wishlist"])){
    $_SESSION["wishlist"] = array($id => $id);
}else{
    $_SESSION["wishlist"][$id] = $id;
}
header('location:wishlist');
exit;
@endphp