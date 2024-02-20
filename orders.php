<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/orders.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/orders.js"></script>
    <title>Айтирум</title>
</head>

<body>
    <div class="black_background" style="display:none">
        <img src="./img/close.png" alt="close">
    </div>
    <div name="window_about_event" id="block_footer" class="block_footer" style="display:none;">
        <div class="head_footer">
            Данные мероприятия
        </div>
        <div class="form_add">
            <form action="">
                <label>ФИО</label>
                <input type="text" name="fio">
                <label>Номер телефона</label>
                <input type="text" name="phone">
                <label>Тип мероприятия</label>
                <input type="text" name="type_event">
                <label>Время</label>
                <input type="text" name="time">
                <label>Сценарий мероприятия</label>
                <textarea name="script" cols="30" rows="10"></textarea>
                <button class="add_cab">ПОДТВЕРДИТЬ</button>
            </form>
        </div>
    </div>
    <div name="window_add_order" id="block_footer" class="block_footer" style="display:none;">
        <div class="head_footer">
            Добавить Заказ
        </div>
        <div class="form_add">
            <form action="">
                <label>ФИО</label>
                <input type="text" name="fio">
                <label>Номер телефона</label>
                <input type="text" name="phone">
                <label>Дата</label>
                <input type="date" name="date">
                <label>Время</label>
                <input type="text" name="time">
                <label>Сценарий мероприятия</label>
                <textarea name="script" cols="30" rows="10"></textarea>
                <button class="add_cab">ПОДТВЕРДИТЬ</button>
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
                <a href="#">
                    <li>Мероприятия</li>
                </a>
                <a href="#">
                    <li>Выставки</li>
                </a>
                <a href="#">
                    <li>Заказы</li>
                </a>
                <a href="#">
                    <li>Сотрудники</li>
                </a>
                <a href="#">
                    <li>Заказчики</li>
                </a>
                <a href="#">
                    <li>Экспонаты</li>
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
                <p class="cabinet">Заказы</p>
                <button class="add_comp">ДОБАВИТЬ ЗАКАЗ</button>
            </div>
            <!-- Пункты таблицы -->
            <div class="points_table">
                <div class="checkBox">
                    <input type="checkbox" class="checkbox_point" id="input_checkbox_all">
                </div>
                <div class="point_table_one">
                    <p>ID</p>
                </div>
                <div class="point_table_two">
                    <p>Заказчик</p>
                </div>
                <div class="point_table_three">
                    <p>Дата и время</p>
                </div>
                <div class="point_table_three">
                    <p>Данные Мероприятия</p>
                </div>
                <div class="point_table_three">
                    <p>Действие</p>
                </div>
            </div>
            <!-- Данные таблицы -->
            <div class="points_table" id="points_table1">
                <div class="checkBox">
                    <input type="checkbox" class="checkbox_point">
                </div>
                <div class="point_table_one" id="point_table_one">
                    <p>1</p>
                </div>
                <div class="point_table_two" id="point_table_two">
                    <p>Алексей Владимирович <br><span>+7-982-822-44-19</span></p>
                </div>
                <div class="point_table_three" id="point_table_three">
                    <p>25.12.2024<br><span>13:00 - 18:00</span></p>
                </div>
                <div class="point_table_three" id="point_table_three">
                    <button class="about_order">Подробнее</button>
                </div>
                <div class="point_table_settings" id="point_table_settings">
                    <div class="actions_order">
                        <button>Принять</button>
                        <button>Отклонить</button>
                    </div>
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
            </div>
        </div>
        <!-- Конец данных -->
    </div>
</body>

</html>