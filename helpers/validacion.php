<?php 
/**
 * AUTHOR : MIGUEL ANGEL FERNANDEZ TRUJILLO;
 * DATE: 15/11/2018
 */
class Validacion
{
	
	public function pregmatchletras($valor1){

		$vacio = self::emptySpace($valor1);
		if($vacio != 1 && preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ\s\']+$/", $valor1)){
			return mb_strtoupper($valor1, 'UTF-8');
		}else{
			return 0;			 
		}
	}
	public function pregmatchletrasAcento($valor1){

		$vacio = self::emptySpace($valor1);
		if($vacio != 1 && preg_match("/^[a-zA-ZñÑ\s\']+$/", $valor1)){
			return mb_strtoupper($valor1, 'UTF-8');
		}else{
			return 0;			 
		}
	}

	public function validarSelect($selectFrom)
	{
		if ($selectFrom == "") {
			return -1;
		}else{
			return $selectFrom;
		}
	}

	public function camposReadOnly($valor)
	{
		if (!empty($valor)) {
			return $valor;
		} else {
			return "null";
		}
		
	}

	public function emptySpace($space)
	{

		if(!preg_match("/^\s*$/", $space)){
			return $space;
		}else{
			return 1;
		}

	}

	public function valFecha($date)
	{
		$date;
		if($date != "")
		{
			$fecha = explode("-", $date);

			if (preg_match("/^[0-9]{4}+$/", $fecha[0])) {
				if(checkdate($fecha[1], $fecha[2], $fecha[0])){
					$checkday = self::addZeroDate($fecha[2]);
					$checkMonth = self::addZeroDate($fecha[1]);
					
					$newFecha = $fecha[0]."-".$checkMonth."-".$checkday;
					 $date = $newFecha;
				}else{
				return 0;
				}
			}elseif(preg_match("/^[0-9]{2}+$/", $fecha[0])){
				if(checkdate($fecha[1], $fecha[0], $fecha[2])){
					$checkday = self::addZeroDate($fecha[0]);
					$checkMonth = self::addZeroDate($fecha[1]);
					
					$newFecha = $fecha[2]."-".$checkMonth."-".$checkday;
					 $date = $newFecha;
					
				}else{
					return 0;
				}			
				
			}elseif(preg_match("/^[0-9]{1}+$/", $fecha[0])){
				if(checkdate($fecha[1], $fecha[0], $fecha[2])){
					$checkday = self::addZeroDate($fecha[0]);
					$checkMonth = self::addZeroDate($fecha[1]);
					
					$newFecha = $fecha[2]."-".$checkMonth."-".$checkday;
					 $date = $newFecha;
					
				}else{
					return 0;
				}			
				
			}
			return $date;
		}else{
			return 1;
		}
	}
	public function addZeroDate($dayOrMonth){
		$count = strlen($dayOrMonth);
		$correct = 0;
		if($count == 1){
			$correct = "0".$dayOrMonth;
		}else{
			$correct = $dayOrMonth;
		}
		return $correct;
	}
	public function validarTelefono($telefono)
	{
		$phoneNumber = "/^[0-9-()+]{3,20}/";

		if(preg_match($phoneNumber, $telefono)||$telefono=="SIN DATO"){
			return $telefono;
		}else{
			return 0;
		}

	}

	public function validarEmail($email)
	{
		if(!$email == ""){
		 if(preg_match("/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}[.][a-zA-Z]{2,4}$/", $email)||preg_match("/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/", $email)){
		 	return $email;
		 }else{
		 	return 0;
		 }
		}else{
			return 1;
		}
	}
		public function validarPass($pass)
	{

		if(!$pass == ""){
		 if(preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])\S{8,50}/', $pass)){
		 		return $pass;
		 }else{
		 	return 0;
		 }
		}else{
			return 1;
		}
	}

	public function textoLargo($texto)
	{
		if($texto != "")
		{
		$contar = strlen($texto);
			if (preg_match("/^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_.+\s]+$/",$texto) && $contar <= 100) {
				return strtoupper($texto);
			} else {
				return 900;
			}
			
		}else{
			return 0;
		}
	}
	public function textoPeque($texto)
	{
		if($texto != "")
		{
		$contar = strlen($texto);
			if (preg_match("/^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_.+\s]+$/",$texto) && $contar <= 30) {
				return $texto;
			} else {
				return 1;
			}
			
		}else{
			return 0;
		}
	}

	public function textLong($texto)
	{
		if($texto != "")
		{
		$contar = strlen($texto);
			if (preg_match("/^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_.\s]+$/",$texto) && $contar <= 200) {
				return strtoupper($texto);
			} else {
				return 1;
			}
			
		}else{
			return 0;
		}
	}

	public function validarNumIntYNumExt($numero){
		if(!preg_match("/^\s*$/", $numero || $numero != "")){
			return $numero;
		}else{
			return "S/N";
		}
	}

	public static function validarNumero($numeros){
		if(preg_match("/^[[:digit:]]+$/", $numeros)){
			return $numeros;
		}else{
			return -1;
		}
	}

	public function recotarPuntos($texto){
		$puntos = "...";
		$contar = strlen($texto);
		if($contar>10){
			$textoCortado = substr($texto, 0,10).$puntos;
		}else{
			$textoCortado = $texto;
		}
		return $textoCortado;
	}
}
 ?>