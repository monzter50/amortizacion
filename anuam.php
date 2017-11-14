<!DOCTYPE html>
<html>
    <head>
        <title>Javascript - Add HTML Table Row </title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script>

            function addRow()
            {
                  // get input values
                  var mes = document.getElementById('mes').value;
                  var monto = document.getElementById('monto').value;
                  var interes = document.getElementById('interes').value;
                  var ganancia = document.getElementById('ganancia').value;
                  var total = document.getElementById('total').value;

                  // get the html table
                  // 0 = the first table
                  var table = document.getElementsByTagName('table')[0];

                  // add new empty row to the table
                  // 0 = in the top
                  // table.rows.length = the end
                  // table.rows.length/2+1 = the center
                  var newRow = table.insertRow(table.rows.length/2+1);

                  // add cells to the row
                  var cel1 = newRow.insertCell(0);
                  var cel2 = newRow.insertCell(1);
                  var cel3 = newRow.insertCell(2);
                  var cel4 = newRow.insertCell(3);
                  var cel5 = newRow.insertCell(4);

                  for (var i = 0; i <= mes; i++) {
                    interes = ((mes / 12) / 100);
                    ganancia = (monto*interes);
                    total = (monto+ganancia);
                  }



                  // add values to the cells
                  cel1.innerHTML = mes;
                  cel2.innerHTML = monto;
                  cel3.innerHTML = interes;
                  cel4.innerHTML = ganancia;
                  cel5.innerHTML = total;
            }

        </script>

    </head>

    <body>

        Mes: <input type="text" name="mes" id="mes" /><br/><br/>
        Monto: <input type="text" name="monto" id="monto" /><br/><br/>
        Interes: <input type="text" name="interes" id="interes" /><br/><br/>
        Ganancia: <input type="text" name="ganancia" id="ganancia" /><br/><br/>
        Total: <input type="text" name="total" id="total" /><br/><br/>
        <button onclick="addRow();">Add Row</button><br/><br/>

        <table border="1">

            <tr>
                <th>Mes</th>
                <th>Monto</th>
                <th>Interes</th>
                <th>Ganancia</th>
                <th>Total</th>
            </tr>



        </table>

    </body>

</html>