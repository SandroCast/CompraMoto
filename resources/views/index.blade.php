<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

        <!-- Styles -->
        <style>
    
    
        </style>

    </head>
    <body>
     
        <nav class="navbar navbar-default m-0">
            <div class="container-fluid">
            
                <!-- Brand/logo -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#example-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a style="font-size: 200%" class="navbar-brand" href="/">Honda CB250</a>
                </div>
                
                <!-- Collapsible Navbar -->
                <div class="collapse navbar-collapse" id="example-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Inicio <span class="sr-only">(current)</span></a></li>
                        <li><a href="/historico">Histórico <span class="sr-only">(current)</span></a></li>
                    </ul>
                </div>
            
            </div>
        </nav>
      
        <div class="contents" style="text-align: center">
            <img style="width: 100%; position: absolute; z-index: -1;" src="\img\cb.jpg" alt="">

            

            <div class="panel panel-default m-5 opacity-90">
                <div class="panel-heading" style="background-color: blue; color: white">
                    <b>VALOR TOTAL DA VENDA</b>
                </div>
                <div class="panel-body" style="color: blue">
                    <span style="font-size: 50px">R$ {{number_format(19000, 2 , ",", ".")}}</span>
                </div>
            </div>

            <div class="panel panel-default m-5 opacity-90">
                <div class="panel-heading" style="background-color: green; color: white">
                    <b>JÁ RECEBIDO</b>
                </div>
                <div class="panel-body" style="color: green">
                    <span style="font-size: 50px">R$ {{number_format($historicos->sum('description'), 2 , ",", ".")}}</span>
                </div>
            </div>

            <div class="panel panel-default m-5 opacity-90 ">
                <div class="panel-heading" style="background-color: red; color: white">
                    <b>RESTANTE A RECEBER</b>
                </div>
                <div class="panel-body" style="color: red">
                    <span style="font-size: 50px">R$ {{number_format(19000 - $historicos->sum('description'), 2 , ",", ".")}}</span>
                </div>
            </div>





        </div>



        <!-- jQuery library -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!-- Initialize Bootstrap functionality -->
        <script>
            // Initialize tooltip component
            $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            })

            // Initialize popover component
            $(function () {
            $('[data-toggle="popover"]').popover()
            })
        </script>



    </body>
</html>