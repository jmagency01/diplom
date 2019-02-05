<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 29.01.2019
 * Time: 21:20
 */

namespace Vlad\Bishen;


use Doctrine\DBAL\Driver\PDOConnection;

class Database extends PDOConnection
{
      public function __construct() {
          parent::__construct('mysql:host=localhost;dbname=mvc', 'root', '');
      }
  }
?>