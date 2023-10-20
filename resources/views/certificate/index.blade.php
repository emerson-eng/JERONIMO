@extends('layouts.app')

@section('template_title')
    Estudiantes
@endsection

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<style>
    .modulo {
        width: 300px;
    }
    .nomrbe {
        width: 50px;
    }
</style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">

                            </span>


                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">

                        <div class="table-responsive md:container md:mx-auto">
                            <table id ="datatable" class="table  table-striped table-hover">
                                <div class="float-right">
                                    <a href="{{ route('certificates.create') }}" class="btn btn-primary btn-lg btn-block">Ingresar nuevos datos</a>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <thead class="thead">
                                    <tr>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">N°</th>
										<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider nomrbe">Nombre</th>
										<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider nomrbe">Apellido Paterno</th>
										<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider nomrbe">Apellido Materno</th>
										<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider modulo">Modulo</th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($certificates as $certificate)
                                        <tr>
                                            <td class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">{{ ++$i }}</td>

											<td class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">{{ $certificate->name }}</td>
											<td class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">{{ $certificate->surname_paternal }}</td>
											<td class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">{{ $certificate->surname_maternal }}</td>
											<td class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">{{ $certificate->module }}</td>
                                            <td class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                <form action="{{ route('certificates.destroy',$certificate->id) }}" method="POST">
                                                    <a  href="/certificate/{{$certificate->id}}" class="text-white bg-gradient-to-r from-violet-400  via-violet-600 to-violet-700 hover:bg-gradient-to-br
                                                        focus:ring-4 focus:outline-none focus:ring-violet-300 dark:focus:ring-violet-800 font-medium rounded-lg text-sm px-2 py-2  text-center mr-2 mb-2">
                                                        <span>Descargar</span>
                                                    </a>
                                                    <a href="/certificateprueba/{{$certificate->id}}" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br
                                                        focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-2 py-2  text-center mr-2 mb-2">Muestra</a>

                                                    {{-- <a class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br
                                                    focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-2 py-2  text-center mr-2 mb-2"
                                                    href="{{ route('certificates.show',$certificate->id) }}"><i class="fa fa-fw fa-eye"></i> VER</a> --}}
                                                    <a class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg
                                                    text-sm px-2 py-2  text-center mr-2 mb-2" href="{{ route('certificates.edit',$certificate->id) }}"><i class="fa fa-fw fa-edit"></i> EDITAR</a>
                                                    @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-2 py-2 text-center mr-2 mb-2"> ELIMINAR</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $certificates->links() !!}
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
                $(document).ready( function () {
        $('#datatable').DataTable({
            "language":{
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords":"No se encontraron resultados!",
                "info":"Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sSearch":"Buscar Estudiante",
                "infoEmpty":"registros del o al o de un total de 0 registros",
                "infoFiltered":"(filtrado de un total de _MAX_ registros)",

                "oPaginate": {
                    "sFirst": "Primero",
                    "gLast":"ûltimo",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior",
                },
                "Processing": "Procesando"
            }
        });
    });
    </script>
@endsection
