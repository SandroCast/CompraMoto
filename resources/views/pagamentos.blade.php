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
            #titulo{
                margin-top: 20px;
                font-size: 20px;
                color: blue;
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
                        <li><a href="/historico">Histórico <span class="sr-only">(current)</span></a></li>
                        <li><a href="/administrador/AmAtOrY/sandrocastro/novo">Novo Pagamento <span class="sr-only">(current)</span></a></li>
                        <li class="active"><a href="/administrador/AmAtOrY/sandrocastro/pagamentos">Todos Pagamentos <span class="sr-only">(current)</span></a></li>
                    </ul>
                </div>
            
            </div>
        </nav>
        <div class="contents" style="text-align: center">

            <h1 id="titulo">Pagamentos</h1>


            <div class="table-responsive" style="margin-top: 20px;">
                <div class="col-md-12" style="margin-top: 20px;">

                    <table class="table table-bordered table-striped tabela3 dataTable no-footer table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Valor</th>
                                <th>Data</th>
                            </tr>                
                        </thead>

                        <tbody>

                            @if ($pagamentos->count() > 0)

                                @foreach ($pagamentos as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>{{$item->created_at}}</td>    
                                    </tr>
                        
                                @endforeach
    
                            @endif

                        </tbody>
                    </table>
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