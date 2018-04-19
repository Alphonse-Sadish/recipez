<?php

class Unit extends BaseSQL {

	protected $id;
	protected $name;

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
		$this->name = strtolower(trim($name));
	}



}