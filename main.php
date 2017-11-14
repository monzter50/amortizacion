<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.css">
	<script type="text/javascript" src="main.js"></script>
	<script type="text/javascript" href="assets/bootstrap.js"></script>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Slabo:400,700|PT Serif:400,600" rel="stylesheet">
	<title></title>
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-between">
	<a class="navbar-brand"><img src="img/Logo.jpg" class="img-logo"> Jose A. Gonzalez</a>
	<div class="col d-flex justify-content-end">
		<a class="tablinks" onclick="openCity(event, 'Amortizacion')">Amortizacion</a>
		<a class="tablinks" onclick="openCity(event, 'Anualidad')">Anualidad</a>
	</div>
</nav>
<!-- <div class="row">
	<div class="col d-flex justify-content-center">
		<button class="tablinks" onclick="openCity(event, 'Amortizacion')">Amortizacion</button>
		<button class="tablinks" onclick="openCity(event, 'Anualidad')">Anualidad</button>
	</div>
</div> -->

<section id="Amortizacion" class="tabcontent container mt-5">
	<div class="row forms">
		<div class="col-12 d-flex justify-content-center mt-5"><h2>Amortizacion</h2></div>
		<div class="col-12">
			<div class="col mt-3">
				<label><b>CAPITAL</b></label>
				<div class="input-group">
					<span class="mr-2"><img src="img/capital.png"></span>
					<input type="number" id="C" placeholder="Capital"  step="any">
				</div>
			</div>
			<div class="col mt-3">
				<label><b>TAZA INTERES</b></label>
				<div class="input-group">
					<span class="mr-2"><img src="img/interes.png"></span>
					<input type="number" id="i" placeholder="Intereses %"  step="any">
				</div>
			</div>
			<div class="col mt-3">
				<label><b>CANTIDAD DE PAGOS</b></label>
				<div class="input-group">
					<span class="mr-2"><img src="img/cantidad.png"></span>
					<input type="number" id="N"  placeholder="Pagos">
				</div>
			</div>
			<div class="col mt-3">
				<label><b>TIEMPO DE PAGOS</b></label>
				<div class="input-group">
					<span class="mr-2"><img src="img/calendario.png"></span>
					<input type="number" min="1" id="P" placeholder="Mensual,Bimestral,Trimestral,etc..">
				</div>
			</div>
			<div class="col mt-3 d-flex justify-content-center">
				<button  onclick="amortizacion()" data-toggle="modal" data-target="#exampleModal"><span class="mr-2"><img src="img/calculator.png"></span>Calcular</button>
			</div>
		</div>
		<div class="col-12 mt-5">

				<table class="customers mb-3" id="myTable2">
		            <tr>
		                <th>N</th>
		                <th>RENTA(R)</th>
		                <th>Interes(I)</th>
		                <th>Amortización(A)</th>
		                <th>Amortización<br>Acumulado(AA)</th>
		                <th>Saldo<br>Insoluto(SI)</th>
		            </tr>
		        </table>
	 	</div>
	</div>
</section>

<section id="Anualidad" class="tabcontent container mt-5">
	<div class="row forms">
		<div class="col-12 d-flex justify-content-center mt-5"><h2>Anualidad</h2></div>
		<div class="col-12">
			<div class="col mt-3">
				<label><b>CAPITAL</b></label>
				<div class="input-group">
					<span class="mr-2"><img src="img/capital.png"></span>
					<input type="number" id="M" placeholder="Capital" step="any">
				</div>
			</div>
			<div class="col mt-3">
				<label><b>TAZA DE INTERES</b></label>
				<div class="input-group">
					<span class="mr-2"><img src="img/interes.png"></span>
					<input type="number" id="I" placeholder="Intereses %" step="any">
				</div>
			</div>
			<div class="col mt-3">
				<label><b>CANTIDAD DE PAGOS</b></label>
				<div class="input-group">
					<span class="mr-2"><img src="img/cantidad.png"></span>
					<input type="number" id="NP" placeholder="Pagos">
				</div>
			</div>
			<div class="col mt-3">
				<label><b>TIEMPO DE PAGOS</b></label>
				<div class="input-group">
					<span class="mr-2"><img src="img/calendario.png"></span>
					<input type="number" min="1" id="PA" placeholder="Mensual,Bimestral,Trimestral,etc..">
				</div>
			</div>

			<div class="col d-flex justify-content-center mt-3">
				<button onclick="anualidades()"><span class="mr-2"><img src="img/calculator.png"></span>Calcular</button>
			</div>
		</div>
		<div class="col-12 mt-5">
			<table class="customers" id="myTable">
	            <tr>
	                <th>Mes</th>
	                <th>Monto</th>
	                <th>Interes</th>
	                <th>Ganancia</th>
	                <th>Total</th>
	            </tr>
	        </table>
	    </div>
	</div>
</section>

</body>

</html>