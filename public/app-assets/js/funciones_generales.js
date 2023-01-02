function validIsNullOrEmpty(valor) {
    if (valor == null) {
        return true;
    }
    if (valor == "") {
        return true;
    }
    return false;
}

function validIsNullOrEmptyOrZero(valor) {
    if (valor == null) {
        return true;
    }
    if (valor == "") {
        return true;
    }
    if (valor == 0 || valor == "0") {
        return true;
    }
    return false;
}


function validIsNullOrEmptOrMinusOne(valor) {
    if (valor == null) {
        return true;
    }
    if (valor == "") {
        return true;
    }
    if (valor == -1 || valor == "-1") {
        return true;
    }
    return false;
}

function onlyNumbers(valor) {
    var regex = new RegExp("^[0-9]+$");
    if (!regex.test(valor)) {
        return false;
    }
    return true;
}

function validateEmail(email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if( !emailReg.test( email ) ) {
        return false;
    } else {
        return true;
    }
}


/* --- VALIDAR CAMPOS POR CLASE --- */
function ValidadorAuto(clase) {

    var retorno = "true";

    $(clase).each(function () {

        var ide = $(this).data("ide");
        var msj_val = $(this).data("msj");
        var type = $(this).data("type");
        var valor = $(this).val();

        var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

        $('.dev-msj').remove();

        $(this).css({
            "outline": "0px",
            "background": ""
        });

        if (msj_val == "") { msj_val = "Debe llenar todos los campos"; }

        switch (type) {
            case "text":
                if (validIsNullOrEmpty(valor)) {

                    $(this).after("<p class='text-danger dev-msj mt-4'>"+msj_val+"</p>")
                    $(this).css({
                        "outline": "2px solid indianred",
                        "background": ""
                    });

                    retorno = "false";
                    return false;
                }

                break;

                case "mail":
                var email_validado = validateEmail(valor);
                if(email_validado == false){
                    $(this).after("<p class='text-danger dev-msj mt-4'>"+msj_val+"</p>")
                    $(this).css({
                        "outline": "2px solid indianred",
                        "background": ""
                    });

                    retorno = "false";
                    return false;
                }

                break;

            case "number":
                if (validIsNullOrEmpty(valor) || !onlyNumbers(valor)) {

                    $(this).after("<p class='text-danger dev-msj mt-4'>"+msj_val+"</p>")
                    $(this).css({
                        "outline": "2px solid indianred",
                        "background": ""
                    });

                    retorno = "false";
                    return false;
                }
                break;

                case "telefono":
                if (validIsNullOrEmpty(valor) || !onlyNumbers(valor) || valor.length < 9) {

                    $(this).after("<p class='text-danger dev-msj mt-4'>Ingrese su teléfono con 9 dígitos</p>")
                    $(this).css({
                        "outline": "2px solid indianred",
                        "background": ""
                    });

                    retorno = "false";
                    return false;
                }
                break;

                case "password":

                    if ( valor.match(/[A-z]/) ) {
                    } else {

                        $(this).after("<p class='text-danger dev-msj mt-4'>Ingrese al menos una letra</p>")
                        $(this).css({
                            "outline": "2px solid indianred",
                            "background": ""
                        });
                        retorno = "false";
                        return false;
                    }

                    //validate capital letter
                    if ( valor.match(/[A-Z]/) ) {

                    } else {
                        $(this).after("<p class='text-danger dev-msj mt-4'>Ingrese al menos una letra Mayúscula</p>")
                        $(this).css({
                            "outline": "2px solid indianred",
                            "background": ""
                        });
                        retorno = "false";
                        return false;
                    }

                    //validate number
                    if ( valor.match(/\d/) ) {

                    } else {
                        $(this).after("<p class='text-danger dev-msj mt-4'>Ingrese al menos un número</p>")
                        $(this).css({
                            "outline": "2px solid indianred",
                            "background": ""
                        });
                        retorno = "false";
                        return false;
                    }

                    if ( valor.length < 8 ) {
                        $(this).after("<p class='text-danger dev-msj mt-4'>Ingrese al menos 8 caracteres</p>")
                        $(this).css({
                            "outline": "2px solid indianred",
                            "background": ""
                        });
                        retorno = "false";
                        return false;
                    }


                break;

            case "select":
                if (validIsNullOrEmptOrMinusOne(valor) || validIsNullOrEmptyOrZero(valor)) {

                    $(this).after("<p class='text-danger dev-msj mt-4'>"+msj_val+"</p>")
                    $(this).css({
                        "outline": "2px solid indianred",
                        "background": ""
                    });

                    retorno = "false";
                    return false;
                }
                break;

            case "date":
                var dateFecha = new Date(valor);
                var dateFechaHoy = new Date(fechaHoy());

                if (validIsNullOrEmpty(valor) == true || dateFecha.getTime() > dateFechaHoy.getTime()) {

                    $(this).after("<p class='text-danger dev-msj mt-4'>"+msj_val+"</p>")
                    $(this).css({
                        "outline": "2px solid indianred",
                        "background": ""
                    });

                    retorno = "false";
                    return false;
                }
                break;
        }

    });

    return retorno;
}

/*-------------------- SUBIR FOTO --------------------- */

$('.up-img').on('change', function(e){
    e.preventDefault();
    console.log("Muestra");
    var destino = $(this).closest('.cnt-upload').find('.item-upload-img');
    SubirFotos($(this).attr('id'), destino);

});


function SubirFotos(element, destino){

    console.log(element);
    $(destino).parent().append('<div class="cnt-loade"><img class="loa" src="img/cargador.gif"></div>');

    var archivos = document.getElementById(element);//Creamos un objeto con el elemento que contiene los archivos: el campo input file, que tiene el id = 'archivos'
    var archivo = archivos.files; //Obtenemos los archivos seleccionados en el imput
    //Creamos una instancia del Objeto FormDara.
    var archivos = new FormData();
    /* Como son multiples archivos creamos un ciclo for que recorra la el arreglo de los archivos seleccionados en el input
    Este y añadimos cada elemento al formulario FormData en forma de arreglo, utilizando la variable i (autoincremental) como
    indice para cada archivo, si no hacemos esto, los valores del arreglo se sobre escriben*/
    for(i=0; i<archivo.length; i++){
        archivos.append('archivo'+i,archivo[i]); //Añadimos cada archivo a el arreglo con un indice direfente
    }

    /*Ejecutamos la función ajax de jQuery*/
    $.ajax({
        url:'controlador/upload.php', //Url a donde la enviaremos
        type:'POST', //Metodo que usaremos
        contentType:false, //Debe estar en false para que pase el objeto sin procesar
        data:archivos, //Le pasamos el objeto que creamos con los archivos
        processData:false, //Debe estar en false para que JQuery no procese los datos a enviar
        cache:false,
        beforeSend: function(){
        },
        success: function(data){
            if(data == "")
            {
                Swal.fire({
                    type: 'error',
                    title: 'Imagen vacía',
                    text: 'Ne se ah seleccionado ninguna imagen'
                });
                return false;
            }else{
                $('.cnt-loade').remove();
                $(destino).attr('src', data);
                $('img[data-ide='+ element +']').attr('src', data);
            }
        }//Para que el formulario no guarde cache
    }).done(function(data){
        Swal.fire({
            type: 'success',
            title: 'Imagen actualizada',
            text: 'Se actualizo la imagen correctamente'
        });
    });
}












