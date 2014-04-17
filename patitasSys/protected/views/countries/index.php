<h1>Countries</h1>
<?php
foreach($countries as $data):
?>
<h3><?php echo "id: ".$data->id." Nombre: ".$data->nombre?> <small><?php echo "Estado: "; echo $data->estado==1?"Habilitado":"NoHabilitado";?></small></h3>
<?php endforeach;?>