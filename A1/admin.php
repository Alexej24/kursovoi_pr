<?php
require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN228</title>
  <link rel="stylesheet" href="css/admin.css">
</head>

<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>

<table class="table">
    <h1><?= $table_name = 'phone_plan';?></h1>
    <thead>
        <tr>
	        <th>ID</th>
            <th>TITLE</th>
            <th>DESCRIPTION</th>
            <th>PRICE</th>
            
    </thead>
    <tbody>
        <?php foreach ($phone_plan as $data) {?>
            <tr>
                <td><?=$data['id'];?></td>
                <td><?=$data['phone_plan_title'];?></td>
                <td><?=$data['ph_pl_description'];?></td>
                <td><?=$data['phone_plan_price'];?></td>
                <td><a href="update.php?id=<?=$data['id'];?>&table_name=<?=$table_name;?>">update</a></td>
                <td><a href="vendor/delete.php?id=<?=$data['id'];?>&table_name=<?=$table_name;?>">delete</td>
            </tr>
        <?php }?>
    </tbody>
</table>
<h3>ADD NEW DATA</h3>
<form class="form" action="vendor/create.php" method="post">
    <input type="hidden" name="table_name" value="<?=$table_name;?>">
    <div class="form__item">
        <p>TITLE</p>
        <input type="text" name="phone_plan_title">
    </div>
    <div class="form__item">
        <p>DESCRIPTION</p>
        <input type="text" name="ph_pl_description">
    </div>
    <div class="form__item">
        <p>PRICE</p>
        <input type="text" name="phone_plan_price">
        
    </div>
    <div class="form__item">
        <br>
        <button type="submit">add new data</button>
    </div>
</form>


<table class="table">
    <h1><?= $table_name = 'clients';?></h1>
    <thead>
        <tr>
	        <th>ID</th>
            <th>FULL_NAME</th>
            <th>PASS_SER</th>
            <th>PASS_NUM</th>
            <th>PHONE_NUM</th>
            
    </thead>
    <tbody>
        <?php foreach ($clients as $data) {?>
            <tr>
                <td><?=$data['id'];?></td>
                <td><?=$data['full_name'];?></td>
                <td><?=$data['pass_ser'];?></td>
                <td><?=$data['pass_num'];?></td>
                <td><?=$data['phone_num'];?></td>
                <td><a href="update.php?id=<?=$data['id'];?>&table_name=<?=$table_name;?>">update</a></td>
                <td><a href="vendor/delete.php?id=<?=$data['id'];?>&table_name=<?=$table_name;?>">delete</td>
            </tr>
        <?php }?>
    </tbody>
</table>
<h3>ADD NEW DATA</h3>
<form class="form" action="vendor/create.php" method="post">
    <input type="hidden" name="table_name" value="<?=$table_name;?>">
    <div class="form__item">
        <p>FULL_NAME</p>
        <input type="text" name="full_name">
    </div>
    <div class="form__item">
        <p>PASS_SER</p>
        <input type="text" name="pass_ser">
    </div>
    <div class="form__item">
        <p>PASS_NUM</p>
        <input type="text" name="pass_num">
    </div>
    <div class="form__item">
        <p>PHONE_NUM</p>
        <input type="text" name="phone_num">
    </div>
    <div class="form__item">
        <br>
        <button type="submit">add new data</button>
    </div>
</form>

<table class="table">
    <h1><?= $table_name = 'complementary_services';?></h1>
    <thead>
        <tr>
	        <th>ID</th>
            <th>CONNECT_DATE</th>
            <th>DISCONN_DATE</th>
            <th>TITLE</th>
            <th>PPRICE</th>
            <th>DESCRIPTION</th>
            
    </thead>
    <tbody>
        <?php foreach ($complementary_services as $data) {?>
            <tr>
                <td><?=$data['id'];?></td>
                <td><?=$data['connect_date'];?></td>
                <td><?=$data['disconn_date'];?></td>
                <td><?=$data['compl_serv_title'];?></td>
                <td><?=$data['compl_serv_price'];?></td>
                <td><?=$data['serv_description'];?></td>
                <td><a href="update.php?id=<?=$data['id'];?>&table_name=<?=$table_name;?>">update</a></td>
                <td><a href="vendor/delete.php?id=<?=$data['id'];?>&table_name=<?=$table_name;?>">delete</td>
            </tr>
        <?php }?>
    </tbody>
