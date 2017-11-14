	
	function amortizacion() {
		var C = document.getElementById("C").value;
		var i = document.getElementById("i").value;
		var N = document.getElementById("N").value;
		var P = document.getElementById("P").value;
		var R=0,I=0,Interes=0,Amortizacion=0,AmorAcum=0,Fecha=0,j=1;
		//Para sacar taza interes
		Fecha= 12/P;
		I = ((i/100)/Fecha);
		//Generas la Renta
		IN= (1-(Math.pow((1+I), -N)));
		CI=C*I;
		R= (CI/IN);
		var table = document.getElementById("myTable2");

		for (var i = 0; i <= N; i++) {
			
			
			Amortizacion;
			Amortizacion;
			C-=Amortizacion;
			var row = table.insertRow(j);
			var cel1 = row.insertCell(0);
			var cel2 = row.insertCell(1);
			var cel3 = row.insertCell(2);
			var cel4 = row.insertCell(3);
			var cel5 = row.insertCell(4);
			var cel6 = row.insertCell(5);
			cel1.innerHTML = i;
			cel2.innerHTML = R.toFixed(2);
			cel3.innerHTML = Interes.toFixed(2);
			cel4.innerHTML = Amortizacion.toFixed(2);
			cel5.innerHTML = AmorAcum.toFixed(2);
			cel6.innerHTML = C.toFixed(2);
			Interes=(C*I);
			Amortizacion=R-Interes;
			AmorAcum+=Amortizacion;
		
			j++;
						
			
		
		}
		document.getElementById("myTable2").classList.add('ver');
	}

function anualidades() {

		var Monto = document.getElementById("M").value;
		var i = document.getElementById("I").value;
		var N = document.getElementById("NP").value;
		var P = document.getElementById("PA").value;
		var R=0,I=0,Interes=0,Total=0,Ganancia=0,Fecha=0,auxMonto=0;
		Fecha= 12/P;
		I = ((i/100)/Fecha);
	 	var table = document.getElementById("myTable");
  			
		for (var i = 1; i <= N; i++) {

			auxMonto=(parseFloat(Monto)+parseFloat(Total));
			Ganancia=parseFloat(auxMonto*I);
			Total=(parseFloat(auxMonto)+parseFloat(Ganancia));
			var row = table.insertRow(i);
			var cel1 = row.insertCell(0);
			var cel2 = row.insertCell(1);
			var cel3 = row.insertCell(2);
			var cel4 = row.insertCell(3);
			var cel5 = row.insertCell(4);
			cel1.innerHTML = i;
			cel2.innerHTML = auxMonto.toFixed(2);
			cel3.innerHTML = I.toFixed(2);
			cel4.innerHTML = Ganancia.toFixed(2);
			cel5.innerHTML = Total.toFixed(2);

		}
    
            

		document.getElementById("myTable").classList.add('ver');
		

          
	}


function openCity(evt, cityName) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablinks");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].className = tablinks[i].className.replace(" active", "");
	    }

	    document.getElementById(cityName).style.display = "block";
	    evt.currentTarget.className += " active";
}