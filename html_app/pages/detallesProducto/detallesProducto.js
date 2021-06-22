//Cuando la página es cargada correctamente
$( document ).ready(function() {
    //Pedir datos de entrada de cantidad a comprar
    $('#cantidadOrdenada').on('input', function() {
        var precio = $( "#precio" ).val();
        var cantidad = $( "#cantidadOrdenada" ).val();
        //Si la cantidad es cero
        if (cantidad == 0) {
            //El precio es cero
            document.getElementById("precioFinal").innerHTML = "0";
            return;
        } else {
            //De lo contrario, el precio es la cantidad por el precio por kilo.
            var res = precio * cantidad;
            document.getElementById("precioFinal").innerHTML = res;
        }
    });
});

