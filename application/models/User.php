<?php
	class Comments extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		
		function echoTest(){
			echo "Im here!";
		}
		
		function displayUsers(){
			$query = $this->db->query("select * from proxies");
			return $query->result();
		}
		
		function addComment($username, $comment){
			var_dump($_REQUEST);
			$query = $this->db->query("insert into user VALUES(NULL,'".$username."','".$comment."',1)");
		}
		
		
		
		
	}
?>