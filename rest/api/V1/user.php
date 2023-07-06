<?php

require_once("../../../inc/Config.inc.php");
require_once("../../../inc/Entities/User.class.php");
require_once("../../../inc/Ultilities/PDOAgent.class.php");
require_once("../../../inc/Ultilities/UserConverter.class.php");
require_once("../../../inc/Ultilities/DAO/UserDAO.class.php");

UserDAO::startDb();

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,HEAD,OPTIONS,PUT,DELETE");
header('Content-Type: application/json; charset=utf-8');

$userId = $_GET['userId'];

echo json_encode(
    UserProductConverter::convertUser(
        UserDAO::getUserById($userId)
    )
);
