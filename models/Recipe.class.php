<?php

class Recipe extends BaseSQL {

    protected $id;
    protected $preparation_time;
    protected $bake_time;
    protected $nb_guests;
    protected $img_url;
    protected $plate_type;
    protected $difficulty;
    protected $author_id;
    protected $created_at;
    protected $deactivated;

    public function __construct()
    {
        parent::__construct();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPreparationTime()
    {
        return $this->preparation_time;
    }

    public function setPreparationTime($preparation_time)
    {
        $this->preparation_time = trim(strtolower(addslashes($preparation_time)));
    }

    public function getBakeTime()
    {
        return $this->bake_time;
    }

    public function setBakeTime($bake_time)
    {
        $this->bake_time = trim(addslashes($bake_time));
    }

    public function getNbGuests()
    {
        return $this->nb_guests;
    }

    public function setNbGuests($nb_guests)
    {
        $this->nb_guests = trim(addslashes($nb_guests));
    }

    public function getImgUrl()
    {
        return $this->img_url;
    }

    public function setImgUrl($img_url)
    {
        $this->img_url = trim($img_url);
    }

    public function getPlateType()
    {
        return $this->plate_type;
    }

    public function setPlateType($plate_type)
    {
        $this->plate_type = trim(addslashes(strtolower($plate_type)));
    }

    public function getDifficulty()
    {
        return $this->difficulty;
    }

    public function setDifficulty($difficulty)
    {
        $this->difficulty = trim(addslashes(strtolower($difficulty)));
    }

    public function getAuthorId()
    {
        return $this->author_id;
    }

    public function setAuthorId($author_id)
    {
        $this->author_id = trim($author_id);
    }

    public function getCreated(){
        return $this->created_at;
    }
    public function setCreated(){
        $this->created_at = date("Ymd");
    }
    public function getDeactivated(){
        return $this->deactivated;
    }
    public function setDeactivated(){
        $this->deactivated = date("Ymd");
    }
}
