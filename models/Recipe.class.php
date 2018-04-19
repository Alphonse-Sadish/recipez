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
    protected $deleted_at;

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
        $this->preparation_time = $preparation_time;
    }

    public function getBakeTime()
    {
        return $this->bake_time;
    }

    public function setBakeTime($bake_time)
    {
        $this->bake_time = $bake_time;
    }

    public function getNbGuests()
    {
        return $this->nb_guests;
    }

    public function setNbGuests($nb_guests)
    {
        $this->nb_guests = $nb_guests;
    }

    public function getImgUrl()
    {
        return $this->img_url;
    }

    public function setImgUrl($img_url)
    {
        $this->img_url = $img_url;
    }

    public function getPlateType()
    {
        return $this->plate_type;
    }

    public function setPlateType($plate_type)
    {
        $this->plate_type = $plate_type;
    }

    public function getDifficulty()
    {
        return $this->difficulty;
    }

    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;
    }

    public function getAuthorId()
    {
        return $this->author_id;
    }

    public function setAuthorId($author_id)
    {
        $this->author_id = $author_id;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getDeletedAt()
    {
        return $this->deleted_at;
    }

    public function setDeletedAt($deleted_at)
    {
        $this->deleted_at = $deleted_at;
    }
}
