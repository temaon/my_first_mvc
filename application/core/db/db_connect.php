<?php

/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 05.04.17
 * Time: 19:18
 */
class DBConnect
{

    private static $connect;

    protected $db_user;

    protected $db_password;

    protected $db_host;

    protected $db_port;

    protected $db_name;

    private function __construct()
    {
        $config = (include_once realpath(__DIR__ . '/../../config/database.php'));
        $this->db_user = $config['db_username'];
        $this->db_password = $config['db_user_password'];
        $this->db_name = $config['db_name'];
        $this->db_host = $config['db_host'];
        $this->db_port = $config['db_port'];
    }

    public function getConnect()
    {
        try{
            $app_connect = new PDO(
                "mysql:dbname=$this->db_name;host=$this->db_host;charset=utf8",
                $this->db_user, $this->db_password);

            return $app_connect;
        } catch (PDOException $e){
            echo $e->getMessage();
        }

    }


    static public function connect()
    {
        if (empty(self::$connect)) {
            $connect = new self;
            self::$connect = $connect->getConnect();
        }
        return self::$connect;

    }
}