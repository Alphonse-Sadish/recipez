<?php

class IngredientController
{
    public function indexAction(){
        $title = "La liste des ingrédients";
        $v = new View("ingredients/ingredient", "front");
        $v->assign("title", $title);
    }
    public function addAction(){

    }
    public function editAction(){
        $ingredient = new Ingredient();
    }
    public function deleteAction(){

    }
}