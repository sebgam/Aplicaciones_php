<?php


class ruta
{
//------metodo que nos permite ingresar controladores con sus rutas--------

private $_controladores = array();
public function controladores($controlador){
$this->_controladores =$controlador;

//----------llamada al metodo que hace el proceso de rutas--------
    self::submit();

}
//---------funcion o metodo que se ejecuta cada ves que se envia la peticion en la url------
public function submit(){
    
    $uri =isset($_GET["uri"]) ?$_GET["uri"]:"/" ;//----recupera url------
    $paths = explode("/", $uri);//-------divide url en partes y forma un array

    //--------hacer condicional para saber si esta en un controlador o en la ruta principal

    if($uri =="/"){
    	//principal---------
    	$res = array_key_exists("/", $this->_controladores);//buscar si exite ruta (/)en los controladores del archivo------------- 
    	if ($res !="" && $res==1) {//comprobando
    		foreach ($this->_controladores as $ruta=>$controller) {//recorriendo controladores
    			if ($ruta =="/") {//-----comprobamos si las rutas son iguales
    				$controlador = $controller;//asignamos variable el controlador
    			}
    		}
    		$this->getController();
    	}
    }else{
    	//controladores y metodos------
    	
    }


}


}