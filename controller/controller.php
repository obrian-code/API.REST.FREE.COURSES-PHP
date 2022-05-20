<?php

//METODO GET ENVIO Y VERIFICACION DE DATOS AL MODELO CRUD

function metodoGet($crud){
    try {

        print json_encode($crud->select(),JSON_PRETTY_PRINT);
        
    } catch (\Throwable $th) {

        $array = array("conect"=>false,"error"=>"error al conectar","msg"=>"Connection failed: ".$th);
        print json_encode($array,JSON_PRETTY_PRINT);
        
    }
    
}

//METODO POST ENVIO Y VERIFICACION DE DATOS AL MODELO CRUD

function metodoPost($courses,$crud){

        try {
   
            if ($courses->getName()=='' ||  $courses->getDescription()=="" ||
                $courses->getCoupon()=="" || $courses->getDays()=="" || 
                $courses->getUrl()=="" || $courses->getIdiom()=="" || 
                $courses->getCategory()=="" || $courses->getUrl_img()=="" || 
                $courses->getRating()=="") {

                $array = array("conect"=>false,"error"=>"error al insert ","msg"=>"created failed ");
                
                print json_encode($array,JSON_PRETTY_PRINT);
   
            }
            
            else{
                $crud->insertar($courses);
                $array = array("conect"=>true,"msg"=>" record insert successfully");
                print json_encode($array,JSON_PRETTY_PRINT);
            }

        } catch (\Throwable $th) {

            $array = array("conect"=>false,"error"=>"error al conectar","msg"=>"Connection failed: ".$th);
            print json_encode($array,JSON_PRETTY_PRINT);

        }

}

//METODO PUT ENVIO Y VERIFICACION DE DATOS AL MODELO CRUD

function metodoPut($courses,$crud){

        try {

            if ($courses->getID()==''|| $courses->getName()=='' || 
                $courses->getDescription()=="" || $courses->getCoupon()=="" || 
                $courses->getDays()=="" || $courses->getUrl()=="" ||
                $courses->getIdiom()=="" || $courses->getCategory()=="" || 
                $courses->getUrl_img()=="" || $courses->getRating()=="") {

                $array = array("conect"=>false,"error"=>"error al update ","msg"=>"created failed ");
                 print json_encode($array,JSON_PRETTY_PRINT);
            }
            
            else{
                $crud->update($courses);
                $array = array("conect"=>true,"msg"=>" record update successfully");
                 print json_encode($array,JSON_PRETTY_PRINT);
            }

        } catch (\Throwable $th) {

            $array = array("conect"=>false,"error"=>"error al conectar","msg"=>"Connection failed: ".$th);
            print json_encode($array,JSON_PRETTY_PRINT);

        }

}

//METODO DELETE ENVIO Y VERIFICACION DE DATOS AL MODELO CRUD

function metodoDelete($courses,$crud){

    try {

            if ($courses->getID()=='') {

                $array = array("conect"=>false,"error"=>"error al delete","msg"=>"created failed");
                 print json_encode($array,JSON_PRETTY_PRINT);
            }
            
            else{
                $array = array("conect"=>true,"msg"=>" record delete successfully");
                print json_encode($array,JSON_PRETTY_PRINT);
                $crud->delete($courses);
            }

        } catch (\Throwable $th) {

            $array = array("conect"=>false,"error"=>"error al conectar","msg"=>"Connection failed: ".$th);
            print json_encode($array,JSON_PRETTY_PRINT);

        }

}

