<?php

class UnitController
{
    public function indexAction(){
        $title = "La liste des unités";
        $v = new View("unites/unite", "front");
        $v->assign("title", $title);
    }
    public function addAction(){

    }
    public function editAction(){
        $unite = new Unite();
    }
    public function deleteAction(){

    }
}