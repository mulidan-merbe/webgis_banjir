<?php
// foreach ($sensor as $key => $value) {
// 	echo $value->data_sensor;
// 	echo "<br>";
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">No</th>
								<!-- <th class="column2">ID Sensor</th> -->
								<th class="column3">Data Sensor 1</th>
								<th class="column3">Data Sensor 2</th>
								<th class="column3">Data Sensor 3</th>
								<th class="column4">Waktu</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$no = 0;
						foreach ($sensor as $key => $value) {
							$no++;
						?>
							<tr>
								<td class="column1"><?=$no;?></td>
								<!-- <td class="column2"><?=$value->id_sensor;?></td> -->
								<td class="column3"><?=$value->data_sensor1;?>cm</td>
								<td class="column3"><?=$value->data_sensor2;?>cm</td>
								<td class="column3"><?=$value->data_sensor3;?>cm</td>
								<td class="column4"><?=$value->waktu ?></td>
							</tr>	
						<?php
						}
						?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="http://localhost/belajar/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/belajar/js/main.js"></script>

</body>
</html>