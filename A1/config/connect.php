<?php
define('DB_HOST' , 'localhost');
define('DB_USER' , 'root');
define('DB_PASSWORD' , '');
define('DB_NAME', 'A1');

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$db = new PDO("mysql:host=localhost;dbname=A1", "root", "");

if (!$db) {
    die('errror connect to database!');
}

/*==PHONE_PLAN==*/

$phone_plan = [];    
if ($query = $db->query("SELECT * FROM `phone_plan`")) {
    $phone_plan = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}

/*==AGREEMENT==*/

$agreement = [];    
if ($query = $db->query("SELECT * FROM `agreement`")) {
    $agreement = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}

/*==CLIENTS==*/

$clients = [];    
if ($query = $db->query("SELECT * FROM `clients`")) {
    $clients = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}

/*==COMPLEMENTARY_SERVICEs==*/

$complementary_services = [];    
if ($query = $db->query("SELECT * FROM `complementary_services`")) {
    $complementary_services = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}

/*==PAYMENT==*/

$payment = [];    
if ($query = $db->query("SELECT * FROM `payment`")) {
    $payment = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}



























