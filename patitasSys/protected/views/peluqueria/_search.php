<?php
/* @var $this PeluqueriaController */
/* @var $model Peluqueria */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pelu_id'); ?>
		<?php echo $form->textField($model,'pelu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clie_rut'); ?>
		<?php echo $form->textField($model,'clie_rut',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'masc_id'); ?>
		<?php echo $form->textField($model,'masc_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pelu_fecha'); ?>
		<?php echo $form->textField($model,'pelu_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pelu_hora'); ?>
		<?php echo $form->textField($model,'pelu_hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pelu_valor'); ?>
		<?php echo $form->textField($model,'pelu_valor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->