<?php
session_start();

unset($_SESSION['authenticated']);
unset($_SESSION['user']);

header('location: ../index.php');