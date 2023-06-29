<?php

//for description page
class UserProductConverter {
    static function convertUserProduct($newUser,$newProduct){
        $stdObj = new stdClass;

        $stdObj->userId = $newUser->getUserId();
        $stdObj->userName = $newUser->getUserName();
        $stdObj->userAvatar = $newUser->getUserAvatar();   
        $stdObj->productId = $newProduct->getProductId();
        $stdObj->gender = $newProduct->getGender();
        $stdObj->category = $newProduct->getCategory();
        $stdObj->type = $newProduct->getType();
        $stdObj->baseColor = $newProduct->getBaseColor();
        $stdObj->productName = $newProduct->getProductName();
        $stdObj->price = $newProduct->getPrice();
        $stdObj->size = $newProduct->getSize();
        $stdObj->image = $newProduct->getImage();

        return $stdObj;
    }
    static function convertUser($user){
        $stdObj = new stdClass;

        $stdObj->userId = $user->getUserId();
        $stdObj->email = $user->getEmail();
        $stdObj->userName = $user->getUserName();
        $stdObj->password = $user->getPassword();
        $stdObj->userAvatar = $user->getUserAvatar();   

        return $stdObj;
    }


}