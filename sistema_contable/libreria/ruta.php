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
    		$this->getController("index",$controlador);//---llamamos al metodo quem nos recupera el controlador
    	}
    }else{
    	//controladores y metodos------
    	
    }
    }


public function getController($metodo,$controlador){

	$metodoController ="";//almacena metodo

	//-------comprobamos si es index o no metodo o funcion del controlador----------
	if($metodo == "index"||$metodo==""){
		$metodoController="index";
	}else{
		$metodoController=$metodo;
	}

	//-------incluimos controlador----------
	$this->incluirControlador($controlador);

	//comprovamos si la clase existe 
	if (class_exists($controlador)) {
		//----creamos clase temporal en base a la varible controlador
		$claseTemp = new $controlador();
		//comprobamos si se puede llamar a la funcion o metodo de esa clase-----
			if (is_callable(array($claseTemp,$metodoController))) {

				//hacemos una llamada al metodo de esa clase
				//clase->index
			$claseTemp->$metodoController();
		}else{
			die("error");
		}
	}else{
		die("no exixte la clase");
	}


}

	public function incluirControlador($controlador){
		//validando si existe el archivo o no
		if(file_exists(APP_RUTA."controller/".$controlador.".php")){
			//si existe lo incluimos
			include APP_RUTA."controller/".$controlador.".php";
		}else{
			die("error al encontrar el archivo de controlador");
		}
	}





}