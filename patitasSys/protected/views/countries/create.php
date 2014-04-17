<h1>Create Countries</h1>
<?php
#widget para crear formularios, this es el controlador este seria controlador countries
$form=$this->beginWidget("CActiveForm");
?>
<b>Id</b><br>
<?php
#se crean campos, recibe modelo y nombre campo
echo $form->textField($model,"id");
?>
<?php echo $form->error($model,"id");?>
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