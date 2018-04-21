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
    }<?php
/**
 * Created by PhpStorm.
 * User: alpho
 * Date: 27/03/2018
 * Time: 19:36
 */

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

    public function  addAction(){

        $user = new User();
        $errors = "";
        $form = $user->configFormAdd();
        $title = "Ajouter utilisateur";
        $littleTitle = "";


        if(!empty($params["POST"])){
            //Verification des saisies

            $errors = Validator::validate($form, $params["POST"]);
            $a = md5(random_int(000000,999999));

            if(empty($errors)){
                $user->setFirstname($params["POST"]["firstname"]);
                $user->setLastname($params["POST"]["lastname"]);
                $user->setEmail($params["POST"]["email"]);
                $user->setPwd($a);
                $user->setToken();
                $user->setDateInserted();
                $user->setRole('client');
                $user->save();
            }
        }


        $v = new View("users/add", "front");
        $v->assign("config",$form);
        $v->assign("errors",$errors);
        $v->assign("title", $title);
        $v->assign("littleTitle",$littleTitle);
    }
    public function editAction(){

        $title = "Modification Utilisateur";
        $v = new View("users/edit", "front");
        $v->assign("title", $title);
    }

    public function connectedAction($params){
        $email = $params['POST']['email'];
        $pwd = $params['POST']['pwd'];


        $user = (new User())->findUserByEmail($email);


        if($user['email'] == $email && password_verify($pwd,$user['pwd'])){
            header('Location:'.DIRNAME.'index/dashboard');
        } else {
            header('Location:'.DIRNAME.'index/connexion');
        }
    }





}

    public function connectAction($params){

    }

    public function removeAction()
    {
        $v = new View("showRecipe", "front");
    }





}
