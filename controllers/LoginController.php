<?php 
require_once 'models/UserProvider.php';

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
 }

$user = null;
$error = null;
if (isset($_POST['email'], $_POST['password'])) {
   ['email' => $email, 'password' => $password] = $_POST;

   $userProvider = new UserProvider();
   $user = $userProvider->getByEmailAndPassword($email, $password);

   if (!$user) {
       $error = 'Пользователь с указанными учетными данными не найден';
   }
   else {
    $_SESSION['user'] = $user; 
   }
}

if (isset($_SESSION['user'])) {
    header('Location: /home');
 }
 
 
require_once('views/login.php');