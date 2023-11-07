<?php
 if (isset($_POST['sub'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // ID чата, куда отправлять сообщения
    $chat_id = '-1001940838020';

    // Токен бота
    $bot_token = '6150244172:AAGRxu9aS-i5Ly4k4R2QgRezR5p8J6xrNBg';

    // Формирование текста сообщения
    $text = "Новое сообщение от $name ($email):\n\n$message";

    // Отправка сообщения через API бота
    $url = "https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&text=".urlencode($text);
    file_get_contents($url);
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Волонтерство</title>
</head>

<body style="overflow-x: hidden;">
    
    <div class="shapka">
        <div class="header-line"> <!-- Меню -->
            <div class="header-logo"> <!-- Логотип -->
                <img src="./img/log1o 1.png" alt="">
            </div>

            <div class="nav"> <!-- Главная -->
                <a class="nav-item" id="#top" href="/our_pets">НАШИ ПИТОМЦЫ</a>
                <a class="nav-item" id="#top1" href="/#top1">О НАС</a>
                <a class="nav-item" id="#" href="">ВОЛОНТЕРСТВО</a>
            </div>

            <div class="phone"> <!-- Телефон -->
                <div class="phone-holder"> <!-- Объединяем дивы, чтобы иконка и телефон были на одном уровне -->
                    <div class="phone-img">
                        <img src="./img/phone.png" alt="">
                    </div>

                    <div class="number"><a class="num" href="tel:+79145042365">+7(914)504-23-65</a></div>
                </div>
                <div class="phone-text">
                    Позвоните сейчас
                </div>
            </div>
        </div>


    </div>


    <div class="offer">
            <div class="container">
                <h1>СТАТЬ ВОЛОНТЁРОМ ПРИЮТА</h1>

            <p>Волонтёр в приюте для животных – это доброволец, который занимается общественно
 полезным делом безвозмездно, и его возможности помочь могут быть довольно разнообразны.</p>

 <p>«У добровольца не всегда есть время - у него есть сердце».</p>
            </div>
    </div>


    <section id="how">
        <div class="container">
            <h2>Как стать волонтёром?</h2>

            <p>Можно помочь любым 
<br>из представленных способов:</p>

<div class="steps">
  <div class="step">
    <div class="circle"></div>
    <div class="line"></div>
    <div class="content">
      <h3>Общение с собаками</h3>
      <p>Приходя к собакам в приют, вы можете провести с ними время, гладить, играть, вычёсывать и даже просто общаться. Такие простые действия уже представляют большую пользу для собаки.</p>
    </div>
  </div>
  <div class="step">
    <div class="circle"></div>
    <div class="line"></div>
    <div class="content">
      <h3>Прогулки с собаками</h3>
      <p>Один из самых простых и самых важных элементов волонтёрства. Ведь даже самая обычная прогулка с собакой – это уже большой вклад и помощь в адаптацию и социализацию собаки.</p>
    </div>
  </div>
  <div class="step">
    <div class="circle"></div>
    <div class="line"></div>
    <div class="content">
      <h3>Помочь машиной</h3>
      <p>Транспортировка собак, многие собаки не адаптированы к поездкам в общественном транспорте. Часто требуется отвезти или забрать собаку из ветеринарной клиники, с выставки и многих других мероприятий.</p>
    </div>
  </div>
  <div class="step">
    <div class="circle"></div>
    <div class="content">
      <h3>Домашняя передержка</h3>
      <p>В некоторых случаях собакам срочно нужна домашняя передержка, так, например, после операции мы не можем вернуть собаку в холодный вольер, ей необходимы тепло, уход и покой. В таких случаях вы можете предоставить огромную помощь</p>
    </div>
  </div>
</div>
        </div>
    </section>

    <section id="callback" class="container">
        <h3>Свяжитесь с нами!</h3>
        <form method="post" action="/volunteering/index.php">
  <!-- Name input -->
  <div class="form-outline mb-4">
    <input type="text" name="name" id="form4Example1" class="form-control" />
    <label class="form-label" for="form4Example1">Ваше имя</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" name="email" id="form4Example2" class="form-control" />
    <label class="form-label" for="form4Example2">Ваш E-mail</label>
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" name="message" id="form4Example3" rows="4"></textarea>
    <label class="form-label" for="form4Example3">Сообщение</label>
  </div>


  <!-- Submit button -->
  <input type="submit" name="sub" style="background: #CF6809; border: #CF6809;" class="btn btn-primary btn-block mb-4">
</form>
    </section>

    <section id="footer" style="color: #fff;">
        <div style="display: flex; justify-content: space-around;">
            <div class="coperight">
                <p style="font-size: 16px; width: 290px;">Сайт является проектом команды волонтёров приюта в Москве</p>
                <p style="font-size: 8px;">© WAY HOME | ВСЕ ПРАВА ЗАЩИЩЕНЫ</p>
            </div>
            <div class="contact">
                <p style="font-size: 16px; color: #CF6809;">КОНТАКТЫ</p>
                <p>Телефон: +7(914)504-23-65</p>
                <p>Почта: wayhome1@mail.ru</p>
            </div>
            <div class="inform">
                <p style="font-size: 16px; color: #CF6809;">ИНФОРМАЦИЯ</p>
                <p>Наши питомцы</p>
                <p>О нас</p> 
                <p>Волонтерство</p>           
            </div>
        </div>
    </section>

</body>

</html>