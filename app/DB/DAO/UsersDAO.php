<?php
/**
 * @author Luca
 * definition of the User DAO (database access object)
 */
class UsersDAO {
	private $dbManager;
	function UsersDAO($DBMngr) {
		$this->dbManager = $DBMngr;
	}
	
	//This is using the new PDO db manager and it is an example
	function get($id) {
		$sql = "SELECT * ";
			$sql .= "FROM users ";
			if ($id != null)
				$sql .= "WHERE users.id='?' and users.id<>? ";
			$sql .= "ORDER BY users.name ";
			
		$stmt = $this->dbManager->prepareQuery($sql);
		
		$this->dbManager->bindValue($stmt, 1, $id, $this->dbManager->INT_TYPE);		
		$this->dbManager->executeQuery($stmt);
		
		$rows = $this->dbManager->fetchResults($stmt);

		return ($rows);
	}
	
	function insert($parametersArray) {
		
	}
	function update($parametersArray, $userID) {
		
	}
	function delete($userID) {
		
	}
}
?>
