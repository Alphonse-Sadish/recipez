<?php 
class User extends BaseSql{

	protected $id = null;
	protected $firstname;
	protected $lastname;
	protected $email;
	protected $pwd;
	protected $token;
	protected $status;
	protected $date_inserted;
	protected $date_updated;
	protected $role;
	protected $deactivated;



	public function __construct(){
		parent::__construct();
	}
	public function getId(){
	    return $this->id;
    }
    public function getFirstname(){
	    return $this->firstname;
    }
    public function getLastname(){
        return $this->lastname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPwd(){
        return $this->pwd;
    }
    public function getToken(){
        return $this->token;
    }
    public function getStatus(){
        return $this->status;
    }
    public function getDateinserted(){
        return $this->date_inserted;
    }
    public function getDateupdate(){
        return $this->date_updated;
    }
    public function getRole(){
        return $this->role;
    }
    public function getDeactivated(){
        return $this->deactivated;
    }

	public function setId($id){
		$this->id=$id;
	}
	public function setFirstname($firstname){
		$this->firstname=ucfirst(strtolower(trim(addslashes($firstname))));
	}
	public function setLastname($lastname){
		$this->lastname=strtoupper(trim(addslashes($lastname)));
	}
	public function setEmail($email){
		$this->email=strtolower(trim(addslashes($email)));
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
	    $this->status = trim(addslashes($status));
    }
    public function setDateInserted(){
	    $this->date_inserted = date("Ymd");
    }
    public function setDateUpdate(){
        $this->date_updated = date("Ymd");
    }
    public function setRole($role){
        $this->role = trim(addslashes($role));
    }
    public function setDeactivated(){
        $this->deactivated = date("Ymd") ;
    }
    public function configFormAdd(){

        return [
            "config"=>["method"=>"POST", "action"=>"", "submit"=>"S'inscrire"],
                "input"=>["firstname"=>["type"=>"text","placeholder"=>"Prénom","required"=>true,"minString"=>2,"maxString"=>100,"class"=>"form-wrap"],
                "lastname"=>["type"=>"text","placeholder"=>"Nom","required"=>true, "minString"=>2, "maxString"=>100,"class"=>"form-wrap"],
                "email"=>["type"=>"email","placeholder"=>"Email","required"=>true,"class"=>"form-wrap"],
                "emailConfirm"=>["type"=>"email","placeholder"=>"Confirmation","required"=>true, "confirm"=>"email","class"=>"form-wrap"],


            ]
        ];
    }
    public function configFormInscription(){

        return [
            "config"=>["method"=>"POST", "action"=>"", "submit"=>"S'inscrire"],
            "input"=>["firstname"=>["type"=>"text","placeholder"=>"Votre prénom","required"=>true,"minString"=>2,"maxString"=>100,"class"=>"form-wrap"],
                "lastname"=>["type"=>"text","placeholder"=>"Votre nom","required"=>true, "minString"=>2, "maxString"=>100,"class"=>"form-wrap"],
                "email"=>["type"=>"email","placeholder"=>"Votre email","required"=>true,"class"=>"form-wrap"],
                "emailConfirm"=>["type"=>"email","placeholder"=>"Confirmation","required"=>true, "confirm"=>"email","class"=>"form-wrap"],
                "pwd"=>["type"=>"password","placeholder"=>"Votre mot de passe","required"=>true,"class"=>"form-wrap"],
                "pwdConfirm"=>["type"=>"password","placeholder"=>"Confirmation","required"=>true,"confirm"=>"pwd","class"=>"form-wrap"]

            ]
        ];
    }

}
