<?php

abstract class CONN{
	private $conn, $sql,$host,$user,$senha,$bd;
	function __construct(){
		$this->host = "localhost";
		$this->user = "root"; //root
		$this->senha = "jldcs0512"; //meta2019
		$this->bd = "pessas";
		self::execcon();
	}
	protected function execcon(){
	// 5.3 < 
	//$this->conn = mysql_connect($this->host,$this->user,$this->senha,$this->bd);
	// 5.3 >
	$this->conn = mysqli_connect($this->host,$this->user,$this->senha,$this->bd);
	// 6.0 >
	//$this->conn = new PDO('mysql:host=$this->host;dbname=$this->bd', $this->user, $this->se);
	}
	function exeSQL($qry){
		//$this->sql = mysql_query($this->conn,$qry);
		$this->sql = mysqli_query($this->conn,$qry);
		//$this->sql = $this->conn->query->$qry;		
		return $this->sql;
	}
}
?>