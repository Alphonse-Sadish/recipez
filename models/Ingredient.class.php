<?php

class Ingredient extends BaseSQL {


	protected $id;
	protected $name;
	protected $imgUrl;
	protected $created_at;
	protected $deactivated;

	public function __construct() {
		parent::__construct();
	}

	public function getId() {
		return $this->id;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = trim(strtolower(addslashes($name)));
	}

	public function getImgUrl() {
		return $this->imgUrl;
	}

	public function setImgUrl($imgUrl) {

		$this->imgUrl = trim($imgUrl);
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
