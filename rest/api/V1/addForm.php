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
        $maxIdProduct = ProductDAO::getMaxProductId();
        $newId = $maxIdProduct->getProductId() + 1;
        $data = json_decode(file_get_contents('php://input'));
        ProductDAO::insertProduct(
            $newId, ProductConverter::convertToObj($data)
        );
    break;
}
