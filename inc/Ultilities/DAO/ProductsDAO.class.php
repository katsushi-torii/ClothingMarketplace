<?php


class ProductDAO {

    private static $db;

    public static function startDb(){
        self::$db = new PDOAgent('Product');
    }
    
    public static function getAllProducts(){
        
        $sql = "SELECT * FROM products";

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getProductById( int $id ){

        $sql = "SELECT * FROM products WHERE productId=:id";

        self::$db->query($sql);

        self::$db->bind(':id',$id);

        self::$db->execute();

        return self::$db->singleResult();
    }

    public static function deleteProductById( int $id){

        $sql = "DELETE FROM products WHERE productId=:id"; 

        self::$db->query($sql);

        self::$db->bind(':id',$id);

        self::$db->execute();

        return self::$db->singleResult();
    }

    public static function updateProductById( Product $product){

        $sql = "UPDATE products SET gender=:gender,category=:category,type=:type,baseColor=:color,productName=:name,price=:price,size=:size,userId=:userId,image=:image WHERE productId=:id";

        self::$db->query($sql);

        self::$db->bind(':productId',$product->getProductId());
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

        return self::$db->lastIsentItem();
    }

    public static function insertProductById( Product $product){

        $sql = "INSERT INTO products VALUE(:gender:category,:type,:color,:name,:price,:size,:userId,:image";

        self::$db->query($sql);

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

        return self::$db->lastIsentItem();
    }

    public static function getProductsFilter($filter){

        $sql = 'SELECT * FROM products WHERE';

        $params = [];

    }

}