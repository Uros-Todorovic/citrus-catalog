<?php

class Product extends DB_Object {
    public $id;
    public $title;
    public $picture;
    public $description;

    public static function find_all_products(){
        $sql = "SELECT * FROM product";
        return static::find_querys($sql);
    }

}