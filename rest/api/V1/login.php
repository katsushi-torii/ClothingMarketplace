<?php

require_once("../../../inc/Config.inc.php");
require_once("../../../inc/Entities/User.class.php");
require_once("../../../inc/Ultilities/PDOAgent.class.php");
require_once("../../../inc/Ultilities/UserConverter.class.php");
require_once("../../../inc/Ultilities/DAO/UserDAO.class.php");

UserDAO::startDb();

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Content-type: application/json; charset=utf-8");

$userLogin = new stdClass;

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "POST":
        $data = json_decode(file_get_contents('php://input'));
        $response = new stdClass;
        $response->success = false;
        $response->message = "Login failed";
        $response->sessionToken = null;

        $userLogin = UserProductConverter::convertUser(UserDAO::getUserByUserName($data->userName));

        if (
            ($data->userName == $userLogin->userName) &&
            ($data->password == $userLogin->password)
        ) {
            session_start();
            $_SESSION["user_id"] = $userLogin->userId;
            $response->success = true;
            $response->message = "Login success - PHP";
            $response->sessionToken = session_id();
            $response->session = $_SESSION;
            $response->user = $userLogin;
        }
        echo json_encode($response);
        break;
}