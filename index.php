<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="http://allfont.ru/allfont.css?fonts=europe-normal" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/jquery-ui-1.12.1/jquery-ui.js"></script>
    <link type="text/css" href="js/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet" />
    <link type="text/css" href="js/jquery-ui-1.12.1/jquery-ui.theme.css" rel="stylesheet" />
    <script src="js/script.js"></script>
</head>
<body>
<header class="header">
    <div class="block">
        <div class="logo">
            <img src="image/logo/logo.png" alt=""/>
        </div>
        <div class="phone">
            <span>8-800-100-5005</span>
            <span>+7 (3452) 522-000</span>
        </div>
    </div>
    <div class="menu">
        <ul>
            <li><a href="#">Кредитные карты</a></li>
            <li><a href="#">Вклады</a></li>
            <li><a href="#">Дебетовая карта</a></li>
            <li><a href="#">Страхование</a></li>
            <li><a href="#">Друзья</a></li>
            <li><a href="#">Интернет-банк</a></li>
        </ul>
    </div>
</header>
<nav id="navigation_chain">
    <ul class="breadcrumbs">
        <li><a href="#">Главная</a></li>
        <li><a href="#">Вклады</a></li>
        <li>Калькулятор</li>
    </ul>
</nav>
<div id="calculator">
    <div class="caption">Калькулятор</div>
    <form method="post" class="form">
        <div class="form__input">
            <label><span>Дата оформления вклада</span><input type="text" id="datepicker" name="date" placeholder="дд.мм.гггг" maxlength="10"/></label>
        </div>
        <div class="form__input__slider">
            <div >
            <label><span>Сумма вклада</span><input type="number" class="sumDeposit" name="sumDeposit" value="1500000" data-min="1000" data-max="3000000"/></label>
            </div>
            <div>
                <div id="slider-time"></div>
                <div class="slider">
                    <span class="min">1 тыс. руб.</span>
                    <span class="max">3 000 000</span>
                </div>
            </div>
        </div>
        <div class="form__input">
            <label><span>Срок вклада</span>
                <select name="timeDeposit">
                    <option value="1">1 год</option>
                    <option value="2">2 года</option>
                    <option value="3">3 года</option>
                    <option value="4">4 года</option>
                    <option value="5">5 лет</option>
                </select>
            </label>
        </div>
        <div class="form__input__radio">
            <label><span>Пополнение вклада</span>
                <input type="radio" value="false" name="deposit" checked/><span>Нет</span>
                <input type="radio" value="true" name="deposit"/><span>Да</span>
            </label>
        </div>
        <div class="form__input__slider">
            <div>
                <label><span>Сумма пополнения вклада</span><input type="number" class="depReplAmount" name="depReplAmount" value="1500000" data-min="1000" data-max="3000000"/></label>
            </div>
            <div>
                <div id="slider-summa"></div>
                <div class="slider">
                    <span class="min">1 тыс. руб.</span>
                    <span class="max">3 000 000</span>
                </div>
            </div>

        </div>
        <div class="form__input__button">
            <div>
                <input type="button" value="Рассчитать" id="submit">
            </div>
            <div class="message">
                <span>Результат: </span>
                <span id="message"></span>
            </div>
        </div>
    </form>
</div>
<div class="wrapper">

    <div class="content"></div>

    <footer>
        <div class="menufooter">
            <ul>
                <li><a href="#">Кредитные карты</a></li>
                <li><a href="#">Вклады</a></li>
                <li><a href="#">Дебетовая карта</a></li>
                <li><a href="#">Страхование</a></li>
                <li><a href="#">Друзья</a></li>
                <li><a href="#">Интернет-банк</a></li>
            </ul>
        </div>
    </footer>

</div>
</body>
