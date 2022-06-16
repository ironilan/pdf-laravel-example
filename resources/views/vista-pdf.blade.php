<html>

<head>
    <title>PLAN CURRICULAR DE la carrera profesional de licenciatura en facultad de educacion</title>

    <style>
        /*** */
        @page {
            margin: 0cm 0cm;
        }

        /** Defina ahora los márgenes reales de cada página en el PDF **/
        body {
            margin-top: 4cm;
            margin-left: 1.2cm;
            margin-right: 1.2cm;
            margin-bottom: 1.2cm;
        }

        /** Definir las reglas del encabezado **/
        header {
            position: fixed;
            top: 1.2cm;
            left: 1.2cm;
            right: 1.2cm;
            height: 5cm;
            

        }

        h4, h5, p{
            text-align: justify;
        }

        .mb0{
            margin-bottom: 0;
        }



        /** Definir las reglas del pie de página **/
        /* footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;


        } */

        /**** */

        .app_pagina {
            margin-top: 12rem;
        }

        table {
            font-family: "Times New Roman", Times, serif;
            border-collapse: collapse;
            font-size: 12px;
            width: 100%;
        }

        .table {
            font-size: 11px;
        }

        table th {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
            background-color: #DDD;
            font-weight: bold;
        }

        table th,
        table td {
            border: 1px solid black;
        }

        table td {
            padding: 5px;
        }

        table.no-border th,
        table.no-border td {
            border: none;
        }

        .pagenum:before {
            content: counter(page);
        }

        .page-footer {
            position: fixed;
            left: 0px;
            right: 0px;
            bottom: -10rem;

            border-top: 1px solid #333;
        }

        .page_break {
            padding: 0 16px;
        }

        .page-break-after {
            page-break-after: always;
        }


        .page-break-before {
            page-break-before: always;
        }

        .marginleft {
            margin-left: 18px;
        }

        u {
            display: block;
            margin: 30px 0 20px;
        }

        .tunidad {
            margin: 300px 0;
            font-size: 17px;
        }

        .uppercase {
            text-transform: uppercase;
        }

        .text-center {
            text-align: center;
        }

        .tunidad td {
            vertical-align: top;
        }

        .app_lista p {
            margin-bottom: 0;
        }

        .app_lista {
            padding-left: 30px !important;

        }



        .subtitulo{
            padding-left: 30px;
        }

        /*** base legal ****/
        .app_baseLegal h4 {
            margin-bottom: 0;
        }

        .subtitulo h5{
            font-size: 18px;
        }

        /**** antecedentes ****/
        .app_antecedentes h4 {
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    @include('components._header')
    <div class="">

        <!-- aqui va lo guardado en sublime -->
        <div class="">
            @include('components._portada')
        </div>
        <div class="page-break-before"></div>
        <div class="" >
            @include('components._indice')
        </div>
        <div class="page-break-before"></div>
        <div class="" >
            @include('components._presentacion')
        </div>
        <div class="page-break-before"></div>
        <div class="" >
            @include('components._antecedentes')
            @include('components._baseLegal')
        </div>
        <div class="page-break-before"></div>
        <div class="">            
            @include('components._justificacion')
        </div>
        <div class="page-break-before"></div>
        <div>
            @include('components._lineas')
        </div>

        <div>
            @include('components._estructuraCircular')
        </div>
        <div class="page-break-before"></div>
        <div>
            @include('components._modalidadEstudio')
        </div>
        <div>
            @include('components._monitoreoEvaluacion')
        </div>

        <div class="page-break-before"></div>
        <div>
            @include('components._planFinanciamiento')
        </div>
        
        @include('components._footer')
    </div>
</body>

</html>