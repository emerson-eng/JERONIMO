<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @page {
                margin: 0px;
            }
        img{
            position: relative;
            top:-7px;
            right: 23px;
            width: 1140px;
            height: 792px;
            z-index: 1;
        }
        .image-1{
            position: absolute;
            top:0px;
            height: 130px;
            width: 120px;
            left: 240px;
            top: 60px;
            z-index: 1;
        }
        .cetpro-public{
            position: absolute;
            top: 208px;
            z-index: 2;
            left: 70px;
        }
        .name-cetpro{
            position: absolute;
            top: 245px;
            z-index: 2;
            left: 0px;
        }
        .name-student{
            position: absolute;
            top: 298px;
            z-index: 2;
            left: 0px;
        }
        .name-student-1{
            position: absolute;
            top: 332px;
            z-index: 2;
            left: 0px;
        }
        .module{
            position: absolute;
            top: 394px;
            z-index: 2;
            left: 0px;
            /* background: yellow; */
            line-height: 30px;
            width: 220px;
            font-size: 12px;
        }
        .module-a{
            line-height: 21px;
            font-size: 11px;
        }
        .cycle-level{
            position: absolute;
            top: 468px;
            z-index: 2;
            left: 40px;
            font-size: 12px;
        }
        .hours{
            position: absolute;
            top: 492px;
            z-index: 2;
            left: 15px;
        }
        .day-1{
            position: absolute;
            top: 703px;
            z-index: 2;
            left: 0px;
        }
        .month-1{
            position: absolute;
            top: 703px;
            z-index: 2;
            left: 60px;
        }
        .year-1{
            position: absolute;
            top: 703px;
            z-index:2;
            left: 160px;
        }
        .name-cetpro-1{
            position: absolute;
            top: 251px;
            z-index: 2;
            left: 300px
        }
        .student-dates{
            position: absolute;
            top: 388px;
            z-index: 2;
            left: 420px
        }
        .module-1{
            position: absolute;
            top: 479px;
            z-index: 2;
            left: 300px
        }
        .cycle-level-1{
            position: absolute;
            top: 523px;
            z-index: 2;
            left: 360px
        }
        .hours-1{
            position: absolute;
            top: 523px;
            z-index: 2;
            left: 740px
        }
        .dates{
            position: absolute;
            top: 570px;
            z-index: 2;
            left: 845px
        }
        .blue{
            color: #2e2ec6;
            font-weight: bold;
            font-family: sans-serif;
        }
        .fz-10-5{
            font-size: 10.5px;
        }
        .fz-10{
            font-size: 10px;
        }
        .fz-12{
            font-size: 12px;
        }
        .fz-20{
            font-size: 20px;
        }
        .page-break {
        page-break-before: always;
        }
        .image-2{
            position: relative;
            top: -10px;
            left: 0px;
            z-index: 1;
        }
        .module-2{
            position: absolute;
            top: 20px;
            z-index: 2;
            left: 130px;
            /* font-size: 14px; */
        }
        .module-2-a{
            font-size: 10.5px;
        }
        .average-final{
            position: absolute;
            top: 19px;
            z-index: 2;
            left: 700px
        }
        .resolution{
            position: absolute;
            top: 67px;
            z-index: 2;
            left: 400px;
            font-size: 13px;
        }
        .date-1{
            position: absolute;
            top: 63px;
            z-index: 2;
            left: 675px
        }
        .cycle-level-2{
            position: absolute;
            top: 105px;
            z-index: 2;
            left: 150px
        }
        .hours-2{
            position: absolute;
            top:154px;
            z-index: 2;
            left: 160px
        }


        .start-date{
            position: absolute;
            top:154px;
            z-index: 2;
            left: 420px;
        }
        .end-date{
            position: absolute;
            top:154px;
            z-index: 2;
            left: 700px;
        }
        .capacities{
            position: absolute;
            top:235px;
            z-index: 2;
            width: 800px;
            height: 400px;
            line-height: 30px;
            left: 35px
        }
        .capacity{
            width: 800px;
        }
        .practice{
            position: absolute;
            top:560px;
            z-index: 2;
            left: 80px;
        }
        .hours-3{
            top:560px;
            position: absolute;
            z-index: 2;
            left: 710px;
        }

        .hours-4{
            top:670px;
            position: absolute;
            z-index: 2;
            left: 710px;
        }
    </style>
</head>
@php
    $fechaInicio= '';
    $fechaFin= '';
    $fechaResolucion= '';

    $fechaInicio=$certificate->start_date_module;
    $fechaFin=$certificate->end_date_module;
    $fechaResolucion=$certificate->date_resolution;

    $date1 = new DateTime($fechaInicio);
    $date2 = new DateTime($fechaFin);
    $date3 = new DateTime($fechaResolucion);

    $fechaInicio  = $date1->format('d/m/Y'); // 18.07.2021
    $fechaFin  = $date2->format('d/m/Y'); // 18.07.2021
    $fechaResolucion  = $date3->format('d/m/Y'); // 18.07.2021

    date_default_timezone_set('America/Lima');
    setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish');
    $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    $logo1 = base64_encode($certificate->logo);
    $logo = base64_decode($logo1);
