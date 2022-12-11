<?php

require_once '../config/connect.php';

$table_name = $_POST['table_name'];
$id_phone_plan = $_POST['id_phone_plan'];
$id_agreement = $_POST['id_agreement'];
$id_client = $_POST['id_client'];
$id_compl_serv = $_POST['id_compl_serv'];
$phone_num = $_POST['phone_num'];
$reg_date = $_POST['reg_date'];
$full_name = $_POST['full_name'];
$pass_ser = $_POST['pass_ser'];
$pass_num = $_POST['pass_num'];
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
        mysqli_query($connect, "INSERT INTO `agreement` (`id`, `phone_num`, /*`id_phone_plan`, `id_client`, */`reg_date`) VALUES (NULL, '$phone_num', /*'$id_client', '$id_phone_plan',*/ current_timestamp());");
        header('Location: ../admin.php');
        break;
    case 'clients':
        mysqli_query($connect, "INSERT INTO `clients` (`id`, `full_name`, /*`id_agreement`,*/ `pass_ser`, `pass_num`, `phone_num`) VALUES (NULL, '$full_name', /*'$id_agreement',*/ '$pass_ser', '$pass_num', '$phone_num')");
        header('Location: ../admin.php');
        header('Location: ../index.php');
        break;
    case 'complementary_services':
        mysqli_query($connect, "INSERT INTO `complementary_services` (`id`, `connect_date`, /*`id_agreement`,*/ `disconn_date`, `compl_serv_title`, `compl_serv_price`, `serv_description`) VALUES (NULL, current_timestamp(), /*'$id_agreement',*/ current_timestamp(), '$compl_serv_title', '$compl_serv_price', '$serv_description')");
        header('Location: ../admin.php');
        break;
    case 'payment':
        mysqli_query($connect, "INSERT INTO `payment` (`id`, `price_pp`, `price_cs`, `pay_date` ) VALUES (NULL, '$price_pp', '$price_cs', current_timestamp());");
        header('Location: ../admin.php');
        break;
    case 'phone_plan':
        mysqli_query($connect, "INSERT INTO `phone_plan` (`id`, `phone_plan_title`, `ph_pl_description`, `phone_plan_price`) VALUES (NULL, '$phone_plan_title', '$ph_pl_description', '$phone_plan_price')");
        header('Location: ../admin.php');
        break;
}

?>