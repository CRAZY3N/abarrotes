'use strict'

window.addEventListener('DOMContentLoaded', function(){
    
    /* Insertar */
    var agregar = $('#agregar'); /* console.log(agregar); */
    if(agregar){ 
        agregar.on('submit', function(e){
            e.preventDefault(); /* console.log(agregar); */
            var datos = $(this).serializeArray();  /* console.log(datos); */
            var pag = $('#pag').val(); /* console.log(pag); */
            /* Ajax */
            $.ajax({
                type: $(this).attr('method'),
                data: datos,
                url: $(this).attr('action'),
                datatype: 'JSON',
                success: function(data){
                    let respuesta = JSON.parse(data); /* console.log(respuesta); */
                    if(respuesta.icon === 'success'){
                        Swal.fire({
                            position: 'center-center',
                            icon: respuesta.icon,
                            title: respuesta.title,
                            text: respuesta.text,
                            showConfirmButton: false,
                            timer: 1500
                        })
                        setInterval(function(){
                            window.location = pag;
                        }), 1800;
                    } else{
                        Swal.fire({
                            position: 'center-center',
                            icon: respuesta.icon,
                            title: respuesta.title,
                            text: respuesta.text,
                            showConfirmButton: false,
                            timer: 1500,
                        })
                    }
                }
            });

        });   
    }

    /* Editar */
    var editar = $('#editar'); /* console.log(editar); */
    if(editar){
        editar.on('submit', function(e){
            e.preventDefault(); console.log("Editar");
            var datos = $(this).serializeArray(); /* console.log(datos); */
            var pag = $('#pag').val(); /* console.log(pag); */
            /* Ajax */
            $.ajax({
                type: $(this).attr('method'),
                data: datos,
                url: $(this).attr('action'),
                datatype: 'JSON',
                success: function(data){
                    let respuesta = JSON.parse(data); console.log(respuesta);
                    if(respuesta.icon === 'success'){
                        Swal.fire({
                            position: 'center-center',
                            icon: respuesta.icon,
                            title: respuesta.title,
                            text: respuesta.text,
                            showConfirmButton: false,
                            timer: 1500
                        })
                        setInterval(function(){
                            window.location = pag;
                        })
                    } else {
                        Swal.fire({
                            position: 'center-center',
                            icon: respuesta.icon,
                            title: respuesta.title,
                            text: respuesta.text,
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                }
            });

        });
    }

    /* Eliminar */
    $('.borrar').on('click', function(e){
        e.preventDefault(); /* console.log('Borrar'); */
        var id = $(this).attr('data-id'); /* console.log(id); */
        var tipo = $(this).attr('data-type'); /* console.log(tipo); */

        /* Solicitar confirmación de eliminación */
        Swal.fire({
            title: '¿Seguro de eliminar?',
            text: 'Una vez eliminado no hay vuelta atras!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if(result.isConfirmed) { /* console.log('Si Eliminar'); */
                $.ajax({
                    type: 'POST',
                    data: {
                        'id': id,
                        'tipo': tipo,
                        'accion': 'eliminar'                       
                    },
                    url: 'inc/functions/modelo-prod',
                    datatype: 'JSON',
                    success: function(data){
                        let respuesta = JSON.parse(data); /* console.log(respuesta); */
                        if(respuesta.icon === 'success'){
                            $('#' + id).parents('tr').remove();
                            Swal.fire({
                                position: 'center-center',
                                icon: respuesta.icon,
                                title: respuesta.title,
                                text: respuesta.text,
                                showConfirmButton: false,
                                timer: 1500
                            })
                        } else {
                            Swal.fire({
                                position: 'center-center',
                                icon: respuesta.icon,
                                title: respuesta.title,
                                text: respuesta.text,
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    }
                })
            }
        })
    });

});