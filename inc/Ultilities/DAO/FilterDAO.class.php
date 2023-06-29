<?php

class FilterDAO {

    private static $db;

    public static function startDb(){
        self::$db = new PDOAgent('Filter');
    }

    public static function getGender(){

        $sql = 'SELECT DISTINCT gender FROM products';

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->resultSet();
        
    }

    public static function getCategory(){

        $sql = 'SELECT DISTINCT category FROM products';

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->resultSet();

    }

    public static function getType(){

        $sql = 'SELECT DISTINCT type FROM products';

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->resultSet();

    }

    public static function getBaseColor(){

        $sql = 'SELECT DISTINCT baseColor FROM products';

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->resultSet();

    }

    public static function getSize(){

        $sql = 'SELECT DISTINCT size FROM products';

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->resultSet();

    }


}