<?php

class Categories extends CSV_Model
{
    // Category Id
    public $categoryId;
    // Category Name;
    public $categoryName;
    // Equipment List
    public $equipment;

    /**
     * Constructor for Categories
     */
    function __construct()
    {
        parent::__construct(APPPATH . "../data/categories.csv", "categoryId", "categories");
    }
}