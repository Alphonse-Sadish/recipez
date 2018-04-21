<?php

class Unit extends BaseSQL {

	protected $id;
	protected $name;
	protected $deactivated;
	protected $created_at;

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
		$this->name = strtolower(trim(addslashes($name)));
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
