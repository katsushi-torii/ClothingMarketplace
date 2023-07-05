<?php

require_once("../../../inc/Config.inc.php");
require_once("../../../inc/Entities/Products.class.php");
require_once("../../../inc/Entities/User.class.php");
require_once("../../../inc/Ultilities/PDOAgent.class.php");
require_once("../../../inc/Ultilities/ProductConverter.class.php");
require_once("../../../inc/Ultilities/UserConverter.class.php");
require_once("../../../inc/Ultilities/DAO/ProductsDAO.class.php");
require_once("../../../inc/Ultilities/DAO/UserDAO.class.php");

ProductDAO::startDb();
UserDAO::startDb();

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,HEAD,OPTIONS,PUT,DELETE");
header('Content-Type: application/json; charset=utf-8');

$productId = $_GET['productId'];
$userId = ProductDAO::getProductById($productId)->getUserId();

echo json_encode(
    UserProductConverter::convertUserProduct(
        UserDAO::getUserById($userId),
        ProductDAO::getProductById($productId)
    )    
);
