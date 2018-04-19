<?php

class RecipeUnit extends BaseSQL
{
    private $id;
    private $recipe_id;
    private $ingredient_id;
    private $unit_id;
    private $quantity;

    public function __construct()
    {
        parent::__construct();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getRecipeId()
    {
        return $this->recipe_id;
    }

    public function setRecipeId($recipe_id)
    {
        $this->recipe_id = $recipe_id;
    }

    public function getIngredientId()
    {
        return $this->ingredient_id;
    }

    public function setIngredientId($ingredient_id)
    {
        $this->ingredient_id = $ingredient_id;
    }

    /**
     * @return mixed
     */
    public function getUnitId()
    {
        return $this->unit_id;
    }

    public function setUnitId($unit_id)
    {
        $this->unit_id = $unit_id;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }



}