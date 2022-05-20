<?php

//CONFIGURACION DE BASE DE DATOS 

		class Db{

		private static $conexion=null;
		private function __construct(){}

        //Conexion de PHP Y MYSQL
		
        public static function conectar(){ 
            try{

			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			return self::$conexion=new PDO('mysql:host=localhost;dbname=free_courses',
            'root','',$pdo_options);
			
            }catch (PDOException $e){ 

                $array = array("conect"=>false,
                "error"=>"No se pudo conectar a la bd free_courses",
                "msg"=>"created failed: " . $e->getMessage());
                print json_encode($array,JSON_PRETTY_PRINT);
                die();

            }
		}
        
        //DESCONECTAR LA BASE DE DATOS
        
        public static function desconectar() { 
            $conexion=null;
        }


	}



    
    