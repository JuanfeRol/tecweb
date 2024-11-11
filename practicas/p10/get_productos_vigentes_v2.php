<!DOCTYPE html>
<html lang="es">
	<?php


		/** SE CREA EL OBJETO DE CONEXION */
		@$link = new mysqli('localhost', 'root', 'pochita20', 'marketzone');
		/** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */

		/** comprobar la conexión */
		if ($link->connect_errno) 
		{
			die('Falló la conexión: '.$link->connect_error.'<br/>');
			//exit();
		}

		/** Crear una tabla que no devuelve un conjunto de resultados */
		if ( $result = $link->query("SELECT * FROM productos WHERE eliminado = 0") ) 
		{
			/** Se extraen las tuplas obtenidas de la consulta */
			$row = $result->fetch_all(MYSQLI_ASSOC);
		
			/** Se crea un arreglo con la estructura deseada */
			foreach($row as $num => $registro) {            // Se recorren tuplas
				foreach($registro as $key => $value) {      // Se recorren campos
					$data[$num][$key] = utf8_encode($value);
				}
			}
		
			/** útil para liberar memoria asociada a un resultado con demasiada información */
			$result->free();
		}
		//}
		$link->close();
	?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Producto</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<script>
 	function show() {
      // se obtiene el id de la fila donde está el botón presinado
      var rowId = event.target.parentNode.parentNode.id;
      // se obtienen los datos de la fila en forma de arreglo
      var data = document.getElementById(rowId).querySelectorAll(".row_data");
      /**
      querySelectorAll() devuelve una lista de elementos (NodeList) que 
      coinciden con el grupo de selectores CSS indicados.
      (ver: https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Selectors)
      En este caso se obtienen todos los datos de la fila con el id encontrado
      y que pertenecen a la clase "row-data".
      */
	
      var name = data[0].innerHTML;
	  var marca = data[1].innerHTML;
	  var modelo = data[2].innerHTML;
	  var precio = data[3].innerHTML;
	  var unidades = data[4].innerHTML;
	  var detalles = data[5].innerHTML;
	  //imagen pero solo la ruta
	  var imagen = data[6].firstChild.src;

	  // se muestran los datos en un alert
	  alert("Nombre: " + name + "\nMarca: " + marca + "\nModelo: " + modelo + "\nPrecio: " + precio + "\nUnidades: " + unidades + "\nDetalles: " + detalles + "\nImagen: " + imagen);
      send2form(rowId ,name , marca, modelo, precio, unidades, detalles, imagen);
  	}
	</script>
	</head>
	<body>
		<h3>PRODUCTO</h3>

		<br/>
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nombre</th>
						<th scope="col">Marca</th>
						<th scope="col">Modelo</th>
						<th scope="col">Precio</th>
						<th scope="col">Unidades</th>
						<th scope="col">Detalles</th>
						<th scope="col">Imagen</th>
						<th scope="col">Editar</th>

					</tr>
				</thead>
				<tbody>
					<?php foreach ($data as $rows) { ?>
						<tr id = <?= $rows['id'] ?>>
							<th scope="row"><?= $rows['id'] ?></th>
							<td class = "row_data"><?= $rows['nombre'] ?></td>
							<td class = "row_data"><?= $rows['marca'] ?></td>
							<td class = "row_data"><?= $rows['modelo'] ?></td>
							<td class = "row_data"><?= $rows['precio'] ?></td>
							<td class = "row_data"><?= $rows['unidades'] ?></td>
							<td class = "row_data"><?= htmlspecialchars(utf8_encode($rows['detalles'])) ?></td>
							<td class = "row_data"><img src="<?= htmlspecialchars($rows['imagen']) ?>"></td>
							<td><input type="button" 
                               value="Editar" 
                               onclick="show()" /></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		<script>
            function send2form(id, nombre, marca, modelo, precio, unidades, detalles, imagen) {
                var form = document.createElement("form");

				var idIn = document.createElement("input");
				idIn.type = 'number';
				idIn.name = 'id';
				idIn.value = id;
				form.appendChild(idIn);

                var nombreIn = document.createElement("input");
                nombreIn.type = 'text';
                nombreIn.name = 'nombre';
                nombreIn.value = nombre;
                form.appendChild(nombreIn);

				var marcaIn = document.createElement("input");
				marcaIn.type = 'text';
				marcaIn.name = 'marca';
				marcaIn.value = marca;
				form.appendChild(marcaIn);

				var modeloIn = document.createElement("input");
				modeloIn.type = 'text';
				modeloIn.name = 'modelo';
				modeloIn.value = modelo;
				form.appendChild(modeloIn);

				var precioIn = document.createElement("input");
				precioIn.type = 'text';
				precioIn.name = 'precio';
				precioIn.value = precio;
				form.appendChild(precioIn);

				var unidadesIn = document.createElement("input");
				unidadesIn.type = 'text';
				unidadesIn.name = 'unidades';
				unidadesIn.value = unidades;
				form.appendChild(unidadesIn);

				var detallesIn = document.createElement("input");
				detallesIn.type = 'text';
				detallesIn.name = 'detalles';
				detallesIn.value = detalles;
				form.appendChild(detallesIn);

				var imagenIn = document.createElement("input");
				imagenIn.type = 'text';
				imagenIn.name = 'imagen';
				imagenIn.value = imagen;
				form.appendChild(imagenIn);


                console.log(form);

                form.method = 'POST';
                form.action = 'http://localhost/tecweb/practicas/p10/formulario_productos_v2.php';  

                document.body.appendChild(form);
                form.submit();
            }
        </script>
	</body>
</html>
