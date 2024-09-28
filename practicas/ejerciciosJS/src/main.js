function holamundo(divId){
    var divN = document.getElementById(divId);
    divN.innerHTML = 'Hola Mundo';
}

function variables1(divId){
    var divN = document.getElementById(divId);
    var nombre = 'Juan';
    var edad = 10;
    var altura = 1.92;
    var casado = false;

    divN.innerHTML = nombre + '<br>' + 
                     edad + '<br>' + 
                     altura + '<br>' + 
                     casado;
}

function variables2(divId){
    var divN = document.getElementById(divId);
    var nombre = prompt('Ingresa tu nombre:', '');
    var edad = prompt('Ingresa tu edad:', '');
    
    divN.innerHTML = 'Hola ' + nombre + ', tienes ' + edad + ' años';
}

function estructuras1(divId){
    var divN = document.getElementById(divId);
    var valor1 = prompt('Introducir primer número:', '');
    var valor2 = prompt('Introducir segundo número:', '');
    var suma = parseInt(valor1) + parseInt(valor2);
    var producto = parseInt(valor1) * parseInt(valor2);

    divN.innerHTML = 'La suma es: ' + suma + '<br>' + 
                     'El producto es: ' + producto;
}

function estructuras2(divId){
    var divN = document.getElementById(divId);
    var nombre = prompt('Ingresa tu nombre:', '');
    var nota = prompt('Ingresa tu nota:', '');
    
    if (nota >= 4) {
        divN.innerHTML = nombre + ' está aprobado con un ' + nota;
    } else {
        divN.innerHTML = nombre + ' está reprobado con un ' + nota;
    }
}

function estructuras3(divId){
    var divN = document.getElementById(divId);
    var nota1 = parseInt(prompt('Ingresa 1ra. nota:', ''));
    var nota2 = parseInt(prompt('Ingresa 2da. nota:', ''));
    var nota3 = parseInt(prompt('Ingresa 3ra. nota:', ''));

    var promedio = (nota1 + nota2 + nota3) / 3;

    if (promedio >= 7) {
        divN.innerHTML = 'aprobado';
    } else if (promedio >= 4) {
        divN.innerHTML = 'regular';
    } else {
        divN.innerHTML = 'reprobado';
    }
}


function estructuras4(divId){
    var divN = document.getElementById(divId);
    var valor = parseInt(prompt('Ingresar un valor comprendido entre 1 y 5:', ''));

    switch (valor) {
        case 1: divN.innerHTML = 'uno'; break;
        case 2: divN.innerHTML = 'dos'; break;
        case 3: divN.innerHTML = 'tres'; break;
        case 4: divN.innerHTML = 'cuatro'; break;
        case 5: divN.innerHTML = 'cinco'; break;
        default: divN.innerHTML = 'Debe ingresar un valor comprendido entre 1 y 5.';
    }
}

function estructuras5(divId){
    var col;
    col = prompt('Ingresa el color con que quierar pintar el fondo de la ventana (rojo, verde, azul)', '');
    switch (col) {
        case 'rojo': document.bgColor = '#ff0000';
            break;
        case 'verde': document.bgColor = '#00ff00';
            break;
        case 'azul': document.bgColor = '#0000ff';
            break;
    }
}

function repeticion1(divId){
    var divN = document.getElementById(divId);
    var x;
    x=1;
    while (x<=100) {
        divN.innerHTML += (x) + ('<br>');
        x=x+1;
    } 
}

function repeticion2(divId){
    var divN = document.getElementById(divId);
    var x=1;
    var suma=0;
    var valor;
    while (x<=5){
        valor = prompt('Ingresa el valor:', '');
        valor = parseInt(valor);
        suma = suma+valor;
        x = x+1;
    }
    divN.innerHTML = ('La suma de los valores es ' + suma + '<br>');
}

function repeticion3(divId){
        var divN = document.getElementById(divId);
        var valor;
    
        do {
            valor = prompt('Ingresa un valor entre 0 y 999:', '');
            valor = parseInt(valor);

                divN.innerHTML += 'El valor ' + valor + ' tiene ';
                
                if (valor < 10) {
                    divN.innerHTML += '1 dígito';
                } else 
                        if (valor < 100) {
                    divN.innerHTML += '2 dígitos';
                } else {
                    divN.innerHTML += '3 dígitos';
                }
                
                divN.innerHTML += '<br>' + x;
        } while (valor != 0);
    
}

function repeticion4(divId){
    var divN = document.getElementById(divId);

    for(var f=1; f<=10; f++) {
        divN.innerHTML += f + ' ';
    }   
}

function funciones1(divId){
    var divN = document.getElementById(divId);
    divN.innerHTML += "Cuidado<br>";
    divN.innerHTML += "Ingresa tu documento correctamente<br>";
    divN.innerHTML += "Cuidado<br>";
    divN.innerHTML += "Ingresa tu documento correctamente<br>";
    divN.innerHTML += "Cuidado<br>";
    divN.innerHTML += "Ingresa tu documento correctamente<br>";
}

function mostrarMensaje(divId) {
    var divN = document.getElementById(divId);
    divN.innerHTML += "Cuidado<br>";
    divN.innerHTML += "Ingresa tu documento correctamente<br>";
}

function funciones2(divId){
    var divN = document.getElementById(divId);

    function mostrarRango(x1,x2) {
        var resultado = '';
        var inicio;
        for(inicio=x1; inicio<=x2; inicio++) {
            resultado += inicio + ' ';
        }
        return resultado;
    }
        var valor1,valor2;
        valor1 = prompt('Ingresa el valor inferior:', '');
        valor1 = parseInt(valor1);
        valor2 = prompt('Ingresa el valor superior:', '');
        valor2 = parseInt(valor2);
        
        var rango = mostrarRango(valor1, valor2);
        divN.innerHTML = rango;
    
}

function funciones3(divId)
{
    var divN = document.getElementById(divId);

    function convertirCastellano(x) {
        if (x == 1) return "uno";
        else if (x == 2) return "dos";
        else if (x == 3) return "tres";
        else if (x == 4) return "cuatro";
        else if (x == 5) return "cinco";
        else return "valor incorrecto";
        
        }
        var valor = prompt("Ingresa un valor entre 1 y 5", "");
        valor = parseInt(valor);
        var r = convertirCastellano(valor);
        divN.innerHTML = r;
    
}

function funciones4(divId)
{
    var divN = document.getElementById(divId);

    function convertirCastellano(x) {
        switch (x) {
        case 1: return "uno";
        case 2: return "dos";
        case 3: return "tres";
        case 4: return "cuatro";
        case 5: return "cinco";
        default: return "valor incorrecto";
        }
    }    
    var valor = parseInt(prompt("Ingresa un valor entre 1 y 5", ""));
    var r = convertirCastellano(valor);
    divN.innerHTML = r;
}