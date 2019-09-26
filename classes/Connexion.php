<?php

class Connexion
{

	private $login = 'root';
	private $pass = '0000' ;
	private $dbName = 'app_db';
	private $connec;

	//Call function connexion
	public function __construct(){
		$this->connexion();
	}

	//Connexion on db
	private function connexion(){
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname='.$this->dbName, $this->login, $this->pass);
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			$this->connec = $bdd;
		}
		catch (PDOException $e)
		{
			$msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
			die($msg);
		}
	}

	//Used for requests on the db
	public function request($sql, Array $cond = null){
		$stmt = $this->connec->prepare($sql);

		if($cond){
			foreach ($cond as $key => &$val) {
				$stmt->bindParam($key, $val);
			}
		}

		$stmt->execute();

		return $stmt->fetchAll();
		$stmt->closeCursor();
		$stmt=NULL;
		// $this->connec = null;
	}
}