@endphp
<body >

    <img src="images/certificado-1.jpg">
    <img class="image-1" src="images/sanji.png">
    {{-- <img class="image-1" src="{{$certificate->logo}}"> --}}
    <div class="cetpro-public blue"><P>Público</P></div>
    <div class="name-cetpro  blue"><P>{{$certificate->name_cetpro}}</P></div>

    @if((strlen($certificate->surname_paternal)+ strlen($certificate->surname_maternal))>22)
    <div class="name-student fz-12  blue"><P>{{mb_strtoupper($certificate->surname_paternal)}} {{mb_strtoupper($certificate->surname_maternal)}}</P></div>
    @else
    <div class="name-student blue"><P>{{mb_strtoupper($certificate->surname_paternal)}} {{mb_strtoupper($certificate->surname_maternal)}}</P></div>
    @endif

    @if(strlen($certificate->name)>22)
    <div class="name-student-1 fz-12 blue"><P>{{mb_strtoupper($certificate->name)}}</P></div>
    @else
    <div class="name-student-1 blue"><P>{{mb_strtoupper($certificate->name)}}</P></div>
    @endif

    @if(strlen($certificate->module)>29 && strlen($certificate->module)<51)
    <div class="module  fz-12 blue"><P>{{mb_strtoupper($certificate->module)}}</P></div>
    @elseif(strlen($certificate->module)>50)
    <div class="module module-a blue"><P> {{ mb_strtoupper($certificate->module)  }} </P></div>
    @else
    <div class="module blue"><P> {{$certificate->module}}</P></div>
    @endif

    <div class="cycle-level blue"><P>{{mb_convert_case($certificate->cycle, MB_CASE_TITLE)}}</P></div>
    <div class="hours blue"><P>{{$certificate->hours_module}}</P></div>
    <div class="day-1 blue"><P>{{date('d') }}</P></div>
    <div class="month-1 blue"><P>{{$meses[date('n')-1]}}</P></div>
    <div class="year-1 blue"><P>{{date('Y')}}</P></div>

    <div class="name-cetpro-1 fz-20 blue"><P>{{$certificate->name_cetpro}}</P></div>
    <div class="student-dates fz-20 blue"><P>{{mb_strtoupper($certificate->surname_paternal)}} {{mb_strtoupper($certificate->surname_maternal)}} {{mb_strtoupper($certificate->name)}}</P></div>
    <div class="module-1 blue"><P>{{mb_strtoupper($certificate->module)}} </P></div>
    <div class="cycle-level-1 blue"><P>{{mb_convert_case($certificate->cycle, MB_CASE_TITLE)}}</P></div>
    <div class="hours-1 blue"><P>{{$certificate->hours_module}}</P></div>
    <div class="dates fz-12 blue"><P>{{mb_convert_case(($certificate->name_cetpro), MB_CASE_TITLE)}}, {{( $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y'))}}</P></div>

    <div class="page-break">
        <img src="images/certificado-2.jpg" alt="" class="image-2">
        @if(strlen($certificate->module)>50)
        <div class="module-2  fz-10-5 blue"><P>{{mb_strtoupper($certificate->module)}} </P></div>
        @else
        <div class="module-2  blue"><P>{{mb_strtoupper($certificate->module)}} </P></div>
        @endif
        <div class="average-final blue"><P>{{$certificate->average}}</P></div>
        <div class="resolution blue"><P>{{$certificate->resolution}}</P></div>
        <div class="date-1 blue"><P>{{$fechaResolucion}}</P></div>
        <div class="cycle-level-2 blue"><P>{{mb_convert_case($certificate->cycle, MB_CASE_TITLE)}}</P></div>
        <div class="hours-2 blue"><P>{{$certificate->hours_module}}</P></div>
        <div class="start-date blue"><P>{{$fechaInicio}}</P></div>
        <div class="end-date blue"><P>{{$fechaFin}} </P></div>
        <div class="capacities">
        <div class="capacity blue ">
            @if (($certificate->capacity1)!=null)
            <b>{{$certificate->capacity1}}.</b><br>
            @endif
            @if (($certificate->capacity2)!=null)
            <b>{{$certificate->capacity2}}.</b><br>
            @endif
            @if (($certificate->capacity3)!=null)
            <b>{{$certificate->capacity3}}.</b><br>
            @endif
            @if (($certificate->capacity4)!=null)
            <b>{{$certificate->capacity4}}.</b><br>
            @endif
            @if (($certificate->capacity5)!=null)
            <b>{{$certificate->capacity5}}.</b><br>
            @endif
            @if (($certificate->capacity6)!=null)
            <b>{{$certificate->capacity6}}.</b><br>
            @endif
            @if (($certificate->capacity7)!=null)
            <b>{{$certificate->capacity7}}.</b><br>
            @endif
            @if (($certificate->capacity8)!=null)
            <b>{{$certificate->capacity8}}.</b><br>
            @endif

        </div>

        </div>

        <div class="practice blue"><P>{{$certificate->practice_center}}</P></div>
        <div class="hours-3 blue"><P>{{$certificate->hours_practice}}</P></div>
        <div class="hours-4 blue"><P>{{$certificate->hours_practice}}</P></div>
    </div>

</body>
</html>


