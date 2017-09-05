<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<style>.ma {width: 50%;}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col alert alert-warning text-center"><h1>Temperatūra ir pojūtis</h1></div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-3"></div>
			<div class="col align-self-center">
				<table class="table ma border">
					<thead>
						<tr>
							<th>Temperatūra &#8451;</th>
							<th>Pojūtis</th>
						</tr>
					</thead>
					<tbody>
						<?php
							
							for ($i=-30; $i <= 35 ;	$i+=3 ) {
								
								echo "<tr><td>".$i."</td><td>".check($i)."</td></tr>";
							}	
							
							function check($temp) {
								$r = "";
								if ($temp <=-21) {
								 $r= "Labai šalta!";
								}
								elseif ($temp > -20 && $temp <=5) {
									$r = 'Šalta';
								} 	
								elseif ($temp > 5 && $temp <=20) {
									$r = 'Šilta';
								}
								elseif ($temp > 20 && $temp <=25){
									$r = 'Karšta';
								}
								elseif ($temp > 25 ){
									$r = 'Labai karšta';
								}
								return $r;	
								}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>