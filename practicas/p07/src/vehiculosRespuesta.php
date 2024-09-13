<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
    <head>
        <title> Validación </title>
    </head>
    <body>
    <h1>Ejercicio 6 - Busqueda por Matricula</h1>
    <?php
    $propietario = [
        ["nombre" => "Juan Perez", "ciudad" => "CDMX", "Direccion" => "Av. Insurgentes Sur 3000"],
        ["nombre" => "Maria Lopez", "ciudad" => "Guadalajara", "Direccion" => "Av. Vallarta 5000"],
        ["nombre" => "Pedro Ramirez", "ciudad" => "Monterrey", "Direccion" => "Av. Constitucion 1000"],
        ["nombre" => "Ana Torres", "ciudad" => "Puebla", "Direccion" => "Av. Juarez 2000"],
        ["nombre" => "Luis Jimenez", "ciudad" => "Toluca", "Direccion" => "Av. Hidalgo 1500"],
        ["nombre" => "Rosa Martinez", "ciudad" => "Merida", "Direccion" => "Av. Reforma 2500"],
        ["nombre" => "Jorge Hernandez", "ciudad" => "Acapulco", "Direccion" => "Av. Costera 3500"],
        ["nombre" => "Sofia Garcia", "ciudad" => "Cancun", "Direccion" => "Av. Tulum 4000"],
        ["nombre" => "Carlos Sanchez", "ciudad" => "Veracruz", "Direccion" => "Av. Zaragoza 4500"],
        ["nombre" => "Fernanda Reyes", "ciudad" => "Oaxaca", "Direccion" => "Av. Independencia 5000"],
        ["nombre" => "Ricardo Vazquez", "ciudad" => "Tijuana", "Direccion" => "Av. Revolucion 5500"],
        ["nombre" => "Diana Mendoza", "ciudad" => "Aguascalientes", "Direccion" => "Av. Constitucion 6000"],
        ["nombre" => "Javier Rosas", "ciudad" => "Chihuahua", "Direccion" => "Av. Juarez 6500"],
        ["nombre" => "Gabriela Soto", "ciudad" => "Durango", "Direccion" => "Av. Hidalgo 7000"],
        ["nombre" => "Oscar Vargas", "ciudad" => "Hermosillo", "Direccion" => "Av. Reforma 7500"]
    ];

    $auto = [
        ["Marca" => "Nissan", "Modelo" => "2016", "Tipo" => "Sedan"],
        ["Marca" => "Chevrolet", "Modelo" => "2017", "Tipo" => "Hatchback"],
        ["Marca" => "Ford", "Modelo" => "2018", "Tipo" => "Camioneta"],
        ["Marca" => "Toyota", "Modelo" => "2019", "Tipo" => "Sedan"],
        ["Marca" => "Honda", "Modelo" => "2020", "Tipo" => "Hatchback"],
        ["Marca" => "Mazda", "Modelo" => "2021", "Tipo" => "Camioneta"],
        ["Marca" => "Volkswagen", "Modelo" => "2015", "Tipo" => "Sedan"],
        ["Marca" => "Audi", "Modelo" => "2017", "Tipo" => "Hatchback"],
        ["Marca" => "BMW", "Modelo" => "2018", "Tipo" => "Camioneta"],
        ["Marca" => "Mercedes Benz", "Modelo" => "2020", "Tipo" => "Sedan"],
        ["Marca" => "KIA", "Modelo" => "2012", "Tipo" => "Hatchback"],
        ["Marca" => "Hyundai", "Modelo" => "2013", "Tipo" => "Camioneta"],
        ["Marca" => "Renault", "Modelo" => "2014", "Tipo" => "Sedan"],
        ["Marca" => "Peugeot", "Modelo" => "2015", "Tipo" => "Hatchback"],
        ["Marca" => "Citroen", "Modelo" => "2016", "Tipo" => "Camioneta"]
    ];


        $matricula = [["LSK5754" => ["auto" => $auto[0], "propietario" => $propietario[0]]],
        "JDK5754" => ["auto" => $auto[1], "propietario" => $propietario[1]],
        "SLE5168" => ["auto" => $auto[2], "propietario" => $propietario[2]],
        "DSA9745" => ["auto" => $auto[3], "propietario" => $propietario[3]],
        "SAE7842" => ["auto" => $auto[4], "propietario" => $propietario[4]],
        "JDV9862" => ["auto" => $auto[5], "propietario" => $propietario[5]],
        "SLA7834" => ["auto" => $auto[6], "propietario" => $propietario[6]],
        "NFS2147" => ["auto" => $auto[7], "propietario" => $propietario[7]],
        "PUE1236" => ["auto" => $auto[8], "propietario" => $propietario[8]],
        "TTW9110" => ["auto" => $auto[9], "propietario" => $propietario[9]],
        "HOL8741" => ["auto" => $auto[10], "propietario" => $propietario[10]],
        "NYE9898" => ["auto" => $auto[11], "propietario" => $propietario[11]],
        "LAP2325" => ["auto" => $auto[12], "propietario" => $propietario[12]],
        "PALE2356" => ["auto" => $auto[13], "propietario" => $propietario[13]],
        "PHAS9841" => ["auto" => $auto[14], "propietario" => $propietario[14]]
    ];

        $matriculaBusqueda = $_POST['matricula'];
        $sexo = $_POST['sexo'];
        $edad = $_POST['edad'];
        $mostrar = $_POST['mostrar'];
        $objetosTotal = count($matricula);
        $flag = false;

        if(!$mostrar){
            if (array_key_exists($matriculaBusqueda, $matricula)){
                $flag = true;
                echo '<h2>Matricula encontrada</h2>';
                print_r($matricula[$matriculaBusqueda]);
            }
        }
        
        if(!$flag && !$mostrar){
            echo '<h2>Lo sentimos, la matricula no se encuentra en la base de datos</h2>';
        }

        if ($mostrar){
            echo '<h2>Mostrando todas las matriculas</h2>';
            print_r($matricula); 

        }

    ?>
    </body>
</html>
