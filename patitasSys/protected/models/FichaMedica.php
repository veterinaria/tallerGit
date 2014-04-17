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
		return array(array("fichmed_id,clie_rut,masc_id,fichmed_edad_masc,fichmed_peso,fichmed_diagnostico,fichmed_indicacion","required"));
	}
}

?>