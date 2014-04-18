<h1>Ficha Medica</h1>
<?php
foreach($fichamedica as $data):
?>
<h3><?php echo "<b>Rut Cliente:</b> ".$data->clie_rut."<b>  Id Mascota:</b> ".$data->masc_id."<b> Ficha Medica:</b> ".$data->fichmed_id."<b> Edad Mascota:</b> ".$data->fichmed_edad_masc."<b> Peso Mascota:</b> ".$data->fichmed_peso;
		  echo "<br>"."<b>Diagnostico:</b> ".$data->fichmed_diagnostico;
		  echo "<br>"."<b>Indicaciones:</b> ".$data->fichmed_indicacion?> </h3>
<?php endforeach;?>