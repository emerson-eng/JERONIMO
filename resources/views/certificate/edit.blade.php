@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Certificate
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="float-right m-4">
                        <a class="btn btn-primary" href="{{ route('certificates.index') }}">Regresar al inicio</a>
                    </div>
                    <div class="text-center m-6">
                        <h1 class="l font-semibold">Editar datos del certificado</h1>
                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('certificates.update', $certificate->id) }}"  role="form" enctype="multipart/form-data">

                            {{ method_field('PATCH') }}
                            @csrf

                            @include('certificate.form')

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
