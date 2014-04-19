<?php
/* @var $this PeluqueriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Peluquerias',
);

$this->menu=array(
	array('label'=>'Create Peluqueria', 'url'=>array('create')),
	array('label'=>'Manage Peluqueria', 'url'=>array('admin')),
);
?>

<h1>Peluquerias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
