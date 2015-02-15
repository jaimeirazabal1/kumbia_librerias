<?php 
Load::models("user");
Class UserController extends AppController{
	public function nuevo(){
		if (Input::haspost("user")) {
			$nuevo_usuario = new User(Input::post("user"));
			if ($nuevo_usuario->validarPassIguales()) {
				$nuevo_usuario->encriptarClave();
				if ($nuevo_usuario->save()) {
					Flash::valid("Usuario Creado");
            		Input::delete();
				}else{
					Flash::error("No se Creó el usuario");
				}
			}else{
				Flash::info("Las contraaseñas no coinciden");
			}
		}
	}
}

 ?>