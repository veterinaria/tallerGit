<h1>Ficha Medica</h1>
<?php
foreach($fichamedica as $data):
?>
<h3><?php echo "Rut Cliente: ".$data->clie_rut." Id Mascota: ".$data->masc_id." Ficha Medica: ".$data->fichmed_id."edad: ".$data->fichmed_edad_masc."peso: ".$data->fichmed_peso."diag: ".$data->fichmed_diagnostico."Ind: ".$data->fichmed_indicacion?> </h3>
<?php endforeach;?>