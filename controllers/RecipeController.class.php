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
    	$recipeId = $params['URL'][0];
    	$r = new Recipe();
    	$recipe = $r->findById($recipeId);
    	if(!empty($recipe)){
	        $v = new View('recipe/showRecipe', 'front');
	        $comments = (new Comment())->findByRecipe(1);
	        $recipeUnits = $r->findRecipeUnit($recipeId);
	        $steps = (new Step())->findStepsByRecipeId($recipeId);
	        $v->assign('title', ucwords($recipe['name']));
	        $v->assign('recipe', $recipe);
	        $v->assign('recipeUnits', $recipe);
	        $v->assign('comments', $comments);
	        $v->assign('recipeUnits', $recipeUnits);
	        $v->assign('steps', $steps);
	    } else {
    		die('Cette recette n\'existe pas');
	    }
    }


}