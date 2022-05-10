<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link rel="stylesheet" href="{{ asset("css/back-app.css") }}">
    <link rel="stylesheet" href="{{ asset("css/dashboard.css") }}">
</head>
<body class="bg-back">
    <div id="app">

        @include("back.partials.navbar")

        <div id="main">
            <div class="page-heading mb-5">
            </div>
            <div class="page-content  cont">
                @yield("content")
        
                    
        
                     
               
            </div>

            

        </div>
    </div>
    <script src="{{ asset("js/pages/dashboard.js") }}"></script>
    <script src="{{ asset("js/main.js") }}"></script>
</body>
</html>