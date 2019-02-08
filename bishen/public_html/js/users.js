function responseHandler(response) {
    console.log(response);
    if (response === "USER_ADDED") { //регистрация прошла успешно
        alert("Welcome to Rainbow world!");
        window.location.href = "/share";
    } else if (response === "USER_AUTH") { //пользователь успешно авторизовался
        alert("Wow! We glad to see you!");
        location(/);
    } else if (response === "EMAIL_ERROR") { //при попытке авторизации емейл не найден в БД
        emtext.innerHTML = "Ваш email не был найден";
    } else if (response === "PSW_ERROR") { //при попытке авторизации пароль введен неверно
        alert("Password is wrong, try again or recovery");
    } else if (response === "USER_EXISTS") { //пользователь найден, ему будет направлен пароль
        emtext.innerHTML = "Wait a few minutes and check your email :-)";
        send.style.display = 'none';
        sendhref.style.display = 'none';
        emailRec.style.display = 'none';
        back.style.display = 'block';
    }
}
