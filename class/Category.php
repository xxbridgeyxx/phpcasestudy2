<?php
/**
 * Class Category
 * Author: Bridget Vlasich
 * Date: 2020-06-09
 * Version: 1
 */

class Category
{
    public $id;
    public $name;
    public $image;

    /**
     * Category constructor.
     * @param $id
     * @param $name
     * @param $image
     */
    public function __construct($id, $name, $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
    }
}
