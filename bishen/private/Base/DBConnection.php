<?php
namespace Vlad\Bishen\Base;
//include '..\Other\rb.php';

class DBConnection
{
    private $server = 'localhost';
    private $db_name = 'auth';
    private $username = 'root';
    private $pwd = '';

   public $connection;

    public function __construct()
    {
        $this->connection = $this->connect($this->server, $this->db_name,
            $this->username, $this->pwd);
    }

    private function connect(
        $server, $db_name,
        $username, $pwd, array $opt=[]
    )
    {
        $connection = null;
        try {
            $connection =  new \PDO("mysql:host=$server;dbname=$db_name",
                $username, $pwd, [\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION]);
        } catch (\PDOException $exception){
            // обработка ошибки
        }
        return $connection;
    }

    // неподготовленный запрос
    public function exec($sql_string){
//        if(!$this->connection->exec($sql_string)){
//            return "Exec Error";
//        }
        return $this->connection->exec($sql_string);
    }


    // неподготовленный запрос
    public function queryAll($sql_string){
        $statement = $this->connection->query($sql_string);
        if (!$statement) {
            return false; // либо сообщение
        }
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    // неподготовленный запрос
    public function query($sql_string){
        $statement = $this->connection->query($sql_string);
        if (!$statement) {
            return false; // либо сообщение
        }
        return $statement->fetch(\PDO::FETCH_ASSOC);
    }

    // подготовленный запрос
    public function execute($sql_string, $params, $all=true){ //получать данные
        $statement = $this->connection->prepare($sql_string);
        $statement->execute($params);

        if (!$all) {
            return $statement->fetch(\PDO::FETCH_ASSOC);
        }
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function execPrepare($sql_string, $params){ //добавлять данные
        $statement = $this->connection->prepare($sql_string);
        try{
            $statement->execute($params);
        } catch (\PDOException $e){
            var_dump($e->getMessage());
        }
    }
}