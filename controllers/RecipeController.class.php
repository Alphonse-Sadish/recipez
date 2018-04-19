<?php

class RecipeController
{
    public function indexAction(){

        $title = "Liste Recette";
        $v = new View("recettes/recette", "front");
        $v->assign("title", $title);
    }
    public function addAction(){

        $title = "Creation Recette";
        $v = new View("recettes/addRecette", "front");
        $v->assign("title", $title);
    }
    public function editAction(){
        $recette = new Recette();
    }
    public function deleteAction(){

    }

    public function showAction($params)
    {
        $v = new View('recipe/showRecipe', 'front');
        $comments = (new Comment())->findByRecipe(1);
        $v->assign('title', 'Salade Cesar');
        $v->assign('comments', $comments);
    }


}