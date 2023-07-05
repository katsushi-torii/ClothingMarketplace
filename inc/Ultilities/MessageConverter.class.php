<?php

class MessageConverter {
    static function convertMessage($newMessage){
        if ( ! is_array( $newMessage ) ) {
            $stdObj = new stdClass;
    
            $stdObj->messageId = $newMessage->getMessageId();
            $stdObj->senderId = $newMessage->getSenderId();
            $stdObj->message = $newMessage->getMessage();   
            $stdObj->chatNumber = $newMessage->getChatNumber();
            $stdObj->productId = $newMessage->getProductId();
    
            return $stdObj;       
        }else{
            $chatList = [];
            foreach($newMessage as $chatMessage){
                $objlist = [];
                for($i = 0; $i < count($chatMessage); $i++){
                    $stdObj = new stdClass;
    
                    $stdObj->messageId = $chatMessage[$i]->getMessageId();
                    $stdObj->senderId = $chatMessage[$i]->getSenderId();
                    $stdObj->message = $chatMessage[$i]->getMessage();
                    $stdObj->chatId = $chatMessage[$i]->chatId;
                    // $stdObj->productId = $chatMessage[$i]->getProductId();
                    
                    $objlist[] = $stdObj;
                }
                $chatList[] = $objlist;
            }
            return $chatList;
        }
    }

    public static function convertToObj($stdObject) {

        $newMessage = new Message();
        $newMessage->setChatId($stdObject->chatId);
        $newMessage->setSenderId($stdObject->senderId);
        $newMessage->setMessage($stdObject->message);
        $newMessage->setProductId($stdObject->productId);
        
        return $newMessage;
    }
}