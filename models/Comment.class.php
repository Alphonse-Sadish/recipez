<?php

class Comment extends BaseSQL {

	protected $id;
	protected $text;
	protected $author_id;
	protected $recipe_id;
	protected $created_at;
	protected $deleted_at;

	public function __construct() {
	    parent::__construct();
	}

	public function getText() {
		return $this->text;
	}

	public function setText( $text ) {
		$this->text = $text;
	}

	public function getCreatedAt() {
		return $this->created_at;
	}

	public function setCreatedAt( $createdAt ) {
		$this->created_at = $createdAt;
	}

	public function getId() {
		return $this->id;
	}

    public function getAuthorId()
    {
        return $this->author_id;
    }

    public function setAuthorId($author_id)
    {
        $this->author_id = $author_id;
    }

    public function getRecipeId()
    {
        return $this->recipe_id;
    }

    public function setRecipeId($recipe_id)
    {
        $this->recipe_id = $recipe_id;
    }

    public function getDeletedAt()
    {
        return $this->deleted_at;
    }

    public function setDeletedAt($deletedAt)
    {
        $this->deleted_at = $deletedAt;
    }


	public function findByRecipe($recipeId) {
		$sql = "
				SELECT c.id, c.text, c.author_id, c.created_at, u.firstname as author
				FROM comment c
				JOIN user u ON c.author_id = u.id
				";
		return $this->pdo->query($sql)->fetchAll();
    }







}