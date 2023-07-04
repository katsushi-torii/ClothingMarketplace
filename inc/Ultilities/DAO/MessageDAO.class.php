<?php

class MessageDAO {

    private static $db;

    public static function startDb(){
        self::$db = new PDOAgent('Message');
    }

    public static function getChatsByProductId( int $pId){

        $sql = "SELECT chatId FROM chats WHERE productId=:id";

        self::$db->query($sql);

        self::$db->bind(':id',$pId);

        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getMessagesByChatId(array $chats){
        foreach($chats as $chatId){

            $sql = "SELECT * FROM chatsmessages WHERE chatId=:id";

            self::$db->query($sql);
    
            self::$db->bind(':id',$chatId);
    
            self::$db->execute();
    
            $messageList[] = self::$db->resultSet();
        }
        return $messageList;
    }

    public static function insertToChat(int $chatId, Message $message){

        $sql = "INSERT INTO chats (chatId,productId,buyerId) VALUE(:chatId,:productId,1)";
    
        self::$db->query($sql);
    
        self::$db->bind(':chatId',$chatId);
        self::$db->bind(':productId',$message->getProductId());
    
        self::$db->execute();
    
        return self::$db->lastInsertId();
    }

    public static function getMaxChatId() {
        $sql = "SELECT chatId FROM chats ORDER BY chatId DESC LIMIT 1";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->singleResult();
    }

    public static function insertToMessage(int $id, Message $message){

        $sql = "INSERT INTO chatsmessages (chatId,message,senderId) VALUE(:chatId,:message,:senderId)";
    
        self::$db->query($sql);
    
        self::$db->bind(':chatId',$id);
        self::$db->bind(':message',$message->getMessage());
        self::$db->bind(':senderId',$message->getSenderId());
    
        self::$db->execute();
    
        return self::$db->lastInsertId();
    }

    public static function insertToMessage2( Message $message){

        $sql = "INSERT INTO chatsmessages (chatId,message,senderId) VALUE(:chatId,:message,:senderId)";
    
        self::$db->query($sql);
    
        self::$db->bind(':chatId',$message->getChatId());
        self::$db->bind(':message',$message->getMessage());
        self::$db->bind(':senderId',$message->getSenderId());
    
        self::$db->execute();
    
        return self::$db->lastInsertId();
    }

}