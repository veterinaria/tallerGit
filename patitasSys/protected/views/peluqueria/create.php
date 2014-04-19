<?php
/* @var $this PeluqueriaController */
/* @var $model Peluqueria */

$this->breadcrumbs=array(
	'Peluquerias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Peluqueria', 'url'=>array('index')),
	array('label'=>'Manage Peluqueria', 'url'=>array('admin')),
);
?>

<h1>Create Peluqueria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>