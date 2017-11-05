<?php
define('DATABASE', 'srk77');
define('USERNAME', 'srk77');
define('PASSWORD', 'shweta13');
define('CONNECTION', 'sql2.njit.edu');

class dbcon
{
protected static $db;

 public function __construct() 
  {
        
	    try 
	        {
		      self::$db = new PDO( 'mysql:host=' . CONNECTION .';dbname=' . DATABASE, USERNAME, PASSWORD );
		            self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			          echo 'Connected Successfully';
				        echo '<br>';
					    }
catch (PDOException $e) 
    {
           echo "Connection Error: " . $e->getMessage();
	       }
	       				     
	 }
public static function getConnection() 
  {
        if (!self::$db) 
	      {
	              new dbcon();
		            }
			           return self::$db;
				      }
				        }
					?>
					       				         
