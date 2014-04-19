<?php
/* @var $this PeluqueriaController */
/* @var $data Peluqueria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pelu_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pelu_id), array('view', 'id'=>$data->pelu_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clie_rut')); ?>:</b>
	<?php echo CHtml::encode($data->clie_rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('masc_id')); ?>:</b>
	<?php echo CHtml::encode($data->masc_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pelu_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->pelu_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pelu_hora')); ?>:</b>
	<?php echo CHtml::encode($data->pelu_hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pelu_valor')); ?>:</b>
	<?php echo CHtml::encode($data->pelu_valor); ?>
	<br />


</div>