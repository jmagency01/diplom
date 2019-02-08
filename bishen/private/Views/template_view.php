<!DOCTYPE html>
<html lang="en" class="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="/CSS/flex.css">
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.css" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.ie.css" />
    <![endif]-->
    <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!--    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>-->


    <script src="https://unpkg.com/imask"></script>
    <script src="/phone_mask.js"></script>
</head>
<body>
<div class="container fon-w">
    <div class="row-container">

        <div class="flex-1 fon1 justify "><a href="\"> <img class="img-logo" src="/IMG/logo.png"></a></div>
        <div class=" flex-5 column-container "><div class="flex-1 justify fon1">
                <div class="ind dis"><a class="alink" href="/"> Главная</a></div>
                <!--<div class="fri dis"><a class="alink" href="/findprinter">Найти печатника</a>
                </div>-->
                <div class="fri dis"><a class="alink" href="/createorder"> Создать заказ</a></div>

                <div class="dis"><a class="alink" href="/findorder">Найти заказ</a></div>
                <div class="dis"><a class="alink" href="/aboutprint">Все о печати</a></div>
                <div class="dis"><a class="alink" href="/aboutus">О проекте</div>

                <?php if (isset($_SESSION['auth'])): ?>
                <ul> <li><a href="#" class="authorization"><?php echo "Привет, ". $_SESSION['user_name']; ?></a>
                    <li><a href="#">Личный кабинет</a></li>
                            <li><a href="/out">Выйти</a> </li>
                        </ul>
                    </li>
                <?php else: ?>
                <div class="dis"><a class="alink" href="#openModal">Вход /</a> <a class="alink" href="#openModal2"> Регистрация</a></div>
                <?php endif; ?>

                <div class="r7 justify dis2 flex-5 align-menu mini-menu"><img class="" src="/IMG/menu.svg">

                    <div class="block-menu">
                        <div class="ind">Главная</div>
                        <div><a class="alink" href="/findprinter">Найти печатника</a></div>
                        <div><a class="alink" href="/findorder">Найти заказ</a></div>
                        <div><a class="alink" href="/createorder">Создать заказ</a></div>
                        <div><a class="alink" href="/aboutprint">Все о печати</a></div>
                        <div><a class="alink" href="/aboutus">О проекте</a></div>
                        <div><a class="alink" href="#openModal">Вход</a>/<a class="alink" href="#openModal2">Регистрация</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row-container">

        <div class="flex-6"><form action="search.php"></form>
            <input  class="inallblock" type="search" placeholder="Здесь можно написать то, что вы ищете">
            <!--<input type="submit" class="ico" >-->
        </div>
    </div>



    <div style="color: red; font-size: 14px; padding: 20px; margin: 0 auto; display: block; width:400px;">

    </div>




    <?php include_once $view;?>


    <div class="flex-2 column-container list-base dis">
        <!-- <div class=""><h3>Типография "Синэл"</h3></div>
         <div ><img class="imgloco size" src="/IMG/logo_mini.jpg">
             <p class=" p">Перечень выполняемых работ: офсетная печать, цифровая печать, сувенирная продукция, широкоформатная печать</p></div>
         <div class="justify cool-list"><div>Рейтинг: 4/5</div><div class="margin butchoice2">Подробнее</div></div>
         <div class=""><h3>Типография "Синэл"</h3></div>
         <div ><img class="imgloco size" src="/IMG/logo_mini.jpg">
             <p class="p">Перечень выполняемых работ: офсетная печать, цифровая печать, сувенирная продукция, широкоформатная печать</p></div>
         <div class="justify"><div>Рейтинг: 4/5</div><div class="margin butchoice2">Подробнее</div></div>
         <div class=""><h3>Типография "Синэл"</h3></div>
         <div ><img class="imgloco size" src="/IMG/logo_mini.jpg">
             <p class="p">Перечень выполняемых работ: офсетная печать, цифровая печать, сувенирная продукция, широкоформатная печать</p></div>
         <div class="justify"><div>Рейтинг: 4/5</div><div class="margin butchoice2">Подробнее</div></div>-->
    </div><div class="flex-6 fon1 footer">ФУТЕР</div>
</div>





<div id="openModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Вход в личный кабинет</h3>
                <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">

                <form action="/authorization" method="post" name ="do_login">
                    <div><input class="text-field" type="text" name="email" placeholder="E-mail" value="<?php /*echo @$data['name']; */?><?php /*echo @$data['name_с']; */?>"></div>
                    <div><input class="text-field" name="pwd" type="password" placeholder="Пароль" required ></div>
                    <a class="padding" href="#openModal2">Нет Личного Кабинета? Зарегистрируйся! </a><a href="/forgot">Забыл пароль?</a>
                    <?php if($answer == "EMAIL_ERROR") :?>
                        <?php echo 'email error';?>
                    <?php elseif($answer == "PSW_ERROR") :?>
                        <?php echo 'password error';?>
                    <?php endif; ?>
                    <div class="justify padding"> <input class="butchoice2 " type="submit" value="Войти">


                            </div>  <!--final links inside authorization-->

                    </form>






























            </div>
        </div>
    </div>
</div>

<div id="openModal2" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Выберите, как вы хотите зарегистрироваться?</h3>
                <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">


                <a class="alink" href="#modalreg-client"><div class="butchoice">Я-Клиент </div></a>
                <a class="alink" href="/regcompany"><div class="butchoice">Я-Компания</div></a>


            </div>
        </div>
    </div>
</div>

<div id="modalreg-client" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Регистрация</h3>
                <a href="#close" title="Close" class="close">×</a>
            </div>

            <form name="MyForm" method="post" id="ajax_form" action="/account/regist"><!--Атрибут action остается пустым-->
                <input name="name" type="text" class="text-field" placeholder="Ваше имя" value="<?php echo @$data['name']; ?>"><br>
                <input name="email" type="email" class="text-field" placeholder="Email" value="<?php echo @$data['email']; ?>"><br>
                <input name="phone" class="text-field mask_phone" placeholder="Введите ваш телефон" value="<?php echo @$data['phone']; ?>"><br>
                <input name="pwd" type="password" class="text-field" placeholder="Придумайте пароль" value="<?php echo @$data['pwd']; ?>"><br>
                <input name="pwd2" type="password" class="text-field" placeholder="Повторите пароль" /><br>
                <div class="but-fip">
                    <div class="gip"><input name="body" type="checkbox" required>Нажимая данную кнопку, вы соглашаетесь на обработку персональных данных в соответствии с законом №152ФЗ </div>
                    <div ><input class="butchoice2" type="reset"><input class="butchoice2" type="submit" id="btncontcall" name="do_singup"></div>
                </div>

            </form>
            <div name="errors"></div><!--В этом блоке будет выводится информация от обработчика-->
        </div>
    </div>
</div>




<script>
    var elements = document.getElementsByClassName('mask_phone');
    for (var i = 0; i < elements.length; i++) {
        new IMask(elements[i], {
            mask: '+{7}(000)000-00-00',
        });
    }
</script>
<script src="/js/users.js"></script>
</body>
</html>