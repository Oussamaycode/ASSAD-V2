<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../login.php');
    exit;
}

require_once '../utilisateur.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $userId = (int) $_POST['id']; 
    $users = new Utilisateur(null, null, null, null);
    $users->banuser($userId); 
}

header('Location: code.php'); 
exit;
