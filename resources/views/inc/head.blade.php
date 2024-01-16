<head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material-kit/assets/img/logo/LOGO2.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('material-kit/assets/img/logo/LOGO211.png') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'OSMS') }}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link href="{{ asset('material-kit/assets/css/material-kit.css?v=2.0.4') }}" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{ asset('material-kit/assets//demo/demo.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/material-Icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet">
        {{-- <link href="{{ asset('css/datatable/jquery.dataTables.min') }}" rel="stylesheet"> --}}
        <link href="{{ asset('css/select.dataTables.min.css') }}" rel="stylesheet">
        <style>
                DIV.table 
                {
                    display:table;
                }
                FORM.tr, DIV.tr
                {
                    display:table-row;
                }
                SPAN.td
                {
                    display:table-cell;
                }
                </style>
    </head>