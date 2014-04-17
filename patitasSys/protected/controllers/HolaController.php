<?php
#http://localhost/prueba_1/hola/index
class HolaController extends Controller
{
	public function actionIndex() 
	{
		#hace consulta a la BD
		$model=Users::model()->findALL();
		#$model=CActiveRecord::model("Users")->findAll();
		$twitter="@codigofacilito";
		$this->render("index",array("model"=>$model,"twitter"=>$twitter));
	}
} 