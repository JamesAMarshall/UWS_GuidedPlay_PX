<?php 
	include_once($_SERVER['DOCUMENT_ROOT'] ."/php/includes/displayErrors.php");


	function print_jsonArray($array)
	{
		echo json_encode($array);
	}

	function print_AssociativeArray($array){
		echo "Array{ <br>";
		foreach($array as $key => $value) {
			echo "Key: " . $key . ", Value: " . $value;
			echo "<br>";
		}
		echo " }<br>";
	}
	
	function print_AssociativeArray_WithoutLineBreaks($array){
		echo "Array{ ";
		foreach($array as $key => $value) {
			echo "Key: " . $key . ", Value: " . $value;
		}
		echo " }<br>";
	}
	
	function print_AssociativeArray_WithoutKey($array){
		echo "Array{ <br>";
		foreach($array as $key => $value) {
			echo "Value: " . $value;
			echo "<br>";
		}
		echo " }<br>";
	}

	function print_AssociativeArray_WithoutLabels($array){
		echo "Array{ <br>";
		foreach($array as $key => $value) {
			echo $key . ": " . $value;
			echo "<br>";
		}
		echo " }<br>";
	} 

	function print_AssociativeArray_WithoutLabelsAndBreaks($array){
		echo "Array{ ";
		$i=0;
		foreach($array as $key => $value) {
			$i++;
			if($i != 1)
			{
				echo ", ";
			}
			echo $key . ": " . $value;

		}
		echo " }<br>";
	} 


	function print_IndexedArray($array){
		$arrlength = count($array);

		for($x = 0; $x < $arrlength; $x++) {
			echo $array[$x];
			echo "<br>";
		}
	}
?>