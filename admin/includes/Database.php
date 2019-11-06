<?php

class Database {
    private static $instance = null;
    private $connection;
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db_name = "citrus_catalog";

    private function __construct(){
        $this->connection = new PDO("mysql:host={$this->host};dbname={$this->db_name}",$this->user,$this->password);
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public static function get_connection(){
        if (!self::$instance) {
            self::$instance = new Database; 
        }
        return self::$instance;
    }

    public function connect(){
        return $this->connection;
    }

    public function get_rows($sql){
        try {
            $data = $this->connection->query($sql);
            return $data->fetchAll();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }
    
    public function get_row($query, $params = []){
        try {
            $data = $this->connection->prepare($query);
            $data->execute($params);
            return $data->fetch();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function insert_row($query, $params = []){
        try {
            $data = $this->connection->prepare($query);
            $inserted = $data->execute($params);
            return $inserted;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function last_insert_id(){
        return $this->connection->lastInsertId();
    }

    public function update_row($query, $params = []){
        try {
            $data = $this->connection->prepare($query);
            $data->execute($params);
            $rows_affected = $data->rowCount();
            return ($rows_affected == 1) ? true : false;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
            
    }

}