<?php
  function validarLogin($usuario,$pass,$usuarios,$passwds){
    $index = array_search($usuario, $usuarios);
    return ($passwds[$index] == $pass && $usuario != "");
  }


function ordenar($array, $numElementos){
$indiceMenor;
$j;
$aux;
	
	for ($i=0;$i<$numElementos;$i++){
		$indiceMenor = $i;
		for ($j=$i+1;j<$numElementos;$j++){
			
			if ($array[$j]< $array[$indiceMenor]){
				
				$indiceMenor =$j;
				
			}
		}
		if ($i != $indiceMenor){
			
			$aux = $array[$i];
			$array[$i] = $array[$indiceMenor];
			$array[$indiceMenor] = $aux;
		}
		
	}
	
}

function addOrdenado($value,$arr) {
  if (empty($arr)){
    $arr[0] = $value;
  } else if (end($arr)<$value){
    array_push($arr, $value);
  }else {

    for ($i=0; $i < count($arr); $i++) { 
      if ($value<$arr[$i]) {
        $aux = $arr[$i];
        $arr[$i] = $value;
        $value = $aux;
      }
    }

    $arr[count($arr) + 1] = $value;
  }

  return $arr;
}

?>