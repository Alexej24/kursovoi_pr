<?php
require_once 'config/connect.php';

$data_id = $_GET['id'];
$table_name = $_GET['table_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE_SURF-BD</title>
</head>
<body>
<style>
    body{font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}
</style>

<h3>UPDATE DATA</h3>

<?php
switch ($table_name) {
    case 'phone_plan':
        $data = mysqli_query($connect, "SELECT * FROM `$table_name` WHERE `id` = '$data_id'" );
        $data = mysqli_fetch_assoc($data);?>
        <form action="vendor/update.php" method="post">
            <input type="hidden" name="table_name" value="phone_plan">
            <input type="hidden" name="id" value="<?= $data['id']?>">
            <p>TITLE</p>
            <input type="text" name="phone_plan_title" value="<?= $data['phone_plan_title']?>">
            <p>DESCRIPTION</p>
            <input type="text" name="ph_pl_description" value="<?= $data['ph_pl_description']?>">
            <p>PRICE</p>
            <input type="text" name="phone_plan_price" value="<?= $data['phone_plan_price']?>">
            <button type="submit">update data</button>
        </form>
        <?php break;
    case 'clients':
        $data = mysqli_query($connect, "SELECT * FROM `$table_name` WHERE `id` = '$data_id'" );
        $data = mysqli_fetch_assoc($data); ?>
        <form action="vendor/update.php" method="post">
            <input type="hidden" name="table_name" value="clients">
            <input type="hidden" name="id" value="<?= $data['id']?>">
            <p>FULL_NAME</p>
            <input type="text" name="full_name" value="<?= $data['full_name']?>">
            <p>PASS_SER</p>
            <input type="text" name="pass_ser" value="<?= $data['pass_ser']?>">
            <p>PASS_NUM</p>
            <input type="text" name="pass_num" value="<?= $data['pass_num']?>">
            <p>PHONE_NUM</p>
            <input type="text" name="phone_num" value="<?= $data['phone_num']?>">
            <button type="submit">update data</button>
        </form>
        <?php break;
    case 'complementary_services':
        $data = mysqli_query($connect, "SELECT * FROM `$table_name` WHERE `id` = '$data_id'" );
        $data = mysqli_fetch_assoc($data); ?>
        <form action="vendor/update.php" method="post">
            <input type="hidden" name="table_name" value="complementary_services">
            <input type="hidden" name="id" value="<?= $data['id']?>">
            <p>CONNECT_DATE</p>
            <input type="text" name="connect_date" value="<?= $data['connect_date']?>">
            <p>DISCONN_DATE</p>
            <input type="text" name="disconn_date" value="<?= $data['disconn_date']?>">
            <p>TITLE</p>
            <input type="text" name="compl_serv_title" value="<?= $data['compl_serv_title']?>">
            <p>PRICE</p>
            <input type="text" name="compl_serv_price" value="<?= $data['compl_serv_price']?>">
            <p>DESCRIPTION</p>
            <input type="text" name="serv_description" value="<?= $data['serv_description']?>">
            <button type="submit">update data</button>
        </form>
       <?php break;
    case 'agreement':
        $data = mysqli_query($connect, "SELECT * FROM `$table_name` WHERE `id` = '$data_id'" );
        $data = mysqli_fetch_assoc($data); ?>
        <form action="vendor/update.php" method="post">
            <input type="hidden" name="table_name" value="agreement">
            <input type="hidden" name="id" value="<?= $data['id']?>">
            <p>PHONE_NUM</p>
            <input type="text" name="phone_num" value="<?= $data['phone_num']?>">
            <p>REG_DATE</p>
            <input type="text" name="reg_date" value="<?= $data['reg_date']?>">
            <button type="submit">update data</button>
        </form>
       <?php break;
        case 'payment':
          $data = mysqli_query($connect, "SELECT * FROM `$table_name` WHERE `id` = '$data_id'" );
          $data = mysqli_fetch_assoc($data); ?>
          <form action="vendor/update.php" method="post">
              <input type="hidden" name="table_name" value="payment">
              <input type="hidden" name="id" value="<?= $data['id']?>">
              <p>PRICE_PP</p>
              <input type="text" name="price_pp" value="<?= $data['price_pp']?>">
              <p>PRICE_CS</p>
              <input type="text" name="price_cs" value="<?= $data['price_cs']?>">
              <p>PAY_DATE</p>
              <input type="text" name="pay_date" value="<?= $data['pay_date']?>">
          </form>
         <?php break;
}?>

</body>
</html>