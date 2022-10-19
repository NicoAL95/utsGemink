<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap Core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="/css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="/css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Styles -->

    </head>
        
        <body>

            @yield('content')
    
            <!-- jQuery -->
            <script src="../js/jquery.min.js"></script>
    
            <!-- Bootstrap Core JavaScript -->
            <script src="../js/bootstrap.min.js"></script>
    
            <!-- Metis Menu Plugin JavaScript -->
            <script src="../js/metisMenu.min.js"></script>
    
            <!-- Morris Charts JavaScript -->
            <script src="../js/raphael.min.js"></script>
            <script src="../js/morris.min.js"></script>
            <script src="../js/morris-data.js"></script>
    
            <!-- Custom Theme JavaScript -->
            <script src="../js/startmin.js"></script>
    
        </body>
</html>
