<?php

class IngredientUnit extends BaseSQL
{
    private $ingredient_id;
    private $unit_id;
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getIngredientId()
    {
        return $this->ingredient_id;
    }
    
    public function setIngredientId($ingredient_id)
    {
        $this->ingredient_id = $ingredient_id;
    }
    
    public function getUnitId()
    {
        return $this->unit_id;
    }
    
    public function setUnitId($unit_id)
    {
        $this->unit_id = $unit_id;
    }
    
    

}