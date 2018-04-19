<?php
class User extends BaseSQL{

	protected $id = null;
	protected $firstname;
	protected $lastname;
	protected $email;
	protected $pwd;
	protected $token;
	protected $status=0;

	public function __construct(){
		parent::__construct();
	}

	public function setId($id){
		$this->id = $id;
	}
	public function setFirstname($firstname){
		$this->firstname = ucfirst(strtolower(trim($firstname)));
	}
	public function setLastname($lastname){
		$this->lastname = strtoupper(trim($lastname));
	}
	public function setEmail($email){
		$this->email = strtolower(trim($email));
	}
	public function setPwd($pwd){
		$this->pwd = password_hash($pwd, PASSWORD_DEFAULT);
	}
	public function setToken($token = null){
		if( $token ){
			$this->token = $token;
		}else if(!empty($this->email)){
			$this->token = substr(sha1("GDQgfds4354".$this->email.substr(time(), 5).uniqid()."gdsfd"), 2, 10);
		}else{
			die("Veuillez préciser un email");
		}
	}
	public function setStatus($status){
		$this->status = $status;
	}


	public function configFormAdd(){

		return [
			"config"=>["method"=>"POST", "action"=>"", "submit"=>"S'inscrire"],
			"input"=>[

				"firstname"=>[
					"type"=>"text",
					"placeholder"=>"Votre prénom",
					"required"=>true,
					"minString"=>2,
					"maxString"=>100
				],

				"lastname"=>["type"=>"text","placeholder"=>"Votre nom","required"=>true, "minString"=>2, "maxString"=>100],
				"email"=>["type"=>"email","placeholder"=>"Votre email","required"=>true],
				"emailConfirm"=>["type"=>"email","placeholder"=>"Confirmation","required"=>true, "confirm"=>"email"],
				"pwd"=>["type"=>"password","placeholder"=>"Votre mot de passe","required"=>true],
				"pwdConfirm"=>["type"=>"password","placeholder"=>"Confirmation","required"=>true,"confirm"=>"pwd"]

			]
		];
	}



}






