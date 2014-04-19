<?php
/* @var $this PeluqueriaController */
/* @var $model Peluqueria */

$this->breadcrumbs=array(
	'Peluquerias'=>array('index'),
	$model->pelu_id,
);

$this->menu=array(
	array('label'=>'List Peluqueria', 'url'=>array('index')),
	array('label'=>'Create Peluqueria', 'url'=>array('create')),
	array('label'=>'Update Peluqueria', 'url'=>array('update', 'id'=>$model->pelu_id)),
	array('label'=>'Delete Peluqueria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pelu_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Peluqueria', 'url'=>array('admin')),
);
?>

<h1>View Peluqueria #<?php echo $model->pelu_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pelu_id',
		'clie_rut',
		'masc_id',
		'pelu_fecha',
		'pelu_hora',
		'pelu_valor',
	),
)); ?>
