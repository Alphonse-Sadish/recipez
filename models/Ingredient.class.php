<?php

class Ingredient extends BaseSQL {


	protected $id;
	protected $name;
	protected $imgUrl;

	public function __construct() {
		parent::__construct();
	}

	public function getId() {
		return $this->id;
	}

	public function getName() {
		return $this->name;
	}

	public function setName( $name ) {
		$this->name = $name;
	}

	public function getImgUrl() {
		return $this->imgUrl;
	}

	public function setImgUrl( $imgUrl ) {
		$this->imgUrl = $imgUrl;
	}

}
