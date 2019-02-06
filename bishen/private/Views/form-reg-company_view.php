<div class="row-container">
    <div class="flex-6 justify padding">
        <form  method="post" id="ajax_form" action="/addcompany">
            <fieldset>
                <LEGEND>Регистрация</LEGEND>
                <div><input class="text-field" type="text" placeholder="Название вашей компании" required name="name_c" value="<?php echo @$data['name_c']; ?>"></div>
                <div><textarea class="text-field" placeholder="Краткое описание вашей компании (до 200 символов)" maxlength="200" name="disc_c" value="<?php echo @$data['disc_c']; ?>"></textarea></div>
                <div><input class="text-field" type="text" placeholder="Сайт вашей компании" required name="site_c" value="<?php echo @$data['site_c']; ?>"></div>
                <fieldset name = 'check_c' value="<?php echo @$data['check_c']; ?>"><legend>Выберите услуги, которые предоставляет ваша компания</legend>

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

                <div><input class="text-field" type="text" placeholder="Юридический адрес организации" required name="layer_a" value="<?php echo @$data['layer_a']; ?>"></div>
                <div><input class="text-field" type="text" placeholder="ОГРН/ИНН вашей организации" required name="ogrn" value="<?php echo @$data['ogrn']; ?>"></div>
                <div><input class="text-field mask_phone" type="text" placeholder="Телефон организации(для клиентов)" required name="phone_con" value="<?php echo @$data['phone_con']; ?>"></div>
                <div><input class="text-field" type="email" placeholder="Почтовый ящик для приема заказов" required name="email_c" value="<?php echo @$data['email_c']; ?>"></div>
                <div><input class="text-field mask_phone" type="text" placeholder="Телефон организации(для нашего сервиса)" required name="cs" value="<?php echo @$data['cs']; ?>"></div>
                <div><input class="text-field" type="text" placeholder="Контактное лицо" required name="manager" value="<?php echo @$data['manager']; ?>"></div>
                <div><input name="psd" type="password" class="text-field" placeholder="Придумайте пароль" /></div>
                <div><input name="psd2" type="password" class="text-field" placeholder="Повторите пароль" /></div>
                <div><input  type="checkbox" required>Нажимая данную кнопку, вы соглашаетесь на обработку персональных данных в соответствии с законом №152ФЗ </div>
                <div><input class="butchoice2" type="reset"><input class="butchoice2" type="submit" name="log_c"></div>
            </fieldset>
        </form>
        <script>
            var elements = document.getElementsByClassName('mask_phone');
            for (var i = 0; i < elements.length; i++) {
                new IMask(elements[i], {
                    mask: '+{7}(000)000-00-00',
                });
            }
        </script>
    </div>
</div>