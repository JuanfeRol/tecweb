<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Registro de Productos Nuevos</title>
  <style type="text/css">
    ol, ul {
      list-style-type: none;
    }
  </style>
  <script>
    // Validación del formulario
    function validarFormulario(event) {
      // Evitar que el formulario se envíe antes de validar
      event.preventDefault();

      // Obtener los valores de los campos
      const nombre = document.getElementById("form-name").value;
      const marca = document.getElementById("form-brand").value;
      const modelo = document.getElementById("form-model").value;
      const precio = document.getElementById("form-price").value;
      const unidades = document.getElementById("form-units").value;
      const detalles = document.getElementById("form-details").value;
      const image = document.getElementById("form-units").value;

      // Validar nombre (requerido y 100 caracteres o menos)
      if (nombre.trim() === "" || nombre.length > 100) {
        alert("El nombre es obligatorio y debe tener 100 caracteres o menos.");
        return false;
      }

      // Validar marca (requerida y seleccionada)
      if (marca === "") {
        alert("Debes seleccionar una marca.");
        return false;
      }

      // Validar modelo (requerido, alfanumérico y 25 caracteres o menos)
      const modeloRegex = /^[a-zA-Z0-9]+$/;
      if (modelo.trim() === "" || !modeloRegex.test(modelo) || modelo.length > 25) {
        alert("El modelo es obligatorio, debe ser alfanumérico y tener 25 caracteres o menos.");
        return false;
      }

      // Validar precio (requerido y mayor a 99.99)
      if (precio.trim() === "" || isNaN(precio) || parseFloat(precio) <= 99.99) {
        alert("El precio es obligatorio y debe ser mayor a 99.99.");
        return false;
      }

      // Validar unidades (requerido y mayor o igual a 0)
      if (unidades.trim() === "" || isNaN(unidades) || parseInt(unidades) < 0) {
        alert("Las unidades son obligatorias y deben ser un número mayor o igual a 0.");
        return false;
      }

      // Validar detalles (opcional, pero si se usa, máximo 250 caracteres)
      if (detalles.length > 250) {
        alert("Los detalles deben tener 250 caracteres o menos.");
        return false;
      }


      // Si todas las validaciones pasan, enviar el formulario
      alert("Formulario válido. Enviando datos...");
      event.target.submit();  // Se envía el formulario
    }

    // Asignar la función al evento de envío del formulario
    window.onload = function() {
      document.getElementById("formularioTenis").addEventListener("submit", validarFormulario);
    };            
  </script>
</head>
<body>
  <h1>Registro de productos nuevos</h1>

  <form id="formularioTenis" action="http://localhost/tecweb/practicas/p09/set_producto_v2.php" method="post">
    <h2>Inserte datos del producto nuevo:</h2>

    <fieldset>
      <ul>
      <li>
          <label for="form-name">Id del producto:</label><br>
          <input type="text" name="id" id="form-id" required value="<?= !empty($_POST['id'])?$_POST['id']:$_GET['id'] ?>" readonly>
        </li>
        <li>
          <label for="form-name">Nombre del producto:</label><br>
          <input type="text" name="name" id="form-name" required value="<?= !empty($_POST['nombre'])?$_POST['nombre']:$_GET['nombre'] ?>">
        </li>
        <li>
          <label for="form-brand">Marca del producto:</label><br>
          <select name="brand" id="form-brand" required>
            <option value="">Selecciona una marca</option>
            <option value="Peanuts">Peanuts</option>s
            <option value="Sanrio">Sanrio</option>
            <option value="MuñeLocos">Muñelocos</option>
          </select>
        </li>
        <li>
          <label for="form-model">Modelo del producto:</label><br>
          <input type="text" name="model" id="form-model" required value="<?= !empty($_POST['modelo'])?$_POST['modelo']:$_GET['modelo'] ?>">
        </li>
        <li>
          <label for="form-price">Precio del producto:</label><br>
          <input type="text" name="price" id="form-price" required value="<?= !empty($_POST['precio'])?$_POST['precio']:$_GET['precio'] ?>">
        </li>
        <li>
          <label for="form-units">Unidades en existencia:</label><br>
          <input type="text" name="units" id="form-units" required value="<?= !empty($_POST['unidades'])?$_POST['unidades']:$_GET['unidades'] ?>">
        </li>
        <li>
          <label for="form-details">Detalles del producto:</label><br>
          <input type="text" name="details" id="form-details" placeholder="No más de 250 caracteres de longitud" value="<?= !empty($_POST['detalles'])?$_POST['detalles']:$_GET['detalles'] ?>"></textarea>
        </li>
        <li>
          <label for="form-units">Ruta Imagen:</label><br>
          <input type="text" name="image" id="form-units" value="<?= !empty($_POST['imagen'])?$_POST['imagen']:$_GET['imagen'] ?>" >
        </li>
      </ul>
    </fieldset>

    <p>
      <input type="submit" value="Subir producto a BD">
      <input type="reset" value="Restablecer">
    </p>
  </form>
</body>
</html>
