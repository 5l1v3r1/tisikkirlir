<?php

/**
* Tisikkirlir
* @author Samet Aydemir
*/

class tisikkirlir
{	

	public static function tsk($text){
		$letter = array("a","e","ı","i","o","u","ü","A","E","I","İ","O","Ü");
		echo strtolower(str_replace($letter, "i", $text));
	}


}