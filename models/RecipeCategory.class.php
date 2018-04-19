<?php

class RecipeCategory extends BaseSQL
{
    private $recipe_id;
    private $category_id;

    public function __construct()
    {
        parent::__construct();
    }

    public function getRecipeId()
    {
        return $this->recipe_id;
    }

    public function setRecipeId($recipe_id)
    {
        $this->recipe_id = $recipe_id;
    }

    public function getCategoryId()
    {
        return $this->category_id;
    }

    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }



}