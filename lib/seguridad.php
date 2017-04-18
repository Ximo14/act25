<?php
/**
 *
 */
class seguridad 
{
	private $usuarios=null;
	
  function __construct()
  {
    session_start();
	if(isset($_SESSION['usuario'])){ $this->usuarios=$_SESSION['usuario'];
	}

  }
  
  public function getUsuario(){
	return $usuario;
  }
  
  public function addUsuario($usuario){
	$_SESSION['usuario']=$usuario;
	$this->usuario=$usuario;
  }
}
  ?>