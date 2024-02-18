<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/profile.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/profile.js"></script>
    <title>Айтирум</title>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="left">
                <div class="block_head_left">
                    <a class="arrow" href="#"></a>
                    <h1>Айтирум</h1>
                </div>
                <div class="search_left">
                    <div class="search_left_img"></div>
                    <input class="search_tasks" type="text" placeholder="Поиск по зданиям">
                </div>
                <div class="line_search_left"></div>
                <select class="user_profile_color_2" name="user_profile_color_2" required="required">
                    <option value="">ООО "Айтирум"</option>
                    <option value="1">Удмуртская Республика, Ижевск, Пушкинская 268</option>
                    <option value="2">Удмуртская Республика, г Ижевск, ул Коммунаров, д. 319, офис 2</option>
                    <option value="3">Желтый</option>
                    <option value="4">Красный</option>
                    <option value="5">Оранжевый</option>
                    <option value="6">Черный</option>
                </select>
            </div>
            <div class="right">
                <div class="block_head_right">
                    <div class="block_head_cab">
                        <a href="room.php">Кабинеты</a>
                    </div>
                    <a href="computers.php" class="text_head_comp">Компьютеры</a>
                    <a href="equipment.php" class="text_head_equip">Оборудование</a>
                    <a href="people.php" class="text_head_empl">Сотрудники</a>
                    <div class="block_head_acc">
                        <div class="head_logo"></div>
                        <div class="head_acc_about">
                            <p class="head_name">Зубенко Михаил</p>
                            <p class="head_prof">Администратор</p>
                        </div>
                        <img src="img/exit.png" class="head_exit">
                    </div>
                </div>
                <div class="block_text_head">
                    <a href="po.php" class="software">
                        Программное обеспечение
                    </a>
                    <a href="serving-organisation.php" class="service">
                        Обслуживающие организации
                    </a>
                </div>
                <div class="block_content">
                    <div class="header_content">
                        <p class="cabinet">Личный профиль</p>
                    </div>
                    <div>
                        <div class="profile1">
                            <div class="avatar_profile">
                                <button class="edit_profile"><img src="img/edit_profile.png"></button>
                            </div>
                            <div class="name">
                                <p>Имя</p>
                                <input type="text" class="name_input" disabled value="Михаил">
                                <p>Фамилия</p>
                                <input type="text" disabled value="Зубенко">
                            </div>
                        </div>
                        <div class="profile2">
                            <p>E-mail</p>
                            <input type="email" disabled value="zubenko.mih@mail.ru">
                            <div class="profile2_info">
                                <div>
                                    <p>Телефон</p>
                                    <input id="phone" type="text" placeholder="+7 (999) 99 99 999" disabled>
                                    <p class="info_2">Компания</p>
                                    <input type="text" disabled value="АйтиРум">
                                </div>
                                <div>
                                    <p>Должность</p>
                                    <input type="text" disabled value="Администратор">
                                    <p class="info_2">Должность</p>
                                    <input type="text" disabled value="Администратор">
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="profile_password_change">
                        <p>Изменение пароля</p>
                        <div>
                            <p>Старый пароль</p>
                            <input type="password">
                            <p>Новый пароль</p>
                            <input type="password">
                            <p>Повторите новый пароль</p>
                            <input type="password">
                        </div>
                        <button>Применить изменения</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>