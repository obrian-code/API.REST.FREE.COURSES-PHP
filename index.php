<?php

include 'controller/controller.php';
include 'getter/courses.php';
include 'model/model.php';

//CORS
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header('Content-type:application/json;charset=utf-8');

//SI SE PRODUCE UN ERROR, APARECERÁ: ERROR DEL SERVIDOR. PERO NO APRECERÁ NINGÚN MENSAJE DE ERROR 

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

$courses =new NewCourses();
$crud = new CrudCorses();

// VERFICACION DEL METODO SERVER Y ENVIO DE DATOS AL CONTROLADOR 

try {

    $METHOD = $_SERVER['REQUEST_METHOD']; //OBTENER EL MÉTODO DE PETICIÓN EMPLEADA PARA ACCEDER A LA API REST

    switch ($METHOD) {
        case 'GET':

            metodoGet($crud);//SE ENVIA AL CONTROLADOR
            
            header("HTTP/1.1 200 OK");//RESPUESTA EN LA CABECERA
            exit();
            
            break;
         
        case 'POST':
        
            $data=json_decode(file_get_contents('php://input'),true);//CAPUTARA LOS DATOS DE LA URL
   
            $courses->setName($data['name']);
            $courses->setDescription($data['description']);
            $courses->setCoupon($data['coupon']);
            $courses->setDays($data['days']);
            $courses->setUrl($data['url']);
            $courses->setidiom($data['idiom']);
            $courses->setCategory($data['category']);
            $courses->setUrl_img($data['url_img']);
            $courses->setRating($data['rating']);

            metodoPost($courses,$crud);//SE ENVIA AL CONTROLADOR
            header("HTTP/1.1 200 OK");//RESPUESTA EN LA CABECERA
            exit();
            break;

        case 'PUT':

            $data=json_decode(file_get_contents('php://input'),true);//CAPUTARA LOS DATOS DE LA URL
   
            $courses->setID($data['id']);
            $courses->setName($data['name']);
            $courses->setDescription($data['description']);
            $courses->setCoupon($data['coupon']);
            $courses->setDays($data['days']);
            $courses->setUrl($data['url']);
            $courses->setidiom($data['idiom']);
            $courses->setCategory($data['category']);
            $courses->setUrl_img($data['url_img']);
            $courses->setRating($data['rating']);

            metodoPut($courses,$crud);//SE ENVIA AL CONTROLADOR

            header("HTTP/1.1 200 OK");//RESPUESTA EN LA CABECERA
            exit();
            break;
                    
        case 'DELETE':

   
            $courses->setID($_GET['id']); //CAPUTARA LOS DATOS DE LA URL

            metodoDelete($courses,$crud);//SE ENVIA AL CONTROLADOR
            header("HTTP/1.1 200 OK");//RESPUESTA EN LA CABECERA
            exit();
            break;  

        default:

            $array = array("conect"=>false,"error"=>"error del metodo",
            "msg"=>" metodo no encontrado failed");//ARRGELO DE ERROR
            print json_encode($array,JSON_PRETTY_PRINT);//IMPRIME EL ARREGLO
            
            header('Allow: GET, POST, PUT, DELETE');//RESPUESTA EN LA CABECERA
            exit();
            break;
    }

} catch (\Throwable $th) {

    header("HTTP/1.1 400 Bad Request");//RESPUESTA EN LA CABECERA
    $array = array("conect"=>false,
    "error"=>"error al conectar","msg"=>"Connection failed: ".$th);//ARRGELO DE ERROR
    print json_encode($array,JSON_PRETTY_PRINT);//IMPRIME EL ARREGLO

}



?>