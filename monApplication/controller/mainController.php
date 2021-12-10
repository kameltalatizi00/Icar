<?php

class mainController
{

	public static function helloWorld($request,$context) {
		$context->mavariable="hello world";
		return context::SUCCESS;
	}


	
	/**
	 * définition du l action superTest 
	 * @param $request contient la variable globale $_POST
	 * @param $context l instance de la class context singleton
	 */
	public static function superTest($request,$context) {

		$context->param1 = $_REQUEST['param1'];
		$context->param2 = $_REQUEST['param2'];
     	return context::SUCCESS;
	}



	public static function index($request,$context) {
		
		return context::SUCCESS;
	}


}
