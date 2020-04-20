<?php 
	function sql_SelectAll($table){
		$sql = "SELECT * FROM $table";
		$result = mysqli_query($db,$sql);
		return $result;
	}

	function sql_Query($query){
		$result = mysqli_query($db,$query);
		return $result;		
	}

	function sql_GetAssociativeRow($result){
		return mysqli_fetch_array($result,MYSQLI_ASSOC);
	}
?>