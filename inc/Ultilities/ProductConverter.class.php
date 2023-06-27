<?php

class ProductConverter {

    public static function convertProduct( $newProduct ) {
        if ( ! is_array( $newProduct ) ) {
            $stdObj = new stdClass;

            $stdObj->productId = $newProduct->getProductId();
            $stdObj->gender = $newProduct->getGender();
            $stdObj->category = $newProduct->getCategory();
            $stdObj->type = $newProduct->getType();
            $stdObj->baseColor = $newProduct->getBaseColor();
            $stdObj->productName = $newProduct->getProductName();
            $stdObj->price = $newProduct->getPrice();
            $stdObj->size = $newProduct->getSize();
            $stdObj->userId = $newProduct->getUserId();
            $stdObj->iamge = $newProduct->getImage();

            return $stdObj;
        } else {
            $objList = [];
            for($i = 0; $i < count($newProduct); $i++){
                $stdObj = new stdClass;

                $stdObj->productId = $newProduct[$i]->getProductId();
                $stdObj->gender = $newProduct[$i]->getGender();
                $stdObj->category = $newProduct[$i]->getCategory();
                $stdObj->type = $newProduct[$i]->getType();
                $stdObj->baseColor = $newProduct[$i]->getBaseColor();
                $stdObj->productName = $newProduct[$i]->getProductName();
                $stdObj->price = $newProduct[$i]->getPrice();
                $stdObj->size = $newProduct[$i]->getSize();
                $stdObj->userId = $newProduct[$i]->getUserId();
                $stdObj->image = $newProduct[$i]->getImage();
                
                $objList[] = $stdObj;
            }

            return $objList;
        }
    }
}