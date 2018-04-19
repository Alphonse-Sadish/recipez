<?php

class IndexController{

	public function indexAction(){
        $title = "Recipez";
		$v = new View("showRecipe", "front");
        $v->assign("title", $title);
	}
	public function errorAction(){
        $v = new View("errors/error","front");
    }

}