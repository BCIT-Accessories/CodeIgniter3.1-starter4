<?php

class Sets extends CSV_Model
{
    // Set id
    public $setId;
    // Set name
    public $setName;
    // Set helmet
    public $helmet;
    // Set chest
    public $chest;
    // Set left shoulder pad
    public $shoulder_left;
    // Set right shoulder pad
    public $shoulder_right;
    // Set wrist guard
    public $wrist;

    /**
     * Contructor for Sets
     */
    function __construct()
    {
        parent::__construct(APPPATH . "../data/sets.csv", "setId", "sets");
    }

    protected function store()
    {
        // rebuild the keys table
        $this->reindex();
        //---------------------
        if (($handle = fopen($this->_origin, "w")) !== FALSE)
        {
            fputcsv($handle, $this->_fields);
            foreach ($this->_data as $key => $record)
                fputcsv($handle, array_values((array) $record));
            fclose($handle);
        }
        // --------------------
    }
}