<?php

class Comment extends BaseSQL {

	protected $id;
	protected $text;
	protected $author_id;
	protected $recipe_id;
	protected $created_at;
	protected $deactivated;

	public function __construct() {
	    parent::__construct();
	}
    public function getId() {
        return $this->id;
    }

	public function getText() {
		return $this->text;
	}

	public function setText($text) {
		$this->text = trim(addslashes($text));
	}
    public function getAuthorId()
    {
        return $this->author_id;
    }

    public function setAuthorId($author_id)
    {
        $this->author_id = trim($author_id);
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
