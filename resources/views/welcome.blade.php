<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome Bootstrap</title>
        <!--Import bootstrap-->
        {!! Html::style('assets/css/bootstrap.min.css') !!}
        <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class=".container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
        <!-- Scripts -->
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        <!--Import jQuery before bootstrap.js-->
        {!! Html::script('assets/js/jquery-2.1.1.min.js') !!}
    </body>
</html>