</table>
<h3>ADD NEW DATA</h3>
<form class="form" action="vendor/create.php" method="post">
    <input type="hidden" name="table_name" value="<?=$table_name;?>">
    <div class="form__item">
        <p>CONNECT_DATE</p>
        <input type="text" name="connect_date">
    </div>
    <div class="form__item">
        <p>DISCONN_DATE</p>
        <input type="text" name="disconn_date">
    </div>
    <div class="form__item">
        <p>TITLE</p>
        <input type="text" name="compl_serv_title">
    </div>
    <div class="form__item">
        <p>PPRICE</p>
        <input type="text" name="compl_serv_price">
    </div>
    <div class="form__item">
        <p>DESCRIPTION</p>
        <input type="text" name="serv_description">
    </div>
    <div class="form__item">
        <br>
        <button type="submit">add new data</button>
    </div>
</form>


<table class="table">
    <h1><?= $table_name = 'payment';?></h1>
    <thead>
        <tr>
	        <th>ID</th>
            <th>PRICE_PP</th>
            <th>PRICE_CS</th>
            <th>PAY_DATE</th>
            
    </thead>
    <tbody>
        <?php foreach ($payment as $data) {?>
            <tr>
                <td><?=$data['id'];?></td>
                <td><?=$data['price_pp'];?></td>
                <td><?=$data['price_cs'];?></td>
                <td><?=$data['pay_date'];?></td>
                <td><a href="update.php?id=<?=$data['id'];?>&table_name=<?=$table_name;?>">update</a></td>
                <td><a href="vendor/delete.php?id=<?=$data['id'];?>&table_name=<?=$table_name;?>">delete</td>
            </tr>
        <?php }?>
    </tbody>
</table>
<h3>ADD NEW DATA</h3>
<form class="form" action="vendor/create.php" method="post">
    <input type="hidden" name="table_name" value="<?=$table_name;?>">
    <div class="form__item">
        <p>PRICE_PP</p>
        <input type="text" name="price_pp">
    </div>
    <div class="form__item">
        <p>PRICE_CS</p>
        <input type="text" name="price_cs">
    </div>
    <div class="form__item">
        <p>PAY_DATE</p>
        <input type="text" name="pay_date">
    </div>
    <div class="form__item">
        <br>
        <button type="submit">add new data</button>
    </div>
</form>


<table class="table">
    <h1><?= $table_name = 'agreement';?></h1>
    <thead>
        <tr>
	        <th>ID</th>
            <th>PHONE_NUM</th>
            <th>REG_DATE</th>
            
    </thead>
    <tbody>
        <?php foreach ($agreement as $data) {?>
            <tr>
                <td><?=$data['id'];?></td>
                <td><?=$data['phone_num'];?></td>
                <td><?=$data['reg_date'];?></td>
                <td><a href="update.php?id=<?=$data['id'];?>&table_name=<?=$table_name;?>">update</a></td>
                <td><a href="vendor/delete.php?id=<?=$data['id'];?>&table_name=<?=$table_name;?>">delete</td>
            </tr>
        <?php }?>
    </tbody>
</table>
<h3>ADD NEW DATA</h3>
<form class="form" action="vendor/create.php" method="post">
    <input type="hidden" name="table_name" value="<?=$table_name;?>">
    <div class="form__item">
        <p>PHONE_NUM</p>
        <input type="text" name="phone_num">
    </div>
    <div class="form__item">
        <p>REG_DATE</p>
        <input type="text" name="reg_date">
    </div>
   
    <div class="form__item">
        <br>
        <button type="submit">add new data</button>
    </div>
</form>