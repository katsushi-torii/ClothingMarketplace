<?php


class ProductDAO {

    private static $db;

    public static function startDb(){
        self::$db = new PDOAgent('Product');
    }
    
    public static function getAllProducts(){
        
        $sql = "SELECT * FROM products LIMIT 20";

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getProductById( int $id){

        $sql = "SELECT * FROM products WHERE productId=:id";

        self::$db->query($sql);

        self::$db->bind(':id',$id);

        self::$db->execute();

        return self::$db->singleResult();
    }

    public static function getMaxProductId() {
        $sql = "SELECT productId FROM products ORDER BY productId DESC LIMIT 1";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->singleResult();
    }

    public static function insertProduct(int $productId, Product $product){

        $sql = "INSERT INTO products (productId,gender,category,type,baseColor,productName,price,size,userId,image) VALUE(:productId,:gender,:category,:type,:color,:name,:price,:size,:userId,:image)";
    
        self::$db->query($sql);
    
        self::$db->bind(':productId',$productId);
        self::$db->bind(':gender',$product->getGender());
        self::$db->bind(':category',$product->getCategory());
        self::$db->bind(':type',$product->getType());
        self::$db->bind(':color',$product->getBaseColor());
        self::$db->bind(':name',$product->getProductName());
        self::$db->bind(':price',$product->getPrice());
        self::$db->bind(':size',$product->getSize());
        self::$db->bind(':userId',$product->getUserId());
        self::$db->bind(':image',$product->getImage());
    
        self::$db->execute();
    
        return self::$db->lastInsertId();
    }
}