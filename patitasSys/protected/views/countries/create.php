<h1>Ficha Medica:</h1>
<?php
#widget para crear formularios, this es el controlador este seria controlador countries
$form=$this->beginWidget("CActiveForm");
?>
<!--se crean campos, recibe modelo y nombre campo -->
<b>Id</b><br><!--Rut del Cliente -- >
<?php echo $form->textField($model,"clie_rut");?>
<?php echo $form->error($model,"clie_rut");?>
<b>Id</b><br><!--Nombre del Cliente -- >
<?php echo $form->textField($model,"clie_nombre");?>
<?php echo $form->error($model,"clie_nombre");?>
<b>Id</b><br><!--Id de la Mascota -- >
<?php echo $form->textField($model,"masc_id");?>
<?php echo $form->error($model,"masc_id");?>
<b>Id</b><br><!--Nombre de la Mascota -- >
<?php echo $form->textField($model,"masc_nombre");?>
<?php echo $form->error($model,"masc_nombre");?>
<b>Id</b><br><!--Id de la Ficha Medica -- >
<?php echo $form->textField($model,"fichmed_id");?>
<?php echo $form->error($model,"fichmed_id");?>
<b>Id</b><br><!--Edad de la Ficha Medica -- >
<?php echo $form->textField($model,"fichmed_edad_masc");?>
<?php echo $form->error($model,"fichmed_edad_masc");?>
<b>Id</b><br><!--Peso de la Ficha Medica -- >
<?php echo $form->textField($model,"fichmed_peso");?>
<?php echo $form->error($model,"fichmed_peso");?>
<b>Id</b><br><!--Diagnostico de la Ficha Medica -- >
<?php echo $form->textField($model,"fichmed_diagnostico");?>
<?php echo $form->error($model,"fichmed_diagnostico");?>
<b>Id</b><br><!--Indicaciones de la Ficha Medica -- >
<?php echo $form->textField($model,"fichmed_indicacion");?>
<?php echo $form->error($model,"fichmed_indicacion");?>



<br>
<b>Nombre</b><br>
<?php
#se crean campos, recibe modelo y nombre campo
echo $form->textField($model,"nombre");
?>
<?php echo $form->error($model,"nombre");?>
<br>
<b>Estado:</b><br>
<?php
#se crean campos, recibe modelo y nombre campo
echo $form->textField($model,"estado");
?>
<?php echo $form->error($model,"estado");?>
<?php echo CHtml::submitButton("Crear",array("class"=>"btn btn-primary btn-large"));?>
<?php $this->endWidget();?>