<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10.02.2019
 * Time: 15:13
 */

namespace Vlad\Bishen\Models;
use Vlad\Bishen\Base\DBConnection;


class ArticleModel
{
    private $db;
    public function __construct()
    {
        $this->db = new DBConnection();
    }

    public function getBlog(){
        $sql = "SELECT * FROM blog";
        return $this->db->queryAll($sql);

    }


}