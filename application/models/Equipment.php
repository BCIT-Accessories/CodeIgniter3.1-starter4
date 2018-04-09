<?php

class Equipment extends CSV_Model
{
    // Equipment id
    public $equipmentId;
    // Equipment description
    public $equipmentDesc;
    // Equipment Image path
    public $equipmentImage;
    // Equipment protection
    public $protection;
    // Equipment speed
    public $speed;
    // Equipment weight
    public $weight;

    // Equipment category name
    public $equipmentName;
    // Equipment category
    public $categoryId;

    /**
     * Contructor for Equipment
     */
    function __construct()
    {
        parent::__construct(APPPATH . "../data/equipment.csv", "equipmentId", "equipment");
    }

}