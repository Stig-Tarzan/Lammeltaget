<?php  

      $conn = mysqli_connect('localhost','root','','lammeltaget');
      if (!$conn) 
      {
            die("Connection failed: ".mysqli_connect_error());
      }
/*
class Database
{
  	function __construct()
  	{
  	  	$this->db = mysqli_connect("localhost","root","","lammeltaget");
  	  	if ($this->db->connect_error) 
  	  	{
  	 	   $code  = $mysqli->connect_errno;
  	 	   die("Error: ($code) $this->conncetion->connect_error");
  	 	}
  	}

  	public function query($sql)
  	{
    return $this->db->query($sql);
  	}
}
*/

