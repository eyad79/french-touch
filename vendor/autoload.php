<?php
//vendor/autoload.php

class Autoload
{
	public static function inclusion_automatique($className){
		
		// $a = new Controller\ProduitController
		// require(__DIR__ . '/../src/Controller/ProduitController.php')
		// require(c://xampp/htdocs/PHPoo/13-framework/vendor/../src/Controller/ProduitController.php')
		
		// $b = new Manager\PDOManager 
		// require(__DIR__ . '/Manager/PDOManager.php')
		
		$tab = explode('\\', $className);

	

	
		
		if($tab[0] == 'Manager' || ($tab[0] == 'Model' && $tab[1] == 'Model') || ($tab[0] == 'Controller' && $tab[1] == 'Controller') ){
			$path = __DIR__ . '/' . implode('/', $tab) . '.php';
		  //$path = __DIR__ . '/Manager/PDOManager.php'

			//echo "<pre>";
			//print_r($tab);
			//echo "</pre>";
		}
		else{
			$path = __DIR__ . '/../src/' . implode('/', $tab) . '.php'; 
		  //$path = __DIR__ . '/../src/Controller/ProduitController.php'
		}
		
		//---------------------------------------------
		//echo '<pre>Autoload : ' . $className . '<br/>';
		//echo '===> Require(' . $path . ') </pre>';
		//--------------------------------------------
		
		require $path;
	}
}
//----------------------------------------------------------------
spl_autoload_register(array('Autoload', 'inclusion_automatique'));
//----------------------------------------------------------------
/*
spl_autoload_register en POO attend 1 argument qui soit un array, avec les valeurs suivantes : 
	1. Le nom de la classe
	2. Le nom de la méthode à exécuter (OBLIGATOIREMENT STATIC)

	Cela va faire ca : Autoload::inclusion_automatique($className);
*/