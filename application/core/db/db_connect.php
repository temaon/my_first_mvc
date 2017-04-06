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
        $app_connect = mysqli_connect(
            $this->db_host,
            $this->db_user,
            $this->db_password
        );
        if(mysqli_connect_error($app_connect)) throw new DBException(
            'Ошибка подключения к БД!',
            500
        );

        mysqli_select_db($app_connect,
            $this->db_name
        );
        
        return $app_connect;
    }


    static public function connect()
    {
        if (!empty(self::$connect)) {
            return self::$connect;
        } else {
            $connect_object = new self;
            return self::$connect = $connect_object->getConnect();
        }

//        $connect = mysqli_connect('localhost', $config['user'], $config['password']);
//
//        if(!$connect){
//            die('Ошибка подключения: '. mysqli_connect_error($connect));
//        }
//
//
//        return mysqli_select_db($connect, 'feed');
    }
}