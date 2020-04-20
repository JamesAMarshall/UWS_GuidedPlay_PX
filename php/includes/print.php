<?php 
	function print_AssociativeArray($array){
		foreach($array as $key => $value) {
			echo "Key:" . $key . ", Value:" . $value;
			echo "<br>";
		}
	}
	
	function print_AssociativeArray_WithoutLineBreaks($array){
		foreach($array as $key => $value) {
			echo "Key:" . $key . ", Value:" . $value;
			echo "<br>";
		}
	}
	
	function print_AssociativeArray_WithoutKey($array){
		foreach($array as $key => $value) {
			echo "Value:" . $value . " | ";
		}
	}

	function print_AssociativeArray_WithoutLabels($array){
		foreach($array as $key => $value) {
			echo $key . ": " . $value . " | ";
		}
	} 

	function print_IndexedArray($array){
		$arrlength = count($array);

		for($x = 0; $x < $arrlength; $x++) {
			echo $array[$x];
			echo "<br>";
		}
	}
?>