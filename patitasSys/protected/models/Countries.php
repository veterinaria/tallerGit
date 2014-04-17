<?php
class Countries extends CActiveRecord
{
	public static function model($ClassName=__CLASS__)
	{
		return parent::model($ClassName);
	}
	public function tableName()
	{
		return "countries";
	}
	public function rules()
	{
		return array(array("id,nombre,estado","required"));
	}
}