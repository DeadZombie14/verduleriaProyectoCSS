$('#boton_cargar').click(function() {
    $.ajax({
        type: 'POST',
        url: 'http://localhost:8080/LEDon'
    }).done(function ( data ) {
  console.log(data);
})
});