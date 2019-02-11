<form action="/forgot-send" method="post" name="recovery">
    <fieldset id="recovery">
        <?php if ($not == "2"): ?>
            <legend><h4>Извините, но пароль неверен.Попробуйте снова.</h4></legend>
            <div>
                <label for="emailRec">Пожалуйста введите ваш почтовый ящик</label>
                <input class="text-field" id="emailRec" type="email" name="emailRec" placeholder="Ваш почтовый ящик" required>
            </div>
            <button type="submit" name="Recovery" class="butchoice2">Отправить новый пароль</button>
            <a href="#openModal2" target="_self" class="Btn1">Зарегистрироваться снова</a>
        <?php elseif ($not == false): ?>
            <legend><h4>Извините, но пароль неверен.Попробуйте снова.</h4></legend>
            <div>
                <label for="emailRec">Пожалуйста введите ваш почтовый ящик</label>
                <input id="emailRec" type="email" name="emailRec" placeholder="Ваш почтовый ящик" required>
            </div>
            <button type="submit" name="Recovery" class="Btn">Отправить новый пароль</button>
            <a href="#openModal2" target="_self" class="Btn1">Зарегистрироваться снова</a>
        <?php else :?>
            <legend><h4>Подождите несколько минут, пароль уже практически у вас на почте</h4></legend>
        <?php endif; ?>
        <a href="#openModal" target="_self" class="Btn1" id="BtnEnter">Вернуться</a>
    </fieldset>
</form>