<?php

class CategoryController
{
    public function indexAction(){
        $title = "La liste des catégories";
        $v = new View("categories/categorie", "front");
        $v->assign("title", $title);
    }
    public function addAction(){

    }
    public function editAction(){
        $recette = new Recette();
    }
    public function deleteAction(){

    }
}