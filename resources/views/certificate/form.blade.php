
<script src="https://cdn.tailwindcss.com"></script>
<div class="box box-info padding-1 ">

    <div class="box-body text-xl font-sans container mx-auto px-4 bg-blue-100 py-8">

        <div class="row">
            <div class="col leading-10" >

                <div class="form-group  mb-1">
                    {{ Form::text('name_cetpro', $certificate->name_cetpro, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow"' . ($errors->has('name_cetpro') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del cetpro','type'=>'text']) }}
                    {!! $errors->first('name_cetpro', '<div class="invalid-feedback">Ingrese el nombre del CETPRO</div>') !!}
                </div>
                <div class="form-group  mb-1">
                    {{ Form::text('name', $certificate->name, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow"' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del estudiante','type'=>'text']) }}
                    {!! $errors->first('name', '<div class="invalid-feedback">Ingrese el nombre</div>') !!}
                </div>

                <div class="form-group mb-1">
                    {{ Form::text('surname_paternal', $certificate->surname_paternal, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('surname_paternal') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Paterno']) }}
                    {!! $errors->first('surname_paternal', '<div class="invalid-feedback">Ingrese el apellido paterno</div>') !!}
                </div>

                <div class="form-group mb-1">
                    {{ Form::text('surname_maternal', $certificate->surname_maternal, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('surname_maternal') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Materno']) }}
                    {!! $errors->first('surname_maternal', '<div class="invalid-feedback">Ingrese el apellido materno</div>') !!}
                </div>

                <div class="form-group mb-1">
                    {{ Form::text('module', $certificate->module, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('module') ? ' is-invalid' : ''), 'placeholder' => 'Módulo']) }}
                    {!! $errors->first('module', '<div class="invalid-feedback">Ingrese el módulo</div>') !!}
                </div>

                <div class="form-group mb-1">
                    {{ Form::number('average', $certificate->average, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('average') ? ' is-invalid' : ''), 'placeholder' => 'Nota']) }}
                    {!! $errors->first('average', '<div class="invalid-feedback">Ingrese la nota</div>') !!}
                </div>

                <div class="form-group mb-1">
                    {{ Form::text('cycle', $certificate->cycle, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('cycle') ? ' is-invalid' : ''), 'placeholder' => 'Nibel de ciclo']) }}
                    {!! $errors->first('cycle', '<div class="invalid-feedback">Ingrese el nivel de ciclo</div>') !!}
                </div>

                <div class="form-group mb-1">
                    {{ Form::text('hours_module', $certificate->hours_module, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('hours_module') ? ' is-invalid' : ''), 'placeholder' => 'Horas (módulo)']) }}
                    {!! $errors->first('hours_module', '<div class="invalid-feedback">Ingrese el numero de horas</div>') !!}
                </div>

                <?

                ?>
                {{-- <div class="form-group mb-1 flex flex-col items-center justify-center pt-5 pb-6">
                    {{ Form::file('logo', $certificate->logo, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow font-semibold"' . ($errors->has('logo') ? ' is-invalid' : ''), 'placeholder' => 'Logo del cetpro']) }}
                    {!! $errors->first('logo', '<div class="invalid-feedback">Suba el logo del CETPRO</div>') !!}
                    <label class="block text-grey-darker text-sm font-bold mb-2">Suba el logo del CETPRO:</label>
                </div> --}}

                {{-- <div class="form-group mb-1 flex flex-col items-center justify-center pt-5 pb-6" enctype="multipart/form-data" accept="image/*">
                    <input type="file" name="logo"  value="{{'logo', $certificate->logo}}">
                </div> --}}


            </div>
            <div class="col">
                <div class="form-group mb-1">
                    <label class="block text-grey-darker text-sm font-bold mb-2">Fecha de inicio:</label>
                    {{ Form::date('start_date_module', $certificate->start_date_module, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('start_date_module') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de inicio (módulo)',]) }}
                    {!! $errors->first('start_date_module', '<div class="invalid-feedback">Ingrese fecha de inicio</div>') !!}
                </div>
                <div class="form-group mb-1">
                    <label class="block text-grey-darker text-sm font-bold mb-2">Fecha de termino:</label>
                    {{ Form::date('end_date_module', $certificate->end_date_module, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('end_date_module') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de termino (módulo)',]) }}
                    {!! $errors->first('end_date_module', '<div class="invalid-feedback">:Ingrese fecha de termino</div>') !!}
                </div>
                <div class="form-group mb-1">
                    {{ Form::text('resolution', $certificate->resolution, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('resolution') ? ' is-invalid' : ''), 'placeholder' => 'Resolucion (módulo)']) }}
                    {!! $errors->first('resolution', '<div class="invalid-feedback">Ingrese la resolucion del modulo</div>') !!}
                </div>
                <div class="form-group mb-1">
                    <label class="block text-grey-darker text-sm font-bold mb-2">Fecha de resolución:</label>
                    {{ Form::date('date_resolution', $certificate->date_resolution, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('date_resolution') ? ' is-invalid' : ''), 'placeholder' => 'Fercha resolucion (módulo)',]) }}
                    {!! $errors->first('date_resolution', '<div class="invalid-feedback">Ingrese fecha de resolucion del modulo</div>') !!}
                </div>

                <div class="form-group mb-1">
                    {{ Form::text('practice_center', $certificate->practice_center, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('practice_center') ? ' is-invalid' : ''), 'placeholder' => 'Practice Center']) }}
                    {!! $errors->first('practice_center', '<div class="invalid-feedback">Ingrese centro de prácticas</div>') !!}
                </div>

                <div class="form-group mb-1">
                    {{ Form::text('hours_practice', $certificate->hours_practice, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('hours_practice') ? ' is-invalid' : ''), 'placeholder' => 'Hours Practice']) }}
                    {!! $errors->first('hours_practice', '<div class="invalid-feedback">Ingrese cantidad de horas de la práctica</div>') !!}
                </div>
            </div>
            <div class="col">
                <div class="text-center m-6 bg-blue-100">
                    <h1 class="text-3xl font-semibold text-gray-700">Capacidades terminales</h1>
                </div>
                <div class="form-group mb-1">
                    {{ Form::text('capacity1', $certificate->capacity1, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('capacity') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad 1']) }}

                </div>
                <div class="form-group mb-1">
                    {{ Form::text('capacity2', $certificate->capacity2, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('capacity') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad 2']) }}

                </div>
                <div class="form-group mb-1">
                    {{ Form::text('capacity3', $certificate->capacity3, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('capacity') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad 3']) }}

                </div>
                <div class="form-group mb-1">
                    {{ Form::text('capacity4', $certificate->capacity4, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('capacity') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad 4']) }}

                </div>
                <div class="form-group mb-1">
                    {{ Form::text('capacity5', $certificate->capacity5, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('capacity') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad 5']) }}

                </div>
                <div class="form-group mb-1">
                    {{ Form::text('capacity6', $certificate->capacity6, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('capacity') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad 6']) }}

                </div>
                <div class="form-group mb-1">
                    {{ Form::text('capacity7', $certificate->capacity7, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('capacity') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad 7']) }}

                </div>
                <div class="form-group mb-1">
                    {{ Form::text('capacity8', $certificate->capacity8, ['class' => 'form-control w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow' . ($errors->has('capacity') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad 8']) }}
                </div>

            </div>
          </div>



    </div>

    <div class="text-center m-6">
        <button
        type="submit"
        class=" text-center inline-block rounded border-2 border-success px-10 pb-[6px] pt-2 text-2xl font-medium uppercase leading-normal text-success transition duration-150 ease-in-out hover:border-success-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-success-600 focus:border-success-600 focus:text-success-600 focus:outline-none focus:ring-0 active:border-success-700 active:text-success-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
        data-te-ripple-init>
        @if( route('certificates.create'))
        Registrar
        @elseif( route('certificates.edit',$certificate->id))
        Actualizar
        @endif
    </button>
    </div>



</div>
