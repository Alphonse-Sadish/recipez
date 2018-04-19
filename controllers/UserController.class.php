<?php

class UserController
{
    public function indexAction(){

        $title = "Connexion";
        $v = new View("connexion", "front");
        $v->assign("title", $title);
    }

    public function inscriptionAction(){

        $title = "Inscription";
        $v = new View("inscription", "front");
        $v->assign("title", $title);
    }

    public function connectAction($params){

    }

    public function removeAction()
    {
        $v = new View("showRecipe", "front");
    }





}