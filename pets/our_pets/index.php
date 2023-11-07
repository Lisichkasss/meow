<?php
    // Подключение к БД
    $connection = mysqli_connect("localhost", "root", "", "pets");

    // Получение данных из таблицы
    $query = "SELECT * FROM our_pets;";
    $result = mysqli_query($connection, $query);

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Наши питомцы</title>
</head>

<body style="overflow-x: hidden;">
    
    <div class="shapka">
         <div class="header-line"> <!-- Меню -->
            <div class="header-logo"> <!-- Логотип -->
                <img src="./img/log1o 1.png" alt="">
            </div>

            <div class="nav"> <!-- Главная -->
                <a class="nav-item" id="#top" href="">НАШИ ПИТОМЦЫ</a>
                <a class="nav-item" id="#top1" href="/#top1">О НАС</a>
                <a class="nav-item" id="#" href="/volunteering">ВОЛОНТЕРСТВО</a>
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
   
    <div class="dog-text">ВОЗЬМИ СОБАКУ ИЗ ПРИЮТА, НЕ ПОКУПАЙ!</div>
    <p class="dog-img"><img src="./img/dog-fon.png" alt=""/></p>
    <div class="dog-text1">НАШИ ПИТОМЦЫ</div>
    <div class="dog-photo">
       <div style="width: 1108px;">
            <div style="display: flex; justify-content: space-evenly; margin-bottom: 50px;">

                <?
                // Цикл по всем записям в таблице
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Формирование HTML-кода для каждого животного
                        echo '<div class="pets-item">';
                        echo '<img src="' . $row["src"] . '" alt="' . $row["name"] . '"/>';
                        echo '<p>' . $row["name"] . '</p>';
                        echo '<div class="more-info">';
                        echo '<p>Рост: ' . $row["rost"] . ' см</p>';
                        echo '<p>Возраст: ' . $row["age"] . ' лет</p>';
                        echo '<p>Порода: ' . $row["poroda"] . ' </p>';
                        echo '<p>О питомце: ' . $row["info"] . ' </p>';
                        echo '</div>';
                        echo '</div>';
                    }

                ?>

            </div>

       </div>
    </div>


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