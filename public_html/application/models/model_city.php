<?php
	class Model_City extends Model
	{
		public function get_data()
		{	
			include ("bd.php");
			$result = mysql_query("SELECT id, name, description FROM cities");
			$cityArray = array();
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
			{
				$cityArray[] = array(
					'id' => $row["id"],
					'name' => $row["name"],
					'description' => $row["description"]
				);
			}
			return $cityArray;
		}
	}