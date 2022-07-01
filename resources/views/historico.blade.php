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

        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

        <!-- Styles -->
        <style>
            body{
                background-color: rgb(243, 243, 243);
            }

            .ico{
                margin: 10px;
                height: 30px;
                border-bottom: 1px solid #999;
                
            }
    
    
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
                        <li><a href="/">Inicio <span class="sr-only">(current)</span></a></li>
                        <li class="active"><a href="/historico">Histórico <span class="sr-only">(current)</span></a></li>
                    </ul>
                </div>
            
            </div>
        </nav>
      
        <div class="contents" style="text-align: center;">

            @if ($files->count() > 0)
                @foreach ($files as $item)

                    <div class="ico">
                        <div style="display: inline;font-size: 20px; float: left; color: green;">
                            <ion-icon name="checkmark-circle-outline"></ion-icon>

                        </div>
                        <div style="margin-left:5px; display: inline;font-size: 20px; float: left;">
                            Pagameno recebido

                        </div>
                        <div style="display: inline;font-size: 15px; float: right; margin-top: 5px;">
                            {{ date('d/m/Y', strtotime($item->created_at)) }}
                        </div>
            
                    </div>

                    <div style="color: green; font-weight: bold; font-size: 30px;">
                        R$ {{number_format($item->description, 2 , ",", ".")}}
                    </div>

                    <div style="margin: 20px 20px 100px 20px">
                        <img style="width: 100%" src="{{ $item->file_url }}" alt="">
                    </div>

                @endforeach
            @endif




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