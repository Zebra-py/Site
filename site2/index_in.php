<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotisteal</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="img/🦆 icon _musical note_.svg">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


  
</head>

<body>
    <div class="content">
        <header>
            <div class="logo"><a href="index.php"><img src="img/okzq7ij4pailpup8928.svg" alt="">
                </a></div>
            <div class="knopochki">
                <a href="javascript:history.back()"><img src="/img/Group 18.svg" alt=""></a>
                <a href="#"><img src="/img/Group 19.svg" alt=""></a>
            </div>
            <input class="search" type="search" name="q" placeholder="Что хочешь послушать?" />

            <button class="header_button">Личный кабинет</button>
        </header>

        <div class="all">
            <div class="lists">
                <div class="media">
                    <img style="margin: 11px 10px 11px 19px;" src="img/🦆 icon _audio spectrum_.svg" alt="">
                    <h2 class="my_media">Моя медиатека</h2>
                    <button id="btn_add"><img src="/img/e14yx24bg5nlpyf234g.svg" alt=""></button>
                </div>
                <div id="modal">
                    <div id="window">
                        <h1 class="modal_h">Новый плейлист</h1>
                        <input type="text" id="name_add" placeholder="Введите название плейлиста">
                        <textarea type="text" id="des_add" placeholder="Введите описание плейлиста"></textarea>
                        <button onclick="addBlock()" style ="margin-top:25px" id="btn_add2">Добавить плейлист</button>
                        
                    </div>
                </div>
                <div class="top">
                    <span class="name_lists">Избранное</span>
                    <ul>
                        <li class="nl"><a class="link_pl" href="#">
                                <div class="ab">Понравившиеся</div>
                            </a></li>
                        <li class="nl"><a class="link_pl" href="/playlist.html">
                                <div class="ab">Мой плейлист №1</div>
                        </li>
                        <li class="nl"><a class="link_pl" href="#">
                                <div class="ab">Мой плейлист №2</div>
                        </li>
                       
                    </ul>
                </div>
                <div class="list">
                    <span class="name_lists"> Все плейлисты</span>
                    <ul id="list_ul">
                        
                        <li class="nl"><a class="link_pl" href="#">
                                <div class="ab">Понравившиеся</div>
                            </a></li>
                        <li class="nl"><a class="link_pl" href="/playlist.html">
                                <div class="ab">Мой плейлист №1</div>
                            </a></li>
                        <li class="nl"><a class="link_pl" href="#">
                                <div class="ab">Мой плейлист №2</div>
                            </a></li>
                        <li class="nl"><a class="link_pl" href="#">
                                <div class="ab">Мой плейлист №3</div>
                            </a></li>
                        <li class="nl"><a class="link_pl" href="#">
                                <div class="ab">Мой плейлист №4</div>
                            </a></li>
                        <?php
                            if (isset($_SESSION['blocks'])) {
                                echo $_SESSION['blocks'];
                            }
                        ?>   
                    </ul>
                </div>
            </div>
            <div class="kostil">
                <div class="main">
                    <span class="podpisi">Плейлисты Spotisteal</span>
                    <div class="playlists">
                        <a href="#">
                            <div class="playlist">
                                <img src="/img/1.png" alt="">
                                <h2 class="pl_name">Серега Пират Хиты</h2>
                                <h3 class="pl_d">Лучшие песни великого
                                    исполинтеля</h3>
                            </div>
                        </a>
                        <a href="#">
                            <div class="playlist">
                                <img src="/img/2.png" alt="">
                                <h2 class="pl_name">Для детей</h2>
                                <h3 class="pl_d">Сборник детских песен</h3>
                            </div>
                        </a>
                        <a href="#">
                            <div class="playlist">
                                <img src="/img/3.png" alt="">
                                <h2 class="pl_name">Музыка для сна</h2>
                                <h3 class="pl_d">Успокаивающая музыка для комфортного сна</h3>
                            </div>
                        </a>
                        <a href="#">
                            <div class="playlist">
                                <img src="/img/4.png" alt="">
                                <h2 class="pl_name">Песни про дружбу</h2>
                                <h3 class="pl_d">Что может быть лучше настоящей мужской дружбы?
                                </h3>
                            </div>
                        </a>
                        <a href="#">
                            <div class="playlist">
                                <img src="/img/5.png" alt="">
                                <h2 class="pl_name">PHONK</h2>
                                <h3 class="pl_d">Ну а почему бы и нет?</h3>
                            </div>
                        </a>
                    </div>
                    <span class="podpisi">Подкасты</span>
                    <div class="playlists">
                        <a href="#">
                            <div class="playlist">
                                <img src="/img/6.png" alt="">
                                <h2 class="pl_name">О кино</h2>
                                <h3 class="pl_d">Разговоры о шедеврах кинематографа
                                </h3>
                            </div>
                        </a>
                        <a href="#">
                            <div class="playlist">
                                <img src="/img/7.png" alt="">
                                <h2 class="pl_name">Искусство </h2>
                                <h3 class="pl_d">Что в современном мире мы счтиаем Искусством, а что нет?
                                </h3>
                            </div>
                        </a>
                        <a href="#">
                            <div class="playlist">
                                <img src="/img/8.png" alt="">
                                <h2 class="pl_name">Игровая индрустрия</h2>
                                <h3 class="pl_d">Как пройти baldur’s gate 3 и не зарамансить Астариона?
                                </h3>
                            </div>
                        </a>
                        <a href="#">
                            <div class="playlist">
                                <img src="/img/9.png" alt="">
                                <h2 class="pl_name">Политика</h2>
                                <h3 class="pl_d">Поговорим о политической ситуации в нашей стране
                                </h3>
                            </div>
                        </a>

                    </div>
                </div>
                <footer>
                    <a href="https://ru.wikipedia.org/wiki/%D0%A8%D0%B8%D0%B7%D0%BE%D1%84%D1%80%D0%B5%D0%BD%D0%B8%D1%8F"
                        class="footer_link">О нас</a>
                    <p>
                        <a href="https://vk.com/kelant" class="footer_link">Контакты</a>
                        <a href="#" class="spoti">ⓒ 2023 Spotisteal</a>
                </footer>
            </div>

        </div>
    </div>
    <script src="/scripts/script_in.js"></script>    
</body>

</html>