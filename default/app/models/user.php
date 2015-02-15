
<?php 
class User extends ActiveRecord{
	protected function initialize(){
		$this->validates_uniqueness_of("email");
	}
	public function encriptarClave($string = null){
		if ($string) {
			return md5($string);
		}
		$this->pass = md5($this->pass);
	}
	public function validarPassIguales(){
		$user = Input::post("user");
		return $user["pass"] == $user["repass"];
	}
	public function getByEmail($email){
		return $this->find_first("conditions: email='$email'");
	}
}

 ?>