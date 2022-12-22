@extends('layouts.adm-head')
<!-- MENU -->
@section('content')
<div class="container-fluid">
<div class="row">

        <h2 class="text-pri font-weight-bold">Acciones</h2>
        <div class="demo-inline-spacing pb-8">
            <button class="btn btn-info round  mt-0" id="action_aceptar_postulantes">
                + Aceptar</button>
            <button class="btn btn-danger round mt-0" id="action_rechazar_postulantes">
                + Rechazar</button>

            <button class="btn btn-primary round mt-0" id="action_entrevista_postulantes">
                + En Entrevista</button>
        </div>

        <div class="col-12 mt-16">
            <div class="card p-24">
                <div class="table-responsive">
                    <table class="table" id="postulantes">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" class="form control sel_all_producto">
                                  </th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Dni</th>
                                <th>Genero</th>
                                <th>Fecha de Registro</th>
                                <th>Mis documentod</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($infos as $item)
                            <tr>
                                <td>
                                    <input type="checkbox" value="{{$item->id}}" class="form control sel_producto">
                                  </td>
                                <td>
                                    <span class="fw-bold"> {{$item->name}} </span>
                                </td>
                                <td>
                                    {{$item->apellido_pa}}
                                </td>
                                <td>
                                    {{$item->dni}}
                                </td>
                                <td>
                                    {{$item->email}}
                                </td>
                                <td>
                                    {{$item->created_at}}
                                </td>

                                <td>  <a href="{{route('misdocumentos',$item->id)}}" type="button" class="btn btn-primary round waves-effect btn-sm">Mis documentos</a></td>
                                <td>

                                        @switch($item->estado)
                                            @case(1)
                                            <span class="badge rounded-pill badge-light-success me-1">Registrado</span>
                                                @break
                                            @case(2)
                                            <span class="badge rounded-pill badge-light-secondary me-1">Completando <br> su registro</span>
                                                @break
                                            @case(22)
                                            <span class="badge rounded-pill badge-light-warning me-1">En clasificación</span>
                                                @break
                                            @case(3)
                                            <span class="badge rounded-pill badge-light-primary me-1">En entrevista</span>
                                                 @break
                                            @case(4)
                                            <span class="badge rounded-pill badge-light-info me-1">Aceptado</span>
                                                @break
                                            @case(5)
                                            <span class="badge rounded-pill badge-light-secondary me-1">Completo <br> documentos</span>
                                                @break
                                            @case(6)
                                            <span class="badge rounded-pill badge-light-secondary me-1">Completo <br> Legajo</span>
                                                @break
                                            @case(7)
                                            <span class="badge rounded-pill badge-light-danger me-1">Rechazado</span>
                                                @break
                                            @default
                                        @endswitch

                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#"><i data-feather='arrow-right'></i>Eliminar</a> </div>
                                        <a href="{{route('editar-postulante',$item->id)}}"><i data-feather='arrow-right'></i>Editar</a> </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>
</div>

<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/charts/chart-chartjs.js')}}"></script>
<!-- END: Page JS-->

@endsection
@section('js')
 <script>

         var idioma=
         {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "NingÃºn dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Ãšltimo",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copyTitle": 'Informacion copiada',
                "copyKeys": 'Use your keyboard or menu to select the copy command',
                "copySuccess": {
                    "_": '%d filas copiadas al portapapeles',
                    "1": '1 fila copiada al portapapeles'
                },

                "pageLength": {
                "_": "Mostrar %d filas",
                "-1": "Mostrar Todo"
                }
            }
};

$(document).ready( function () {
   var table = $('#postulantes').DataTable({
    dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',

    // dom: 'Brfltip',
    // "dom": 'Br<"float-left"i><"float-right"f>t<"float-left"l><"float-right"p><"clearfix">',
    // "lengthMenu": [[5,10,20, -1],[5,10,50,"Mostrar Todo"]],
    // "dom": 'Bfrt<"col-md-6 inline"i> <"col-md-6 inline"p>',
    language: idioma,
    buttons: [
        // 'excel'
            {
              extend: 'excel',
              text: feather.icons['file'].toSvg({ class: 'font-small-4 me-50' }) + 'Excel',
              className: 'btn btn-sm btn-info round waves-effect',
              exportOptions: { columns: [0,1,2,3, 4, 5, 6] }
            },
            {
                extend: 'pdf',
              text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 me-50' }) + 'Pdf',
              className: 'btn btn-sm btn-info round waves-effect',
              exportOptions: { columns: [0,1,2,3, 4, 5, 6] }
            },
            {
                extend: 'print',
              text: feather.icons['printer'].toSvg({ class: 'font-small-4 me-50' }) + 'Print',
              className: 'btn btn-sm btn-info round waves-effect',
              exportOptions: { columns: [0,1,2,3, 4, 5, 6] }
            },
    ],
    exportOptions: {
        modifier: {
          // DataTables core
          order: 'index', // 'current', 'applied',
          //'index', 'original'
          page: 'all', // 'all', 'current'
          search: 'none' // 'none', 'applied', 'removed'
        },
            columns: [1, 2, 3, 4, 5, 6, 7, 8, 9]
      }
   });

} );

