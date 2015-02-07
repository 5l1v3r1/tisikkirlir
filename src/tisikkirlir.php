<?php

/**
* Tisikkirlir
* @author Samet Aydemir
*/

class tisikkirlir
{	

	public static function tsk($text){
		$letter = array("a","e","ı","i","o","ö","u","ü","A","E","I","İ","O","Ö","U","Ü");
		echo strtolower(str_replace($letter, "i", $text));
	}


}
