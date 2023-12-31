<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Плейлист</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/pl.css">
    <link rel="shortcut icon" href="img/🦆 icon _musical note_.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;600;700;800;900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;0,6..12,1000;1,6..12,200;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900;1,6..12,1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="/scripts/script_in.js"></script>  
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
            <input class="search" type="search" name= "q" placeholder= "Что хочешь послушать?"> 
            <button class="header_button">Личный кабинет</button>
        </header>
        <div class="all">
        <div class="lists">
                <div class="media">
                    <img style="margin: 11px 10px 11px 19px;" src="img/🦆 icon _audio spectrum_.svg" alt="">
                    <h2 class="my_media">Моя медиатека</h2>
                    <button onclick="add()" id="btn_add"><img src="/img/e14yx24bg5nlpyf234g.svg" alt=""></button>
                    <!-- Кпока "+" добавляет на сайт плейлист с заданым окне названием. Функционал реализован очень обрезано -->
                </div>
                <div id="modal">
                    <div id="window">
                        <h1 class="modal_h">Новый плейлист</h1>
                        <input type="text" id="name_add" placeholder="Введите название плейлиста">
                        <textarea type="text" id="des_add" placeholder="Введите описание плейлиста"></textarea>
                        <button onclick="addBlock()" style ="margin-top:25px" id="btn_add3">Добавить плейлист</button>
                        
                    </div>
                </div>
                <div class="top">
                    <span class="name_lists">Избранное</span>
                    <ul>
                        <li class="nl"><a class="link_pl" href="playlist.php">
                                <div class="ab">Понравившиеся</div>
                            </a></li>
                        <li class="nl"><a class="link_pl" href="/playlist.php">
                                <div class="ab">Мой плейлист №1</div>
                        </li>
                        <li class="nl"><a class="link_pl" href="playlist.php">
                                <div class="ab">Мой плейлист №2</div>
                        </li>
                       
                    </ul>
                </div>
                <div class="list">
                    <span class="name_lists"> Все плейлисты</span>
                    <ul id="list_ul">
                        
                        <li class="nl"><a class="link_pl" href="playlist.php">
                                <div class="ab">Понравившиеся</div>
                            </a></li>
                        <li class="nl"><a class="link_pl" href="/playlist.php">
                                <div class="ab">Мой плейлист №1</div>
                            </a></li>
                        <li class="nl"><a class="link_pl" href="playlist.php">
                                <div class="ab">Мой плейлист №2</div>
                            </a></li>
                        <li class="nl"><a class="link_pl" href="playlist.php">
                                <div class="ab">Мой плейлист №3</div>
                            </a></li>
                        <li class="nl"><a class="link_pl" href="playlist.php">
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
                <div class="playlist_in">
                    <div class="head_pl">
                        <h1 class="head_pl_h1">
                            Мой плейлист №1
                        </h1>
                        <span class="head_pl_span">
                            Можно добавить любое описание
                        </span>
                    </div>
                    <div class="pl_buttons">
                        <button class="pl_button"><img class="play" src="/img/🦆 icon _play circle_.svg" alt=""></button>
                        <button class="pl_button"><img class="like" src="/img/🦆 icon _heart_.svg" alt=""></button>
                        <button class="pl_button"><img class="setting" src="/img/🦆 icon _ellipses_.svg" style="top: 17.5px; position: absolute;" alt=""></button>
                    </div>
                    <div class="nadpisi">
                        <span style="margin-left:24px ;" class="nadpis"># &nbsp &nbsp Название</span>
                        <span style="margin: auto 15% auto 20%;" class="nadpis">Альбом</span>
                        <span style="margin-right: 13%;" class="nadpis">Дата добавления</span>
                        <img style="margin-right: 33px;" src="/img/🦆 icon _clock_.svg" alt="" class="nadpis">
                    </div>
                    <hr>
                    <div class="songs">
                        <div class="song">
                            <div class="song_a number_s">1</div>
                            <button class="song_a img_button" style="background-image: url(/img/1pl.png);"></button>
                            <div class="song_a name_s">
                                <div class="name_name">Problems </div> 
                                <div class="name_autor">Mother Mother</div>
                            </div>
                            <div class="song_a album_s">Eureka</div>
                            <div class="song_a date_s">4 минуты назад</div>
                            <div class="song_a duration_s">3:27</div>
                        </div>
                        <div class="song">
                            <div class="song_a number_s">2</div>
                            <button class="song_a img_button" style="background-image: url(/img/2pl.png);"></button>
                            <div class="song_a name_s">
                                <div class="name_name">Цветами радуги</div> 
                                <div class="name_autor">Pyrokinesis</div>
                            </div>
                            <div class="song_a album_s">Цветами радуги</div>
                            <div class="song_a date_s">4 минуты назад</div>
                            <div class="song_a duration_s">4:00</div>
                        </div>
                        <div class="song">
                            <div class="song_a number_s">3</div>
                            <button class="song_a img_button" style="background-image: url(/img/3pl.png);"></button>
                            <div class="song_a name_s">
                                <div class="name_name">Мозги & Деньги</div> 
                                <div class="name_autor">Комсомольск</div>
                            </div>
                            <div class="song_a album_s">Комсомольск-1</div>
                            <div class="song_a date_s">4 минуты назад</div>
                            <div class="song_a duration_s">2:29</div>
                        </div>
                        <div class="song">
                            <div class="song_a number_s">4</div>
                            <button class="song_a img_button" style="background-image: url(/img/4pl.png);"></button>
                            <div class="song_a name_s">
                                <div class="name_name">Молитва</div> 
                                <div class="name_autor">Кассиопея</div>
                            </div>
                            <div class="song_a album_s">Крестик</div>
                            <div class="song_a date_s">4 минуты назад</div>
                            <div class="song_a duration_s">2:53</div>
                        </div>
                    </div>
                </div>
                <footer>
                    <a href="https://ru.wikipedia.org/wiki/%D0%A8%D0%B8%D0%B7%D0%BE%D1%84%D1%80%D0%B5%D0%BD%D0%B8%D1%8F" class="footer_link">О нас</a><p>
                    <a href="https://vk.com/kelant" class="footer_link">Контакты</a>
                    <a href="#" class="spoti">ⓒ 2023 Spotisteal</a>
                </footer> 
            </div>
        </div>      
    </div>
</body>
</html>