$(document).ready(function() {
    var success = $('#type-success');
SeleccionarTodos();

        function SeleccionarTodos() {
        $('.sel_all_producto').on('click', function(e) {
            e.stopPropagation();
            $('.sel_producto:visible').not(this).prop('checked', this.checked);
        });
        }

        let postulantes_seleccionados = [];

    $('#action_rechazar_postulantes').on('click', function() {
        postulantes_seleccionados = [];
        $('.sel_producto:checked').each(function() {
            let ide_prod = $(this).val();
            postulantes_seleccionados.push(ide_prod);
        });

        ser_postulantes_seleccionados = JSON.stringify(postulantes_seleccionados);

        $.ajax({
            url:'{{ route('cambiarvariosestadopos') }}',
            type:'GET',
            async: "false",
            data: {
            user: ser_postulantes_seleccionados
            },
            dataType:'json',
            success: function(data) {
            console.log(data);
            if (data == 1) {
                    Swal.fire({
                        title: 'Postulantes actualizados!',
                        text: 'Se cambiaron de estados!',
                        icon: 'success'
                    }).then(function() {
                location.reload();
                });

            } else  if (data == 2) {
                Swal.fire({
                type: 'error',
                title: 'Postulantes ya han sido actualizado',
                icon: 'warning'
                }).then(function() {
                location.reload();
                });
            }else{
                Swal.fire({
                type: 'error',
                title: 'No se actualizaron los postulantes',
                text: data
                }).then(function() {
                //location.reload();
                });
            }
            console.log(data);
            return false;
            }
            });
        //   console.log(postulantes_seleccionados);
    });

    $('#action_aceptar_postulantes').on('click', function() {
        postulantes_seleccionados = [];
        $('.sel_producto:checked').each(function() {
            let ide_prod = $(this).val();
            postulantes_seleccionados.push(ide_prod);
        });

        ser_postulantes_seleccionados = JSON.stringify(postulantes_seleccionados);

        $.ajax({
            url:'{{ route('cambiarvariosestadopo2') }}',
            type:'GET',
            async: "false",
            data: {
            user: ser_postulantes_seleccionados
            },
            dataType:'json',
            success: function(data) {
            console.log(data);
            if (data == 1) {
                    Swal.fire({
                        title: 'Postulantes actualizados!',
                        text: 'Se cambiaron de estados!',
                        icon: 'success'
                    }).then(function() {
                location.reload();
                });

            } else  if (data == 2) {
                Swal.fire({
                type: 'error',
                title: 'Postulantes ya han sido actualizado',
                icon: 'warning'
                }).then(function() {
                location.reload();
                });
            }else{
                Swal.fire({
                type: 'error',
                title: 'No se actualizaron los postulantes',
                text: data
                }).then(function() {
                //location.reload();
                });
            }
            console.log(data);
            return false;
            }
        });
    //   console.log(postulantes_seleccionados);
    });

    $('#action_entrevista_postulantes').on('click', function() {
        postulantes_seleccionados = [];
        $('.sel_producto:checked').each(function() {
            let ide_prod = $(this).val();
            postulantes_seleccionados.push(ide_prod);
        });

        ser_postulantes_seleccionados = JSON.stringify(postulantes_seleccionados);

        $.ajax({
            url:'{{ route('cambiarvariosestadopo3') }}',
            type:'GET',
            async: "false",
            data: {
            user: ser_postulantes_seleccionados
            },
            dataType:'json',
            success: function(data) {
            console.log(data);
            if (data == 1) {
                    Swal.fire({
                        title: 'Postulantes actualizados!',
                        text: 'Se cambiaron de estados!',
                        icon: 'success'
                    }).then(function() {
                location.reload();
                });

            } else  if (data == 2) {
                Swal.fire({
                type: 'error',
                title: 'Postulantes ya han sido actualizado',
                icon: 'warning'
                }).then(function() {
                location.reload();
                });
            }else{
                Swal.fire({
                type: 'error',
                title: 'No se actualizaron los postulantes',
                text: data
                }).then(function() {
                //location.reload();
                });
            }
            console.log(data);
            return false;
            }
        });
    //   console.log(postulantes_seleccionados);
    });

});
    </script>
@endsection


