<?php
/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 05.04.17
 * Time: 18:21
 */

abstract class DBConnect{
    const USERNAME="root";
    const PASSWORD="зфыыцщкв";
    const HOST="localhost";
    const DB="test_database";

    public function getConnection(){
        $username = self::USERNAME;
        $password = self::PASSWORD;
        $host = self::HOST;
        $db = self::DB;
        $connection = new PDO("mysql:dbname=$db;host=$host", $username, $password);
        return $connection;
    }
    public function queryList($sql, $args){
        $connection = $this->getConnection();
        $stmt = $connection->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}