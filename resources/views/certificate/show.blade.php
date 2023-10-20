@extends('layouts.app')

@section('template_title')
    {{ $certificate->name ?? "{{ __('Show') Certificate" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"></span>
                        </div>
                        <div class="float-left">
                            <a class="btn btn-primary" href="{{ route('certificates.index') }}"> Regresar al inicio</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $certificate->name }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Paterno:</strong>
                            {{ $certificate->surname_paternal }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Materno:</strong>
                            {{ $certificate->surname_maternal }}
                        </div>
                        <div class="form-group">
                            <strong>Modulo:</strong>
                            {{ $certificate->module }}
                        </div>
                        <div class="form-group">
                            <strong>Nota:</strong>
                            {{ $certificate->average }}
                        </div>
                        <div class="form-group">
                            <strong>Ciclo:</strong>
                            {{ $certificate->cycle }}
                        </div>
                        <div class="form-group">
                            <strong>Duración:</strong>
                            {{ $certificate->hours_module }}
                        </div>
                        <div class="form-group">
                            <strong>Resolución de aprobación:</strong>
                            {{ $certificate->resolution }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de resolucion:</strong>
                            {{ $certificate->date_resolution }}
                        </div>

                        <div class="form-group">
                            <strong>Fecha de inicio:</strong>
                            {{ $certificate->start_date_module }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de termino:</strong>
                            {{ $certificate->end_date_module }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidades:</strong>
                            {{ $certificate->capacity1 }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidades:</strong>
                            {{ $certificate->capacity2 }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidades:</strong>
                            {{ $certificate->capacity3 }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidades:</strong>
                            {{ $certificate->capacity4 }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidades:</strong>
                            {{ $certificate->capacity5 }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidades:</strong>
                            {{ $certificate->capacity6 }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidades:</strong>
                            {{ $certificate->capacity7 }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidades:</strong>
                            {{ $certificate->capacity8 }}
                        </div>
                        <div class="form-group">
                            <strong>Centro de prácticas:</strong>
                            {{ $certificate->practice_center }}
                        </div>
                        <div class="form-group">
                            <strong>N° de horas:</strong>
                            {{ $certificate->hours_practice }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
