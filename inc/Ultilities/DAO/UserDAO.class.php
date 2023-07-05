<?php

class UserDAO {

    private static $db;

    public static function startDb(){
        self::$db = new PDOAgent('User');
    }

    public static function getUserById( int $id){
        $sql = "SELECT * FROM userdata WHERE userId=:id";

        self::$db->query($sql);
        self::$db->bind(':id',$id);
        self::$db->execute();

        return self::$db->singleResult();
    }

    public static function getUserByUserName(string $userName){
        $sql = "SELECT * FROM userdata WHERE userName=:userName";

        self::$db->query($sql);
        self::$db->bind(':userName',$userName);
        self::$db->execute();

        return self::$db->singleResult();
    }
}