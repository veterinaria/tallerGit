<?php

class FichaMedicaController extends Controller
{
	public function actionIndex()
	{
		
		$fichamedica=FichaMedica::model()->findAll();
		
		$this->render("index",array("fichamedica"=>$fichamedica));
	}
	public function actionCreate()
	{
		
		$model=new FichaMedica();
		//
		if(isset($_POST["FichaMedica"]))
		{
			$model->attributes=$_POST["FichaMedica"];
			if($model->save())
			{
				
				$this->redirect(array("fichamedica/index"));
			}
		} 
		$this->render("create",array("model"=>$model));
	}

}
?>