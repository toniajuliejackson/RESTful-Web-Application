<?php
/**
 * @author luca
 * an implementation of a database manager usng the PDO php object
 */

class pdoDbManager{

	private $db_link;
	private $hostname = DB_HOST;
	private $username = DB_USER;
	private $password = DB_PASS;
	private $dbname = DB_NAME;
	private $charset = DB_CHARSET;
	private $debugMode = DB_DEBUGMODE;
	private $dbVendor = DB_VENDOR; 

	public $INT_TYPE = PDO::PARAM_INT;
	public $STRING_TYPE = PDO::PARAM_STR;

	function __construct(){
	}

	function openConnection(){
		
	}

	function prepareQuery($query){
		
	}

	function bindValue($stmt, $pos, $value, $type){
	}

	function executeQuery($stmt){
	}

	function fetchResults($stmt){
		
	}

	function getNextRow($stmt){
		
	}

	function closeConnection(){
	}
}
?>
