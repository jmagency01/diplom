function sendForm(event) {
    event.preventDefault();

    let form_data = new FormData(this);
    console.log(form_data);

    let xhr = new XMLHttpRequest();
    xhr.open("POST", this.action, true);
    xhr.send(form_data);

    xhr.onload = function (oEvent) {
        if (xhr.status == 200) {
            console.log("xhr response", xhr.responseText);
            responseHandler(xhr.responseText);
        }
    };
}
function responseHandler(response) {
    console.log(response);
    if (response === "USER_AUTH") { //пользователь успешно авторизовался
        alert("Рады видеть вас на нашем сайте");
        location(/);
    } else if (response === "EMAIL_ERROR") { //при попытке авторизации емейл не найден в БД
        emtext.innerHTML = "Ваш email не был найден";
    } else if (response === "PSW_ERROR") { //при попытке авторизации пароль введен неверно
        alert("Ваш пароль был введен неверно");
    } else if (response === "USER_EXISTS") { //пользователь найден, ему будет направлен пароль
        emtext.innerHTML = "Пользователь найден, в течении 5 минут будет отправлен пароль";
        send.style.display = 'none';
        sendhref.style.display = 'none';
        emailRec.style.display = 'none';
        back.style.display = 'block';
    }
}
