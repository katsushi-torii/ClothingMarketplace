<?php

require_once("../../../inc/Config.inc.php");
require_once("../../../inc/Entities/Message.class.php");
require_once("../../../inc/Ultilities/PDOAgent.class.php");
require_once("../../../inc/Ultilities/MessageConverter.class.php");
require_once("../../../inc/Ultilities/DAO/MessageDAO.class.php");

MessageDAO::startDb();

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,HEAD,OPTIONS,PUT,DELETE");
header('Content-Type: application/json; charset=utf-8');

$productId = $_GET['productId'];

$chats = [];
foreach(MessageDAO::getChatsByProductId($productId) as $chat){
    $chats[] = $chat->getChatId();
};

if(count($chats) >= 1){
    echo json_encode(MessageConverter::convertMessage(
        MessageDAO::getMessagesByChatId($chats)
    ));
}else{
    echo "No data yet";
}



if($_SERVER["REQUEST_METHOD"] == "POST"){
    $data = json_decode(file_get_contents('php://input'));
    $convertedData = MessageConverter::convertToObj($data);
    if($convertedData->getChatId() == 0){
        // $maxChatId = MessageDAO::getMaxChatId()->getChatId();
        MessageDAO::insertToChat($convertedData);
        $newChatId = MessageDAO::getMaxChatId()->getChatId();
        MessageDAO::insertToMessage($newChatId,$convertedData);
    }else{
        MessageDAO::insertToMessage2($convertedData);
    }
}
