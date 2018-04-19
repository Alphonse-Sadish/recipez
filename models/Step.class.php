<?php

class Step extends BaseSQL {

    protected $id;
	protected $text;
	protected $step;
	protected $recipe_id;
	protected $created_at;

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
        $this->text = $text;
    }

    public function getStep()
    {
        return $this->step;
    }

    public function setStep($step)
    {
        $this->step = $step;
    }

    public function getRecipeId()
    {
        return $this->recipe_id;
    }

    public function setRecipeId($recipe_id)
    {
        $this->recipe_id = $recipe_id;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

}