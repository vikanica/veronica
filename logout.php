<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['surname']);
unset($_SESSION['phone_number']);
unset($_SESSION['notes']);
unset($_SESSION['email']);
unset($_SESSION['a']);
header('Location: index.php');
