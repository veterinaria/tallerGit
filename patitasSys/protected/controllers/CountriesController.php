<?php

class CountriesController extends Controller
{
	public function actionIndex()
	{
		#insertar datos en una tabla en BD
		#$model=new Countries();
		#$model->id=3;
		#$model->nombre="Brazil";
		#$model->estado=1;
		#$model->save();
		#hasta aqui comentado para INSERT,descomentar para agregar valor a BD
		#accede a todos los datos que estan dentro de la tabla countries
		$countries=Countries::model()->findAll();
		#enviar#en este caso se usa el mismo nombre, le pasa el resultado de la consulta a la vista, esta debe tener mismo nombre de controlador
		#en este caso se usa el mismo nombre, le pasa el resultado de la consulta
		$this->render("index",array("countries"=>$countries));
	}
	public function actionCreate()
	{
		//cuando envie los datos por post va mostrar estos
		//var_dump($_POST);
		//cerrar aplicacion:
		//Yii::app()->end();

		$model=new Countries();
		//
		if(isset($_POST["Countries"]))
		{
			#en ves de hacer esto x campo x campo:
			/*$model->id=$_POST["Countries"]["id"];
			$model->nombre=$_POST["Countries"]["nombre"];
			$model->estado=$_POST["Countries"]["estado"];
			#se hace esto una ves y trae todos los campos:*/
			$model->attributes=$_POST["Countries"];
			if($model->save())
			{
				//echo "Guardado con exito";
				$this->redirect(array("countries/index"));
			}
		} 
		$this->render("create",array("model"=>$model));
	}

}
?>