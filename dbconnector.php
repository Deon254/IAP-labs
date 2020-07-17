<?php	
 	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'btc3205';
	
class DbConnecter {//giving me problems
public $conn;
	
	function __construct(){
		if (!isset($this->connection)) {
			
			$this->connection = mysql_connect($this->servername, $this->username, $this->password, $this->dbname);
			
			if (!$this->connection) {
				echo 'Cannot connect to database server';
			
			}
			    function closeDatabase(){
				mysql_close($this->conn);
			  }
						
		}	
		
		return $this->connection;
	}
}
?>
