<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 24.12.2018
 * Time: 13:36
 */
namespace Vlad\Bishen\Controllers;
use Vlad\Bishen\Base\Controller;
use Vlad\Bishen\Base\DBConnection;
use Vlad\Bishen\Models\AccountModel;
use Vlad\Bishen\Base\Session;

class AuthController extends Controller
{

    private $accountModel;

    public function __construct()
    {
        $this->accountModel = new AccountModel();
    }


    public function authAction()
    {
        $data = $_POST;
        if (trim($data['name']) == '') {
            $errors[] = 'Введите логин';
        }if (trim($data['pwd']) == '') {
        $errors[] = 'Введите пароль';
    }

        if ($this->accountModel->loginExists($data)) {
            $errors = array();
            if(password_verify($data['pwd'], $data-> pwd)){
                $_SESSION['logged_user']= $data;
                echo "<script>alert(\"Вы успешно авторизировались.Можете продолжить работу\");</script>";
            }else{
                $errors[] = 'Неверно введен пароль!';
            }
        } return parent::generateResponse('index_view.php', ['errors'=>$errors]);
    }

    public function userCheckAction($request)
    {
        $postData = $request->post();
        $requestForm = $this->accountModel->usersData();
        $type = $this->accountModel->checkLogin($requestForm, $postData);
        return parent::generateAjaxResponse($type);
    }



    public function unsetAction()
    {
        unset($_SESSION['logget_user']);
        header('Location:/');
}

    public function registAction()
    {

        $data = $_POST;

        if (trim($data['name']) == '') {
            $errors[] = 'Введите логин';
        }
        if (trim($data['email']) == '') {
            $errors[] = 'Введите email';
        }
        if (trim($data['phone']) == '') {
            $errors[] = 'Введите контактный номер телефона';
        }
        if ($data['pwd2'] != $data['pwd']) {
            $errors[] = 'Пароли не совпадают';
        }


        if ($this->accountModel->loginExists($data)) {
            $errors[] = 'Пользователь с такими данными существует';
        }
        if (empty($errors)) {
            //все хорошо, регистрируем

            $this->accountModel->addUser($data);
            echo "<script>alert(\"Спасибо за регистрацию на сайте. Вы будете перенаправлены на страницу авторизации.\");</script>";
            return parent::generateResponse('index_view.php');
        }

        return parent::generateResponse('index_view.php', ['errors'=>$errors]);}



    public function registcAction()
    {
        $title = 'Регистрация компании';
        $view = 'form-reg-company_view.php';
        $data = [
            'title'=>$title
        ];
        return parent::generateResponse($view, $data);
    }

    public function registercAction()
    {   session_start();
        $data = $_POST;

        if (trim($data['name_c']) == '') {
            $errors[] = 'Заполните название компании';
        }
            if (trim($data['site_c']) == '') {
                $errors[] = 'Заполните адрес сайта вашей компании';
            }
            if (trim($data['check_c']) == '') {
                $errors[] = 'Выберите услуги предоставляемые вашей компании';
            }
            if (trim($data['layer_a']) == '') {
                $errors[] = 'Заполните юридический вашей компании';
            }
            if (trim($data['ogrn']) == '') {
                $errors[] = 'Заполните юридический вашей компании';
            }
            if (trim($data['cs']) == '') {
                $errors[] = 'Заполните контактный номер для нашего сервиса';
            }

        if (trim($data['email_с']) == '') {
            $errors[] = 'Введите ваш email';
        }
        if (trim($data['phone_connect']) == '') {
            $errors[] = 'Введите контактный номер телефона для ваших клиентов';
        }
        if ($data['psd2'] != $data['psd']) {
            $errors[] = 'Пароли не совпадают';
        }

        if ($this->accountModel->loginExists($data)) {
            $errors[] = 'Пользователь с такими данными существует';
        }
        if (empty($errors)) {
            //все хорошо, регистрируем

            $this->accountModel->addCompany($data);
            echo "<script>alert(\"Спасибо за регистрацию вашей компании на сайте. Вы будете перенаправлены на страницу авторизации.\");</script>";
            return parent::generateResponse('index_view.php');
        }
        echo "<script>alert(\"Заполните все данные\");</script>";
            return parent::generateResponse('index_view.php', ['errors' => $errors]);

    }
}




