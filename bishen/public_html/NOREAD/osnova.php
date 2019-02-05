<!DOCTYPE html>
<html lang="en" class="html">
<head>
    <meta charset="UTF-8">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width=device=width" initial-scale="1">
    <title>Главная</title>
    <link rel="stylesheet" href="../CSS/flex.css">

</head>
<body>

<div class="container fon-w">
    <?php include_once 'php/headerModel.php' ?>
    <div class="row-container">
        <?php include_once 'php/searchModel.php' ?>

    </div>
    <?php include_once 'php/maps.php' ?>
    <div class="flex-6 fon1 footer">ФУТЕР</div>

    <div id="openModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Вход в личный кабинет</h3>
                    <a href="#close" title="Close" class="close">×</a>
                </div>
                <div class="modal-body">


                    <div><input class="text-field" type="text" placeholder="Логин или e-mail" required></div>
                    <div><input class="text-field" type="password" placeholder="Пароль" required></div>
                    <a class="padding" href="#openModal2">Нет Личного Кабинета? Зарегистрируйся! </a>
                    <div class="justify padding"> <input class="butchoice2 " type="submit" value="Войти"></div>


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
                    <a class="alink" href="../HTML/form_register_company.html"><div class="butchoice">Я-Компания</div></a>


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

                <form name="MyForm" action="" id="callbacks" method="post"><!--Атрибут action остается пустым-->
                    <input name="name" type="text" class="text-field" placeholder="Ваше имя" /><br>
                    <input name="tel" type="phone" class="text-field" placeholder="Телефон" /><br>
                    <input name="email" type="email" class="text-field" placeholder="Email" /><br>
                    <div class="but-fip">
                        <div class="gip"><input name="body" type="checkbox" required>Нажимая данную кнопку, вы соглашаетесь на обработку персональных данных в соответствии с законом №152ФЗ </div>
                        <div ><input class="butchoice2" type="reset"><input class="butchoice2" type="submit" id="btncontcall"></div>
                    </div>
                </form> <div id="erconts"></div><!--В этом блоке будет выводится информация от обработчика-->





                <!-- <form action="#" name="register-client">

                         <div><input class="text-field" id="firstname" type="text" placeholder="Ваше имя" required></div>
                         <div><input class="text-field" id="surname" type="text" placeholder="Ваша фамилия"></div>
                         <div><input class="text-field" id="number" type="text" placeholder="Телефон: +79001117766" required></div>
                         <div><input class="text-field" id="mail" type="email" placeholder="Ваш почтовый ящик" required></div>

                             <div class="but-fip">
                               <div class="gip"><input type="checkbox" required>Нажимая данную кнопку, вы соглашаетесь на обработку персональных данных в соответствии с законом №152ФЗ </div>
                                  <div ><input class="butchoice2" type="reset"><input class="butchoice2" type="submit"></div>
                             </div>


                     &lt;!&ndash; 1.конечно очень хочется подгрузить плагин регистрации через соц.сети,  но это пока что невозможно. плохо.
                         2. Как сделать подгрузку фото профиля через изображение (прямоугольник с плюсом) &ndash;&gt;
                 </form>-->

            </div>
        </div>
    </div>
</div>


</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

</body>
</html>