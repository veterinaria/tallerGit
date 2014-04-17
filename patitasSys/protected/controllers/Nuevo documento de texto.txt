<?php
#http://localhost/prueba_1/protected/views/hola/index.php
class HolaController extends Controller
{
	public function actionIndex() 
	{
		$model=CActiveRecord::model("Users")->findAll();
		$twitter="@codigofacilito";
		$this->render("index",array("model"=>$model,"twitter"=>$twitter));
	}
} 