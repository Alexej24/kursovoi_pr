<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$table_name = $_POST['table_name'];
$phone_num = $_POST['phone_num'];
$reg_date = $_POST['reg_date'];
$id_phone_plan = $_POST['id_phone_plan'];
$id_agreement = $_POST['id_agreement'];
$id_client = $_POST['id_client'];
$id_compl_serv = $_POST['id_compl_serv'];
$compl_serv_title = $_POST['compl_serv_title'];
$compl_serv_price = $_POST['compl_serv_price'];
$serv_description = $_POST['serv_description'];
$connect_date = $_POST['connect_date'];
$disconn_date = $_POST['disconn_date'];
$pay_date = $_POST['pay_date'];
$price_pp = $_POST['price_pp'];
$price_cs = $_POST['price_cs'];
$phone_plan_title = $_POST['phone_plan_title'];
$phone_plan_price = $_POST['phone_plan_price'];
$ph_pl_description = $_POST['ph_pl_description'];

switch ($table_name) {
    case 'agreement':
        mysqli_query($connect, "UPDATE `agreement` SET `phone_num` = '$phone_num', `reg_date` = '$reg_date' WHERE `agreement`.`id` = '$id'");
        break;
    case 'complementary_services':
        mysqli_query($connect, "UPDATE `complementary_services` SET `compl_serv_title` = '$compl_serv_title', `compl_serv_price` = '$compl_serv_price', `serv_description` = '$serv_description', `connect_date` = '$connect_date', `disconn_date` = '$disconn_date' WHERE `complementary_services`.`id` = '$id'");
        break;
    case 'payment':
        mysqli_query($connect, "UPDATE `payment` SET `pay_date` = '$pay_date', `price_pp` = '$price_pp', `price_cs` = '$price_cs' WHERE `payment`.`id` = '$id'");
        break;
    case 'phone_plan':
        mysqli_query($connect, "UPDATE `phone_plan` SET `phone_plan_title` = '$phone_plan_title', `phone_plan_price` = '$phone_plan_price', `ph_pl_description` = '$ph_pl_description'  WHERE `phone_plan`.`id` = '$id'");
        break;
}

header('Location: ../admin.php');
?>