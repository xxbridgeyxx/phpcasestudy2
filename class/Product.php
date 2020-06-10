<?php
/**
 * Class Product
 * Author: Bridget Vlasich
 * Date: 2020-06-09
 * Version: 1
 */

class Product
{
    public $id;
    public $name;
    public $price;
    public $image;
    public $categoryID;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $price
     * @param $categoryID
     */
    public function __construct($id, $name, $price, $image, $categoryID)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->categoryID = $categoryID;
    }


}
