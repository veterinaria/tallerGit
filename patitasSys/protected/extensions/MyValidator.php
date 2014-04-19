<?php
class MyValidator extends CValidator
{
	public function validateAttribute($object,$attribute)
	{

		//if($object->$attribute!="años" && $object->$attribute!="meses" && $object->$attribute!="mes" && $object->$attribute!="0" && $object->$attribute!="1")
		//{
		//	$this->addError($object,$attribute,"La edad ingresada no es valida");
		//}

		if ((strpos($object->$attribute,"años") == false) && (strpos($object->$attribute,"meses") == false) && (strpos($object->$attribute,"mes") == false) && (strpos($object->$attribute,"año") == false) && (strpos($object->$attribute,"-") == false))
		{ 
		
		$this->addError($object,$attribute,"La edad ingresada no es valida, favor especificar mes o meses o año o años. Ej: 1 mes");
		}


	}
}

?>
