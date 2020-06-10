<?php
/**
 * Class User
 * Author: Bridget Vlasich
 * Date: 2020-06-09
 * Version: 1
 */
include_once "DB.php";
include_once "Category.php";
include_once "Product.php";

class User
{
    public $id;
    public $username;
    private $password;
    public $name;

    /**
     * User constructor.
     * @param $id
     * @param $username
     * @param $password
     * @param $name
     */
    public function __construct($id, $username, $password, $name)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
    }


    /**
     * @name viewCategories
     * @return category array
     */
    public function viewCategories(){
        $conn = (new DB())->connection; //create connection from DB class
        $sql = "select * from category"; //my query
        $categories = array(); //my categories is an array
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            while ($row=$result->fetch_assoc()){
                $category = new Category($row["id"], $row["name"], $row["image"]); //each row in table is one category
                array_push($categories, $category); //push category to category array
            }
        }
        $conn->close(); //close database connection
        return $categories;
    }


    /**
     * @name showProductsByCategory
     * @param $categoryID
     * @return product array
     */
    public function showProductsByCategory($categoryID){
        $conn = (new DB())->connection;
        $sql = "select * from product where categoryid=".$categoryID; // . means merge two string
        $products = array();
        $result = $conn->query($sql);
        if ($result->num_rows>0){
            while ($row = $result->fetch_assoc()){
                $product = new Product($row["id"], $row["name"], $row["price"],
                    $row['image'],$row["categoryid"]);
                array_push($products,$product);
            }
        }
        $conn->close();
        return $products;
    }

}
