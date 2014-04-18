<h1>Ficha Medica</h1>
<?php
#widget para crear formularios, this es el controlador este seria controlador countries
$form=$this->beginWidget("CActiveForm");
?>
<!--se crean campos, recibe modelo y nombre campo -->

<b>Id Ficha Medica:</b><br>
<?php echo $form->textField($model,"fichmed_id");?>
<?php echo $form->error($model,"fichmed_id");?>
<br>
<b>Rut Cliente:</b><br>
<?php echo $form->textField($model,"clie_rut");?>
<?php echo $form->error($model,"clie_rut");?>
<br>
<b>Id Mascota</b><br>
<?php echo $form->textField($model,"masc_id");?>
<?php echo $form->error($model,"masc_id");?>
<br>
<b>Edad Mascota:</b><br>
<?php echo $form->textField($model,"fichmed_edad_masc");?>
<?php echo $form->error($model,"fichmed_edad_masc");?>
<br>
<b>Peso Mascota:</b><br>
<?php echo $form->textField($model,"fichmed_peso");?>
<?php echo $form->error($model,"fichmed_peso");?>
<br>
<b>Diagnostico:</b><br>
<?php echo $form->textArea($model,"fichmed_diagnostico");?>
<?php echo $form->error($model,"fichmed_diagnostico");?>
<br>
<b>Indicaciones:</b><br>
<?php echo $form->textArea($model,"fichmed_indicacion");?>
<?php echo $form->error($model,"fichmed_indicacion");?>
<br>
<?php echo CHtml::submitButton("Ingresar",array("class"=>"btn btn-primary btn-large"));?>
<?php $this->endWidget();?>