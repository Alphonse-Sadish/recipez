<?php
class BaseSQL{

	protected $pdo;
	protected $columns;
	protected $table;

	public function __construct(){
		try{
			$this->pdo = new PDO(DBDRIVER.":host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME, DBUSER, DBPWD,
				[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
		}catch(Exception $e){
			die("Erreur SQL :".$e->getMessage());
		}
		$this->table = strtolower(get_called_class());
	}


    public function setColumns(){
		//On récupère les variables de la class BaseSql grace a get_class();
		$columnsExcluded = get_class_vars(get_class());
		//  ["table"=> , "pdo"=> , "columns" =>]
		//On enlève du tableau contenant toutes les variables de l'objet les columns à exclure
		//get_object_vars($this) -> ["id"=>, "firstname"=> , .... ,table"=> , "pdo"=> , "columns" =>]
		$this->columns = array_diff_key(get_object_vars($this)	, $columnsExcluded);
	}


	public function save(){
		
		$this->setColumns();

		if( $this->id ){
			$query = $this->pdo->prepare("INSERT INTO ".$this->table." (".
				implode(',', array_keys($this->columns))
				.") VALUES (:".
				implode(',:', array_keys($this->columns))
				.")");

			$query->execute($this->columns);
		}else{
			//Insert
			unset($this->columns["id"]);
			$query = $this->pdo->prepare("INSERT INTO ".$this->table." (".
				implode(',', array_keys($this->columns))
				.") VALUES (:".
				implode(',:', array_keys($this->columns))
				.")");
			$query->execute($this->columns);

		}
		
	}

}