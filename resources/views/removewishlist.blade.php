@php
session_start();
$id = 0;
if(isset($_GET['id'])){
    $id = $_GET['id'];
    if(isset($_SESSION["wishlist"])){
        unset($_SESSION["wishlist"][$id]);
    }
}
header('location:wishlist');
exit;
@endphp