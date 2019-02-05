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
        return 'added';
    }
    public function addCompany($companyData)
    {
        $sql = "INSERT INTO company (name_c, disc_c, site_c check_c, layer_a, ogrn, phone_connect, email_c, cs, manager, psd)
              VALUES (:name_c, :dick_c, :site_c, :check_c, :layer_a, :ogrn, :phone_connect, :email_c, :cs, :manager, :psd)";
        $params = [
            'name_c'=>$companyData['name_c'],
            'disc_c'=>$companyData['disc_c'],
            'site_c'=>$companyData['site_c'],
            'check_c'=>$companyData['check_c'],
            'layer_a'=>$companyData['layer_a'],
            'ogrn'=>$companyData['ogrn'],
            'phone_connect'=>$companyData['phone_connect'],
            'email_c'=>$companyData['email_c'],
            'cs'=>$companyData['cs'],
            'manager'=>$companyData['manager'],
            'psd'=>password_hash($companyData['psd'], PASSWORD_DEFAULT)
        ];


        $result = $this->db->execPrepare($sql, $params);

        if($result === false) {
            return 'errors';
        }
        return 'added';
    }



    }