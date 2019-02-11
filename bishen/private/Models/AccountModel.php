<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.02.2019
 * Time: 12:18
 */

namespace Vlad\Bishen\Models;


use Doctrine\DBAL\Driver\PDOException;
use Symfony\Component\Config\Definition\Exception\Exception;
use Vlad\Bishen\Base\DBConnection;

class AccountModel
{
    const USER_ADDED = "USER_ADDED";
    const USER_EXISTS = "USER_EXISTS";
    const LOGIN_EXISTS = "LOGIN_EXISTS";
    const EMAIL_ERROR = "EMAIL_ERROR";
    const PWD_ERROR = "PWD_ERROR";
    const USER_AUTH = "USER_AUTH";
    const DB_ERROR = "DB_ERROR";
    const COUNTRY_EMPTY = "COUNTRY_EMPTY";
    const PWD_WRONG = "PWD_WRONG";


    private $db;
    public function __construct()
    {
        $this->db = new DBConnection();
    }

    public function loginExists($userData){
        $sql = 'SELECT email FROM users WHERE email=:email';
        $params = ['email'=>$userData['email']];

        $answer = $this->db->execute($sql, $params, false);
        return $answer; // true если существует
    }
    public function companyExists($companyData){
        $sql = 'SELECT email_c FROM company WHERE email_c=:email_c';
        $params = ['email_c'=>$companyData['email_c']];

        $answer = $this->db->execute($sql, $params, false);
        return $answer; // true если существует
    }

    public function recmAction($request){
        $postData = $request->post();
        $not = $this->AccountModel->recmData($postData);
        $title = 'Авторизация';
        $view = 'index_view.php';
        $data = [
            'title'=>$title,
            'not'=>$not
        ];
        return parent::generateResponse($view, $data, $template='index_view.php');
    }

    public function authUser($userData)
    {
        $sql = "SELECT email, pwd, user_name FROM users 
      WHERE email=:email";
        $params = [
            'email' => $userData['email']
        ];

        $statement = $this->db->execute($sql, $params, false);

        if (!$statement) {
            return self::EMAIL_ERROR;
        } else {
            $hash = $statement['pwd'];
            if (!password_verify($userData['pwd'], $hash)) {
                return self::PWD_ERROR;
            }

            $_SESSION['auth'] = true;
            $_SESSION['user_name'] = $statement['user_name'];
            echo "<script>alert(\"Вы успешно авторизировались на сайте.\");</script>";

            return self::USER_AUTH;
        }
    }


    public function authCompany($userData)
    {
        $sql = "SELECT email_c, psd, name_c FROM company 
      WHERE email_c=:email_c";
        $params = [
            'email_c' => $userData['email_c']
        ];

        $statement = $this->db->execute($sql, $params, false);

        if (!$statement) {
            return self::EMAIL_ERROR;
        } else {
            $hash = $statement['psd'];
            if (!password_verify($userData['psd'], $hash)) {
                return self::PWD_ERROR;
            }
            $_SESSION['auth'] = true;
            $_SESSION['name_c'] = $statement['name_c'];
            return self::USER_AUTH;
        }
    }

    public function recmData($userData){
        if($userData == NULL){
            $not = FALSE;
        }else {
            $sql = 'SELECT email FROM users WHERE email =:email';
            $params = [
                'email'=>$userData['emailRec']
            ];
            $result = $this->db->execute($sql, $params, false);
            if(!$result){
                $not = "2";
            } else {
                $not = "3";
            }
        }
        return $not;
    }

    public function addUser($userData){

        $sql = "INSERT INTO users (user_name, phone, email, pwd)
              VALUES (:user_name, :phone, :email, :pwd)";
        $params = [
            'user_name'=>$userData['name'],
            'pwd'=>password_hash($userData['pwd'], PASSWORD_DEFAULT),
            'email'=>$userData['email'],
            'phone'=>$userData['phone'],
        ];

        $result = $this->db->execPrepare($sql, $params);

        if($result === false) {
            return 'errors';
        }
        $_SESSION['auth'] = true;
        $_SESSION['user_name'] = $userData['user_name'];
        return 'added';
    }
    public function addCompany($companyData)
    {
        $sql = "INSERT INTO company (name_c, disc_c, site_c, layer_a, ogrn, phone_con, email_c, cs, manager, psd)
              VALUES (:name_c, :disc_c, :site_c, :layer_a, :ogrn, :phone_con, :email_c, :cs, :manager, :psd)";
        $params = [
            'name_c'=>$companyData['name_c'],
            'disc_c'=>$companyData['disc_c'],
            'site_c'=>$companyData['site_c'],
            'layer_a'=>$companyData['layer_a'],
            'ogrn'=>$companyData['ogrn'],
            'phone_con'=>$companyData['phone_con'],
            'email_c'=>$companyData['email_c'],
            'cs'=>$companyData['cs'],
            'manager'=>$companyData['manager'],
            'psd'=>password_hash($companyData['psd'], PASSWORD_DEFAULT)
        ];

        $result = $this->db->execPrepare($sql, $params);

        if($result === false) {
            return 'errors';
        }
        $_SESSION['auth'] = true;
        $_SESSION['name_c'] = $companyData['name_c'];
        return 'added';
    }



    }