$(document).ready(function(){
    $('#enviar').click(function() {
        var num1 = $('#num1').val()
        var opc = $('#select').val()
        var num2 = $('#num2').val()
        //codigo para comenzar a hacer ajax
        $.ajax({
            type: "POST",
            url: "operacion.php",
            data: {
                "num1": num1,
                "operacion": opc,
                "num2": num2
            },
            beforeSend: function () {
                $('#resultado').html("Espere...");
            }
        })
        .done(function(resultado){
            $('#resultado').html(resultado)
        })
        .fail(function() {
            alert('Error al realizar la operación')
        })
    })
})