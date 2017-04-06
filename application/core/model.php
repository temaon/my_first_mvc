<?php

class Model
{
    private $db_connection;

    /**
     * @var string #Название таблицы модели
     */
    public $table_name;

    private $query_type;

    private $condition;

    private $field_list = '*';



    public function __construct()
    {
        $this->db_connection = DBConnect::connect();
    }

    public function getConnection()
    {
        return $this->db_connection;
    }

    public function get(){
        $this->query_type = 'SELECT';
    }

    private function buildQuery(){
        return $this->query = $this->getQueryType();

    }

    private function getQueryType(){
        return "$this->query_type ";
    }

    private function getQueryCondition(){
        if($this->condition){
            return "WHERE $this->condition";
        }
    }

        /*
            Модель обычно включает методы выборки данных, это могут быть:
                > методы нативных библиотек pgsql или mysql;
                > методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
                > методы ORM;
                > методы для работы с NoSQL;
                > и др.
        */
        // метод выборки данных
    public function get_data()
    {
        // todo
    }
}