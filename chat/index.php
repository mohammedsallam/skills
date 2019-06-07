<?php
session_start();


if (isset($_SERVER['HTTP_REFERER'])){
    header('location: examples/default.html');
    exit();
} else {
    echo '<span>You cant access chat now</span>';
    exit();
}


if (isset($_SESSION['user_email']) || isset($_SESSION['admin-emil'])){
    header('location: examples/default.html');
    exit();
} else {
    echo 'This page not exists';
}







