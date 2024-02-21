<?php
session_start();
require_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/people.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/people.js"></script>
    <title>Айтирум</title>
</head>
<body>
    <div class="black_background" style="display:none">
        <img src="./img/close.png" alt="close">
    </div>
    <div name="window_add_person" id="block_footer" class="block_footer" style="display:none;">
        <div class="head_footer">
            Добавление Сотрудника
        </div>
        <div class="form_add">
            <form action="addPerson.php" method="POST">
                <label>ФИО</label>
                <input type="text" name="fio">
                <label>Дата Рождения</label>
                <input type="text" name="brd">
                <label>Специализация</label>
                <input type="text" name="special">
                <label>Номер Телефона</label>
                <input type="text" name="phone">
                <button name="add_person" class="add_cab">ДОБАВИТь СОТРУДНИКА</button>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="window_sumbit">
            <div class="head_delete">
                <p>Подтвердите действие на странице</p>
            </div>
            <p>Вы уверены, что хотите удалить сотрудника ФИО?</p>
            <div class="buttons_change">
                <button id="yes_delete">ДА</button>
                <button id="no_delete">НЕТ</button>
            </div>
        </div>
        <div class="block_head_right">
            <ul class="nav_menu">
                <a href="/people.php">
                    <li>Сотрудники</li>
                </a>
                <a href="/orders.php">
                    <li>Заказы</li>
                </a>
                <a href="/schedule.php">
                    <li>Расписание</li>
                </a>
            </ul>
            <div class="block_head_acc">
                <div class="head_logo"></div>
                <div class="head_acc_about">
                    <p class="head_name">Зубенко Михаил</p>
                    <p class="head_prof">Администратор</p>
                </div>
                <img src="img/exit.png" class="head_exit">
            </div>
        </div>
        <div class="block_content">
            <div class="header_content">
                <div class="search_content">
                    <div class="search_content_img"></div>
                    <input type="text" class="search_content_inp" placeholder="Поиск"></input>
                    <div class="line_search_content"></div>
                </div>
                <p class="cabinet">Сотрудники</p>
                <button class="add_comp">ДОБАВИТЬ СОТРУДНИКА</button>
            </div>
            <!-- Пункты таблицы -->
            <div class="points_table">
                <div class="checkBox">
                    <input type="checkbox" class="checkbox_point" id="input_checkbox_all">
                </div>
                <div class="point_table_one">
                    <p>ФИО Сотрудника</p>
                    <img src="img/sort.png" id="settings1">
                </div>
                <div class="point_table_two">
                    <p>Дата Рождения</p>
                    <img src="img/sort.png" id="settings1">
                </div>
                <div class="point_table_three">
                    <p>Специализация</p>
                    <img src="img/sort.png" id="settings1">
                </div>
                <div class="point_table_settings">
                    <img src="img/settings.png">
                </div>
            </div>
            <!-- Данные таблицы -->
            <?php
            $sql = "SELECT * FROM `workers`";
            $query = mysqli_query($db, $sql);
            while($person = mysqli_fetch_assoc($query)){
                echo '
                <div class="points_table" id="points_table1">
                    <div class="checkBox">
                        <input type="checkbox" class="checkbox_point">
                    </div>
                    <div class="point_table_one" id="point_table_one">
                        <p>' . $person['fio'] . '<br><span> ' . $person['phone'] .'</span></p>
                    </div>
                    <div class="point_table_two" id="point_table_two">
                        <p>' . $person['brd'] . '</p>
                    </div>
                    <div class="point_table_three" id="point_table_three">
                        <p>' . $person['special'] . '</p>
                    </div>
                    <div class="point_table_settings" id="point_table_settings">
                        <img src="img/dot.png">
                    </div>
                    <div class="settings_panel" style="display:none">
                        <div class="editFromDB">
                            <img src="img/editing.png">
                            <p>Редактировать</p>
                        </div>
                        <div>
                            <img src="img/history 1.png">
                            <p><a href="history.php">История</a></p>
                        </div>
                        <div class="deleteFromDB">
                            <img src="img/close 2.png">
                            <p>Удалить</p>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
        <!-- Конец данных -->
    </div>
</body>

</html>