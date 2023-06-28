<?php

require_once("../../../inc/Config.inc.php");
require_once("../../../inc/Entities/Products.class.php");
require_once("../../../inc/Ultilities/PDOAgent.class.php");
require_once("../../../inc/Ultilities/ProductConverter.class.php");
require_once("../../../inc/Ultilities/DAO/ProductsDAO.class.php");

ProductDAO::startDb();

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,HEAD,OPTIONS,PUT,DELETE");
header('Content-Type: application/json; charset=utf-8');

$method = $_SERVER["REQUEST_METHOD"];

switch($method) {
    case "POST":
        $data = json_decode(file_get_contents('php://input'));
        ProductDAO::insertTest(
            ProductConverter::convertToObj($data)
        );
        // header("Location: http://localhost:8080");
    break;
}
