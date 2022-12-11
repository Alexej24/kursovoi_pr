<?php
      require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alex1</title>
  <link rel="stylesheet" href="css/desktop.css">
  <link rel="stylesheet" href="css/tablets.css">
  <link rel="stylesheet" href="css/mobile.css">
</head>

<body>

  <header class="header small-text">
    <nav>
      <div class="nav-item">Тарифы<a class="nav-item__link" href="#phone_plan"></a></div>
      <div class="nav-item">Дополнительные услуги<a class="nav-item__link" href="#compl_serv"></a></div>
      <div class="nav-item">Отзывы<a class="nav-item__link" href="#reviews"></a></div>
      <div class="nav-item">Заказать звонок<a class="nav-item__link" href="#form"></a></div>
    </nav>
  </header>

  <main>
    <div id="main-slider" class="slider-wrapper pc-content tablet-content">
      <div class="slider-container">
        <div class="slider-track">
          <div class="slider-item">
            <div class="slider-item_text-container">
              <h2>Лучшие тарифы</h2>
              <h4>Выбери свой</h4>
            </div>
          </div>
          <div class="slider-item">`
            <div class="slider-item_text-container">
              <h2>Лучшие сотрудники</h2>
              <h4>Более 15 лет на рынке</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="slider-buttons">
        <button class="btn btn-prev" onclick="swapSliderBackwards(1)"></button>
        <button class="btn btn-next" onclick="swapSliderTowards(1)"></button>
      </div>
    </div> 

    <!-- works -->

    <div class="works">
    <div class="container">

        <div class="works__nav">
            <a class="works__nav-link" href="#" data-filter="all">All</a>
            <a class="works__nav-link" href="#" data-filter="app">App</a>
            <a class="works__nav-link" href="#" data-filter="website">Websites</a>
            <a class="works__nav-link" href="#" data-filter="interaction">Interaction</a>
        </div>


<div id="phone_plan" class="portfolio__col" data-cat="website">
<?php foreach ($phone_plan as $data) {?>
    <div class="work">
        <img class="work__image" src="<?=$data['ph_pl_description'];?>" alt="">
        <div class="work__content">
            <div class="work__cat">category: Тарифный план</div>
            <div class="work__title">
            <?=$data['phone_plan_title'];?>
                <time class="work__date" datetime="2022-09-11 14:88"><?=$data['phone_plan_price'];?> BYN</time>
            </div>
        </div>
      </div>
      <?php }?>
</div>

<div id="compl_serv" class="portfolio__col" data-cat="website">
  <?php foreach ($complementary_services as $data) {?>

    <div class="work">
        <img class="work__image" src="<?=$data['serv_description'];?>" alt="">
        <div class="work__content">
            <div class="work__cat">category: Доп.услуга</div>
            <div class="work__title">
            <?=$data['compl_serv_title'];?>
                <time class="work__date" datetime="2022-09-11 14:88"><?=$data['compl_serv_price'];?> BYN</time>
            </div>
        </div>
    </div>
    <?php }?>
</div>


    <div id="reviews" class="content-wrapper slider-wrapper review-wrapper"> 
      <h3 class="pc-content tablet-content">Отзывы</h3>

      <div class="slider-container">
        <div class="slider-track">
          <div class="slider-item">
            <img class="review-img" src="img/natalia.jpg" alt="Наталья.">
            <h5 class="review-name">Наталья</h5>
            <p class="review-text secondary-text">Заказ делали через интернет. Замерщик подстроился под график работы.
              Установщики приехали вовремя, вежливые и аккуратные работники, демонтаж и монтаж произвели
              на отлично и главное быстро. Советую эту компанию!</p>
          </div>
          <div class="slider-item">
            <img class="review-img" src="img/roma.png" alt="Роман.">
            <h5 class="review-name">Роман</h5>
            <p class="review-text secondary-text">Крутой оператор, позвонили очень быстро, проконсультировали и подключиили тариф.
               Отличная связь, играю в Roblox и у меня не лагает. Спасибо! </p>
          </div>
          <div class="slider-item">
            <img class="review-img" src="img/andrey.jpg" alt="Андрей.">
            <h5 class="review-name">Андрей</h5>
            <p class="review-text secondary-text">Дважды пльзовался услугами компании, остался очень доволен.
              Консультанты помогли выбрать модели дверей, определиться с цветом. Все работы по замеру, доставке и
              монтажу
              согласовывались в удобное для меня время и выполнялись в срок.</p>
          </div>
          <div class="slider-item">
            <img class="review-img" src="img/irina.jpg" alt="Ирина.">
            <h5 class="review-name">Ирина</h5>
            <p class="review-text secondary-text">Выбрали эту компанию за надежность и качество. Консультант грамотно
              все объяснил отталкиваясь от наших приоритетов. Подключили тариф очень быстро. Отличная работа!
            </p>
          </div>
        </div>
      </div>
      <div class="slider-buttons mobile-content">
        <button class="btn btn-prev" onclick="swapSliderBackwards(2)"></button>
        <button class="btn btn-next" onclick="swapSliderTowards(2)"></button>
      </div>
    </div>

    <div id="form" class="content-wrapper form-wrapper">
      <iframe class="pc-content tablet-content mobile-content map-widget"
        src="https://yandex.ru/map-widget/v1/?um=constructor%3A430510aadb41e220c03f17fb3b3382aaa4f99ab7df026a7c49f5a4ca5e20a829&amp;source=constructor"></iframe>
      <form class="form" action="vendor/create.php" method="post">
        <h3 class="order-call-title">Заказать звонок</h3>
        <input type="hidden" name="table_name" value="<?= $table_name = 'clients';?>">
        <input type="text" name="full_name" class="text-input small-text" id="surname" placeholder="ФИО" required>
        <input type="text" name="pass_ser" class="text-input small-text" id="name" placeholder="Cерия паспорта" required>
        <input type="text" name="pass_num" class="text-input small-text" id="patronymic" pattern="(^\d{7}$)" placeholder="Номер паспорта" required>

        <div class="text-input phone-label">
          <label for="prefix"><span class="footer-text number-prefix">+375</span></label>
          <input id="prefix" type="text" onkeypress='validateNumbersInput(event)' pattern="(29|33|25)"
            class="text-input small-text prefix-input" placeholder="29" required>
          <input type="text"  name="phone_num" onkeypress='validateNumbersInput(event)' pattern="(^\d{7}$)"
            class="text-input small-text phone-input" id="phone" required>
        </div>

        <input required type="text" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" class="text-input small-text" id="time"
          placeholder="Укажите время (пример 20:00)">
        <label class="time-label" for="time">(В данной строке необходимо указать удобное для вас время звонка)</label>
        <input   class="submit-btn small-text" type="submit" name="send" value="Отправить заявку">
      </form>
    </div>
  </main>

  <footer class="footer footer-text">
    <div class="footer-text_container pc-content tablet-content">
      <p class="footer-text">Наш официальный адрес:<br>г. Минск, ул. Ленина, 4<br><br>УНП<br>00987465398548<br>
        <br>БИК<br>83478B79DF78
      </p>
      <p class="footer-text">Приемная<br>7 902 345<br><br>Отдел продаж<br>7 902 346<br><br>Юридический отдел<br>
        7 902 347</p>
      <p class="footer-text">
      Мы в соцсетях:<br>
        <a href="https://vk.com/artem_feshenko" target="_blank" class="footer-icon">
          <img src="img/vk.png" width=20 alt="vk">
        </a>
        <a href="https://www.instagram.com/cristiano/" target="_blank" class="footer-icon">
          <img src="img/inst.png" width=20 alt="inst">
        </a>
        <a href="https://www.facebook.com/groups/ElonMusk/?mibextid=HsNCOg" target="_blank" class="footer-icon">
          <img src="img/facebook.png" width=20 alt="facebook">
        </a>
      </p>
    </div>
    <div class="footer-text_container mobile-content">
      <div class="footer-text">Официальный сайт: dveri.by<br><br>Мы в соцсетях:<br>
        <a href="https://vk.com/artem_feshenko" target="_blank" class="footer-icon">
          <img src="img/vk.png" width=20 alt="vk">
        </a>
        <a href="https://www.instagram.com/cristiano/" target="_blank" class="footer-icon">
          <img src="img/inst.png" width=20 alt="inst">
        </a>
        <a href="hhttps://www.facebook.com/groups/ElonMusk/?mibextid=HsNCOg" target="_blank" class="footer-icon">
          <img src="img/facebook.png" width=20 alt="facebook">
        </a>
      </div>
      <div class="footer-text">Наш официальный адрес: г. Минск, ул. Ленина, 4<br>УНП 00987465398548<br>
        БИК 83478B79DF78</div>
      <div class="footer-text footer-row">
        <div class="footer-text">Приемная<br>7 902 345</div>
        <div class="footer-text">Отдел продаж<br>7 902 346</div>
        <div class="footer-text">Юридический отдел<br>7 902 347</div>
      </div>
    </div>
    
  </footer>

  <div class="scroll-up"></div>

  <script src="scripts/script.js"></script>
</body>


</html>