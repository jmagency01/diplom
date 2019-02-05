<div class="row-container">
    <div class="flex-6 justify padding">
        <form  method="post" id="ajax_form" action="/addcompany">
            <fieldset>
                <LEGEND>Регистрация</LEGEND>
                <div><input class="text-field" type="text" placeholder="Название вашей компании" required name="name_c"></div>
                <div><textarea class="text-field" placeholder="Краткое описание вашей компании (до 200 символов)" maxlength="200" name="disc_c"></textarea></div>
                <div><input class="text-field" type="text" placeholder="Сайт вашей компании" required name="site_c"></div>
                <fieldset name = 'check_c'><legend>Выберите услуги, которые предоставляет ваша компания</legend>

                    <div><input type="checkbox" name="flag[]">Цифровая печать</div>
                    <div><input type="checkbox" name="flag[]">Широкоформатная печать</div>
                    <div><input type="checkbox" name="flag[]">Сувенирная продукция</div>
                    <div><input type="checkbox" name="flag[]">Упаковка</div>
                    <div><input type="checkbox" name="flag[]">Реклама в средствах массовой информации</div>
                    <div><input type="checkbox" name="flag[]">Реклама на транспорте</div>
                    <div><input type="checkbox" name="flag[]">Реклама на местах продаж</div>
                    <div><input type="checkbox" name="flag[]">Другое</div>

                </fieldset>

                <!-- у меня есть вопрос по организации формы. Есть список услуг. Компания выбирает те, которые осуществляет,
                 но мне нужно чтобы после выбора услуги выскакивал список продуктов данной категории, к примеру:
                 цифровая печать(выбор)-выскакивает список: визитки, листовки, флаеры и т.д. -->

                <div><input class="text-field" type="text" placeholder="Юридический адрес организации" required name="layer_a"></div>
                <div><input class="text-field" type="text" placeholder="ОГРН/ИНН вашей организации" required name="ogrn"></div>
                <div><input class="text-field" type="text" placeholder="Телефон организации(для клиентов)" required name="phone_connect"></div>
                <div><input class="text-field" type="email" placeholder="Почтовый ящик для приема заказов" required name="email_c"></div>
                <div><input class="text-field" type="text" placeholder="Телефон организации(для нашего сервиса)" required name="cs"></div>
                <div><input class="text-field" type="text" placeholder="Контактное лицо" required name="manager"></div>
                <div><input name="psd" type="password" class="text-field" placeholder="Придумайте пароль" /></div>
                <div><input name="psd2" type="password" class="text-field" placeholder="Повторите пароль" /></div>
                <div><input  type="checkbox" required>Нажимая данную кнопку, вы соглашаетесь на обработку персональных данных в соответствии с законом №152ФЗ </div>
                <div><input class="butchoice2" type="reset"><input class="butchoice2" type="submit" name="log_c"></div>
            </fieldset>
        </form>

    </div>
</div>