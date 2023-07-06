<?php

require_once("../../../inc/Config.inc.php");
require_once("../../../inc/Entities/Filter.class.php");
require_once("../../../inc/Ultilities/PDOAgent.class.php");
require_once("../../../inc/Ultilities/FilterConverter.class.php");
require_once("../../../inc/Ultilities/DAO/FilterDAO.class.php");

FilterDAO::startDb();

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,HEAD,OPTIONS,PUT,DELETE");
header('Content-Type: application/json; charset=utf-8');


$array = array_merge(
    FilterDAO::getGender(),
    FilterDAO::getCategory(),
    FilterDAO::getType(),
    FilterDAO::getBaseColor(),
    FilterDAO::getSize()
);

echo json_encode(
    FilterConverter::convertFilter(
    $array
    )
);