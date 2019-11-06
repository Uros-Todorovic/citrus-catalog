<?php

class DB_Object{
    
    public static function find_querys($sql){
        global $database;
        $get_rows = $database->get_rows($sql);
        $object_array = [];
        foreach($get_rows as $get_row) {
            $object_array[] = static::instantination($get_row);
        }
       return $object_array;
    }

    public static function find_by_query($sql, $params){
        global $database;
        $get_row = $database->get_row($sql, $params);
        $object_array[] = static::instantination($get_row);
       return $object_array;
    }

    public static function instantination($record){
        if (!$record) {
            return false;
        }

        $calling_class = get_called_class();
        $new_object = new $calling_class;

        foreach ($record as $property => $value) {
            $new_object->$property = $value;
        }
        return $new_object;
    }

    public function insert($sql, $params){
        global $database;
       
        $this->id = $database->last_insert_id();
        $database->insert_row($sql, $params); 
    }

    public static function update($sql, $params){
        global $database;
        $database->update_row($sql, $params);
    }
}