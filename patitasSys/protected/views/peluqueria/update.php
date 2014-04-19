<?php
/* @var $this PeluqueriaController */
/* @var $model Peluqueria */

$this->breadcrumbs=array(
	'Peluquerias'=>array('index'),
	$model->pelu_id=>array('view','id'=>$model->pelu_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Peluqueria', 'url'=>array('index')),
	array('label'=>'Create Peluqueria', 'url'=>array('create')),
	array('label'=>'View Peluqueria', 'url'=>array('view', 'id'=>$model->pelu_id)),
	array('label'=>'Manage Peluqueria', 'url'=>array('admin')),
);
?>

<h1>Update Peluqueria <?php echo $model->pelu_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>