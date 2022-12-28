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

            #nav_bar{
                height: 50px;
                background-color: #222222;
                color: rgb(126, 126, 126);
                padding-left: 10px;

            }
            #nav_bar > a:hover{
                color: white;
                text-decoration: none;
            }
    
            .menus{
                font-size: 15px;
                color: rgb(126, 126, 126);
                margin: 2px 5px;
                padding: 12px 5px;
                height: 46px;
                float: right;
                border-radius: 10px;
            }
    
        </style>

    </head>
    <body>


        <div id="nav_bar">
            <a style="font-size: 200%" href="/">CB250</a>

            <a href="/historico" class="menus"> Comprovantes </a>
            <a href="/" class="menus" style="background-color: #585858; color: white"> Inicio </a>
        </div>
      
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
                    <span style="font-size: 50px">R$ {{number_format($historicos->sum('valor'), 2 , ",", ".")}}</span>
                </div>
            </div>

            <div class="panel panel-default m-5 opacity-90 ">
                <div class="panel-heading" style="background-color: red; color: white">
                    <b>RESTANTE A RECEBER</b>
                </div>
                <div class="panel-body" style="color: red">
                    <span style="font-size: 50px">R$ {{number_format(19000 - $historicos->sum('valor'), 2 , ",", ".")}}</span>
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