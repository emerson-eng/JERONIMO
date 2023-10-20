@extends('layouts.app')

@section('template_title')
    Ingresar
@endsection

@section('content')
    <section class="content container-fluid ">
        <div class="row">
            <div class="col-md-12 ">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="float-right m-4">
                        <a class="btn btn-primary" href="{{ route('certificates.index') }}">Regresar al inicio</a>
                    </div>
                    <div class="text-center m-1">
                        <h1 class="text-3xl font-semibold text-gray-700">Ingrese datos para certificado</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('certificates.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('certificate.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
