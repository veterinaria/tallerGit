<?php
class FichaMedica extends CActiveRecord
{
	public static function model($ClassName=__CLASS__)
	{
		return parent::model($ClassName);
	}
	public function tableName()
	{
		return "ficha_medica";
	}
	public function rules()
	{
		return array(array("clie_rut,masc_id,fichmed_edad_masc,fichmed_peso,fichmed_diagnostico,fichmed_indicacion","required","message"=>"Este campo es obligatorio."),
					 array("fichmed_peso","type","type" => "float","message"=>"El Peso ingresado no es valido. Ej: 12.5"),
					 array("fichmed_edad_masc","type","type" =>"string"),
					 array("clie_rut","exist","allowEmpty" => true, "attributeName" =>"clie_rut", "className" => "FichaMedica","message"=>"Este Cliente no se encuentra registrado,favor registrar."),
					 array("masc_id","exist","allowEmpty"=> true,"attributeName"=>"masc_id","className"=>"FichaMedica","message"=>"Esta Mascota no se encuentra registrada,favor registrar."),
					 array("fichmed_edad_masc","ext.MyValidator"),
					 array("fichmed_peso","ext.MyValidator2")
					);

	}
}

?>