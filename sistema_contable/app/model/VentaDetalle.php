<?php 

class user{

private $id;
private $email;
private $usuario;
private $pass;
private $estado;
private $privilegio;

function __construct($id,$email,$usuario,$pass,$estado,$privilegio){

	$this->id =$id ;
$this->email =$email ;
$this->usuario =$usuario ;
$this->pass =$pass ;
$this->estado =$estado ;
$this->privilegio =$privilegio ;	


}



}

 ?>