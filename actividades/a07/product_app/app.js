
function init() {
    /**
     * Convierte el JSON a string para poder mostrarlo
     * ver: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/JSON
     */
}

$(document).ready(function() {
    let edit = false;
    fetchProducts();
    console.log("jQuery is ready");

    //Funcion buscar con Jquery
    $('#search').keyup(function (e) {
        if ($('#search').val()) {
            let search = $('#search').val();
        console.log(search);
        $.ajax(
            {
                url: 'backend/product-search.php',
                type: 'POST',
                data: {search},
                success: function(response) {
                    let products = JSON.parse(response);
                    let template = "";
                    products.forEach(product => {
                        console.log(product);
                        template += `<li>${product.nombre}</li>`;
                    });
                    if (products.length > 0) {
                        $("#product-result").removeClass("d-none");
                    }
                    $('#container').html(template);

                    //Se listan los productos que coinciden con la busqueda con todos sus datos
                    $("#products").html("");
                    products.forEach(product => {
                        $("#products").append(`
                            <tr productId="${product.id}">
                                <td>${product.id}</td>
                                <td>
                                    <a href="#" class="product-item">${product.nombre}</a>
                                </td>
                                <td>${product.marca}</td>
                                <td>${product.modelo}</td>
                                <td>${product.precio}</td>
                                <td>${product.detalles}</td>
                                <td>${product.unidades}</td>
                                <td>
                                    <img src="${product.imagen}" class="img-fluid" alt="Imagen del producto">
                                </td>
                                <td>
                                    <button class="product-delete btn btn-danger">Eliminar</button>
                                </td>
                            </tr>
                        `);
                    });                
                }

            }
        )
        }

    });

    //Enviar Productos con jquery
    $("#product-form").submit(function (e) {
        e.preventDefault();

        id = $('#productId').val();
        nombre = $('#name').val();
        marca = $('#brand').val();
        modelo = $('#model').val();
        precio = $('#price').val();
        detalles = $('#details').val();
        unidades = $('#units').val();
        imagen = $('#image').val();

        const data = {
            id: id,
            nombre: nombre,
            marca: marca,
            modelo: modelo,
            precio: precio,
            detalles: detalles,
            unidades: unidades,
            imagen: imagen,
        };

        //se convierte a string para poder enviarlo
        dataJsonString = JSON.stringify(data);        
        //Validaciones de datos:

        // Validar nombre (requerido y 100 caracteres o menos)
        if (data.nombre.trim() === "" || data.nombre.length > 100) {
            alert("El nombre es obligatorio y debe tener 100 caracteres o menos.");
            return false;
        }

        // Validar marca (requerida y seleccionada)
        if (data.marca.trim() === "") {
            alert("Debes seleccionar una marca.");
            return false;
        }

        // Validar modelo (requerido, alfanumérico y 25 caracteres o menos)
        const modeloRegex = /^[a-zA-Z0-9]+$/;
        if (data.modelo.trim() === "" || !modeloRegex.test(data.modelo) || data.modelo.length > 25) {
            alert("El modelo es obligatorio, debe ser alfanumérico y tener 25 caracteres o menos.");
            return false;
        }

        // Validar precio (requerido y mayor a 99.99)
        if (isNaN(data.precio) || parseFloat(data.precio) <= 99.99) {
            alert("El precio es obligatorio y debe ser mayor a 99.99.");
            return false;
        }

        // Validar unidades (requerido y mayor o igual a 0)
        if (isNaN(data.unidades) || parseInt(data.unidades) < 0) {
            alert("Las unidades son obligatorias y deben ser un número mayor o igual a 0.");
            return false;
        }

        // Validar detalles (opcional, pero si se usa, máximo 250 caracteres)
        if (data.detalles.length > 250) {
            alert("Los detalles deben tener 250 caracteres o menos.");
            return false;
        }

        console.log(data);
        console.log(dataJsonString);
        let url = 
            edit === false ? "backend/product-add.php" : "backend/product-edit.php";
        $.post(url, dataJsonString, function (response) {
            console.log(response);
            let message= JSON.parse(response);
            let template = "";
            template = `<p>${message.message}</p>`;
            $("#product-form").trigger("reset");
            init();
            alert(response);
            fetchProducts();

            if (message.message.length > 0) {
                $("#product-result").removeClass("d-none");
              }
      
              $("#container").html(template);
        

        });
        e.preventDefault();
    });


    //validar cada campo del formulario y mostrar el estado en una barra de estado
    //validar que el nombre no exista en la base de datos
    $("#name").keyup(function() {
        let name = $("#name").val();
        //se imprime por consola lo enviado en el campo nombre
        console.log(name);

        //Se envia el nombre a la base de datos para verificar si existe
        $.ajax({
            url: 'backend/search-name.php',
            type: 'POST',
            data: {name},
            success: function(response) {
                let products = JSON.parse(response);
                if (products.length > 0 || name.trim() === "" || name.length > 100) {
                    $("#name").addClass("is-invalid");
                    $("#name").removeClass("is-valid");
                } else {
                    $("#name").addClass("is-valid");
                    $("#name").removeClass("is-invalid");
                }
                //Se listan los productos que coinciden con la busqueda con todos sus datos en consola
                console.log(products);
                //mostrar el resultado de la busqueda en la barra de estado
                let searchProducts = JSON.parse(response);
                let template = "";
                searchProducts.forEach(product => {
                    template += `<li>Producto existente: ${product.nombre} <br>Elige un nuevo nombre por favor</li>`;
                });
                if (searchProducts.length > 0) {
                    $("#product-result").removeClass("d-none");
                }
                $('#container').html(template);
            }
        });
    }
    );


    //validadar marca
    $("#brand").keyup(function() {
        let brand = $("#brand").val();
        if (brand.trim() === "") {
            $("#brand").addClass("is-invalid");
            $("#brand").removeClass("is-valid");
        }
        else {
            $("#brand").addClass("is-valid");
            $("#brand").removeClass("is-invalid");
        }
    });

 


    //validar modelo
    $("#model").keyup(function() {
        let model = $("#model").val();
        const modeloRegex = /^[a-zA-Z0-9]+$/;
        if (model.trim() === "" || !modeloRegex.test(model) || model.length > 25) {
            $("#model").addClass("is-invalid");
            $("#model").removeClass("is-valid");
        } else {
            $("#model").addClass("is-valid");
            $("#model").removeClass("is-invalid");
        }
    });

    //validar precio
    $("#price").keyup(function() {
        let price = $("#price").val();
        if (isNaN(price) || parseFloat(price) <= 99.99) {
            $("#price").addClass("is-invalid");
            $("#price").removeClass("is-valid");
        } else {
            $("#price").addClass("is-valid");
            $("#price").removeClass("is-invalid");
        }
    });

    //validar unidades

    $("#units").keyup(function() {
        let units = $("#units").val();
        if (isNaN(units) || parseInt(units) < 0) {
            $("#units").addClass("is-invalid");
            $("#units").removeClass("is-valid");
        } else {
            $("#units").addClass("is-valid");
            $("#units").removeClass("is-invalid");
        }
    }
    );

    //validar detalles
    $("#details").keyup(function() {
        let details = $("#details").val();
        if (details.length > 250) {
            $("#details").addClass("is-invalid");
            $("#details").removeClass("is-valid");
        } else {
            $("#details").addClass("is-valid");
            $("#details").removeClass("is-invalid");
        }
    });



    //Mostrar productos con jquery
    function fetchProducts() {
        $.ajax({
            url: 'backend/product-list.php',
            type: 'GET',
            success: function (response) {
                let products = JSON.parse(response);
                let template = "";
                products.forEach(product => {
                    template += `
                    <tr productId="${product.id}">
                        <td>${product.id}</td>
                        <td>
                            <a href="#" class="product-item">${product.nombre}</a>
                        </td>
                        <td>${product.marca}</td>
                        <td>${product.modelo}</td>
                        <td>${product.precio}</td>
                        <td>${product.detalles}</td>
                        <td>${product.unidades}</td>
                        <td>
                            <img src="${product.imagen}" class="img-fluid" alt="Imagen del producto">
                        </td>
                        <td>
                            <button class="product-delete btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
                    `;
                });
                $('#products').html(template);
            }
        });
    }

    //Eliminar productos con jquery
    $(document).on("click", ".product-delete", function () {
        if (confirm("¿Estás seguro de querer eliminar este producto?")) {
            let element = $(this)[0].parentElement.parentElement;
            let id = $(element).attr("productId");
            $.post("backend/product-delete.php", {id}, function (response) {
                fetchProducts();
                alert(response);
            });
        }
    });

    //Editar productos con jquery
    $(document).on("click", ".product-item", function () {
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr("productId");
        $.post("backend/product-single.php", {id}, function (response) {
            const product = JSON.parse(response);
            console.log(product);
            $('#productId').val(product.id);
            $('#name').val(product.nombre);
            baseJSON = {
                "precio": product.precio,
                "unidades": product.unidades,
                "modelo": product.modelo,
                "marca": product.marca,
                "detalles": product.detalles,
                "imagen": product.imagen
            };
            //asginar valores a los campos del formulario
            $('#price').val(baseJSON.precio);
            $('#units').val(baseJSON.unidades);
            $('#model').val(baseJSON.modelo);
            $('#brand').val(baseJSON.marca);
            $('#details').val(baseJSON.detalles);
            $('#image').val(baseJSON.imagen);
            $('#description').val(baseJSON.nombre);
            edit = true;
        });
    });
});