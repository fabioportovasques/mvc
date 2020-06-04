<?php

	namespace App;

	class Route{

			private $routes;

			public function __construct (){
				$this->initRoutes();
			}

			public function getRoutes (){
				return $this->routes;
			}

			public function setRoutes (array $routes){
				$this->routes = $routes;
			}
		
			public function initRoutes(){
				$routes['home'] = array (

					'route'=>'/',
					'controller ' =>'indexController.php',
					'action'=> 'index'
				);

				$routes['sobre_nos'] = array (

					'route'=>'/sobre_nos',
					'controller ' =>'indexController.php',
					'action'=> 'sobreNos'
				);

				$this->setRoutes($routes);

			}


			public function getUrl(){

				return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);	//super global do PHP que retorna um array com os detalher so servidor da aplicação
				//return parse_url ('www.google.com/gmail?x10');				
			}
		
			/*
			parse_url($_SERVER['REQUEST-uri']) Recebe a url e interpleta e interpleta recebendo seus respectivos componentes

			*/
	}


?>
