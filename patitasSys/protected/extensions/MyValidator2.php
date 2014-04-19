<?php
class MyValidator2 extends CValidator
{
	public function validateAttribute($object,$attribute)
	{

		if($object->$attribute<0 || $object->$attribute>200 || $object->$attribute==0)
		{
			$this->addError($object,$attribute,"El Peso ingresado no es valido. Ej: 12.5");
		}
		
	}
}

?>
