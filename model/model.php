<?php

include 'inc/config.php';

class CrudCorses{

     function __construct(){}

     //INSERTAR LOS DATOS EN BD 

     function insertar($courses){ 

          
          date_default_timezone_set('America/Lima'); //ZONA HORARIA 
      
          $db=DB::conectar();//PREPARA LA CONEXIÓN
          $inserts=$db->prepare(" INSERT INTO courses(name, description, 
                        coupon, days, url, idiom, category, url_img,rating,days_public)
                        VALUES('".$courses->getName()."','".$courses->getDescription()."',
                        '".$courses->getCoupon()."','".$courses->getDays()."',
                        '".$courses->getUrl()."','".$courses->getIdiom()."', 
                        '".$courses->getCategory()."', 
                        '".$courses->getUrl_img()."',".$courses->getRating().",'".date('Y-m-d')."')");//QUERY INSERT
                          $inserts->execute();//ENVIA EL QUERY

          $db=DB::desconectar(); // SE DESCONECTA DE LA BASE DE DATOS
        
    }


    //SELECCIONAR  LOS DATOS EN BD

    function select(){
         
          $db=Db::conectar();//PREPARA LA CONEXIÓN
          $select=$db->prepare("select * from courses");//QUERY
          $select->execute();//ENVIA EL QUERY
      
          $registro=$select->fetchAll(PDO::FETCH_ASSOC);//OBTIENE LOS REGISTROS
          $data = [];

          foreach ($registro as $index) {//SE RECORE LOS REGISTROS
            $data[] = $index; //OBTIENE LOS REGISTRO EN LA NUEVA VARIABLE    
          }

          $response = [];
          return $response['data'] =  $data; //SE RETORNA LOS REGISTROS EN EL ARREGLO

          $db=DB::desconectar(); // SE DESCONECTA DE LA BASE DE DATOS

    }

     //ACTULIZAR  LOS DATOS EN BD   

     function update($courses){

        $db=Db::conectar();//PREPARA LA CONEXIÓN
        $update=$db->prepare("UPDATE courses SET name='".$courses->getName()."',
                              description='".$courses->getDescription()."',
                              coupon='".$courses->getCoupon()."', days='".$courses->getDays()."', 
                              url='".$courses->getUrl()."', idiom='".$courses->getIdiom()."', 
                              category='".$courses->getCategory()."', url_img='".$courses->getUrl_img()."', 
                              rating='".$courses->getRating()."' WHERE id='".$courses->getId()."'");//QUERY

        $update->execute();//ENVIA EL QUERY

        $db=DB::desconectar(); // SE DESCONECTA DE LA BASE DE DATOS

    }

    //ELIMINAR  LOS DATOS EN BD 
    
    function delete($courses){
      
        $db=Db::conectar();//PREPARA LA CONEXIÓN
        $delete=$db->prepare("DELETE FROM courses WHERE id=".$courses->getID()."");//QUERY
        $delete->execute();//ENVIA EL QUERY

        $db=DB::desconectar(); // SE DESCONECTA DE LA BASE DE DATOS

        }	
    
    }
