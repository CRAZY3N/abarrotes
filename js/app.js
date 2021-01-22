'use strict'

window.addEventListener('DOMContentLoaded', function(){
    
    /* Tablas de listar */
    var tabla = $('#tabla');
    if(tabla){
        $(function () {
        tabla.DataTable({
        "paging": true,
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
        "searching": true,
        "ordering": true,
        "info": true,
        'language' : {
            paginate: {
                next: 'Siguiente',
                previous: 'Anterior',
                last: 'Último',
                first: 'Primero'
            },
            info: 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
                    emptyTable: 'No hay registros',
                    infoEmpty: '0 Registros',
                    search: 'Buscar:',
                    buttons: {
                        copy: 'COPIAR',
                        csv: 'CSV',
                        excel: 'EXCEL',
                        pdf: 'PDF',
                        print: 'IMPRIMIR'
                    },
                    lengthChange: {
                        Show: 'Mostrar',
                        entries: 'Entradas'
                    }
        },
        "buttons": ["copy", /* "csv", */ "excel", "pdf", "print", /* "colvis" */]
    }).buttons().container().appendTo('#tabla_wrapper .col-md-6:eq(0)');
});
    }

    /* Confirmar password User */
    var contra = document.getElementById("ccontra"); /* console.log(contra); */
    if(contra){
        contra.addEventListener('blur', function(){
            let con = document.getElementById("contra").value;
            if(con === contra.value){
                Swal.fire({
                    position: 'center-center',
                    icon: 'success',
                    title: 'Contraseñas iguales',
                    showConfirmButton: false,
                    timer: 1500
                  })
            } else {
                Swal.fire({
                    position: 'center-center',
                    icon: 'warning',
                    title: 'Contraseñas diferentes',
                    showConfirmButton: false,
                    timer: 1500
                  })
            }
        });
    }

});