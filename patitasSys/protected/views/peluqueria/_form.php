<?php
/* @var $this PeluqueriaController */
/* @var $model Peluqueria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'peluqueria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'clie_rut'); ?>
		<?php echo $form->textField($model,'clie_rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'clie_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'masc_id'); ?>
		<?php echo $form->textField($model,'masc_id'); ?>
		<?php echo $form->error($model,'masc_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pelu_fecha'); ?>
		<?php echo $form->textField($model,'pelu_fecha'); ?>
		<?php echo $form->error($model,'pelu_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pelu_hora'); ?>
		<?php echo $form->textField($model,'pelu_hora'); ?>
		<?php echo $form->error($model,'pelu_hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pelu_valor'); ?>
		<?php echo $form->textField($model,'pelu_valor'); ?>
		<?php echo $form->error($model,'pelu_valor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->