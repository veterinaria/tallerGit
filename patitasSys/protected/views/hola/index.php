<h1>Siguenos en twitter :D <?php echo $twitter;?></h1>
<!--ciclo foreach -->
<?php foreach($model as $data):?> 
	<h1><?php echo " Username: ".$data->username." id: ".$data->id." email: ".$data->email;?></h1>
<?php endforeach; ?>