<?php

class Step extends BaseSQL {

    protected $id;
	protected $text;
	protected $step;
	protected $recipe_id;
	protected $created_at;
	protected $deactivated;

	public function __construct() {
	    parent::__construct();
	}

    public function getId()
    {
        return $this->id;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = trim(strtolower(addslashes($text)));
    }

    public function getStep()
    {
        return $this->step;
    }

    public function setStep($step)
    {
        $this->step = trim(addslashes(strtolower($step)));
    }

    public function getRecipeId()
    {
        return $this->recipe_id;
    }

    public function setRecipeId($recipe_id)
    {
        $this->recipe_id = trim($recipe_id);
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
