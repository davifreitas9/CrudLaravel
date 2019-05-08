<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Comercial Laravel</title>
        
        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" /> 
        <link href="{{URL::asset('css/lightbox.css')}}" rel="stylesheet" type="text/css" /> 

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>
        <script src="{{URL::asset('js/lightbox.js')}}"></script>
    </head>
    <body> 
              
        
        @if (session('message'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" 
               data-dismiss="alert"
               aria-label="close">&times;</a>
            {{ session('message') }}
        </div>
        @endif
        <div id="line-one">   
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center"> 
                        <h1><b>Imoveis</b></h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Panel</a></li>                  
                            <li class="active">Imoveis</li>
                        </ol>
                        <br>
                        <a href="{{route('imovel.create')}}" 
                           class="btn btn-default btn-sm pull-right">
                            <span class="glyphicon glyphicon-plus"></span> Adicionar</a>
                        <a href="" 
                           class="btn btn-default btn-sm pull-right">
                            <i class="fa fa-book"></i> Relatório</a>
                        <div id="pesquisa" class="pull-right">
                            <form class="form-group" method="post" 
                                  action="#">                                   
                                <input type="text" name="pesquisar" 
                                       class="form-control input-sm pull-left" 
                                       placeholder="Pesquisar por nome..." required> 
                                <button class="btn btn-default btn-sm pull-right" 
                                        id="color"> 
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </form>
                        </div>
                    </div>           
                </div>
                <div class="row">
                    <div class="col-md-12">   
                        <br />
                        <h4 id="center"><b>IMOVEIS CADASTRADOS ({{$total}})</b></h4>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th id="center">Código</th>
                                        <th>Tipo</th>
                                        <th>Pretensão</th>
                                        <th id="center">Titulo</th>
                                        <th>Detalhes</th>                
                                        <th id="center">Quartos</th>                
                                        <th id="center">Valor</th>                
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($imoveis as $imovel)
                                    <tr>
                                        <td id="center">{{$imovel->id}}</td>
                                        <td title="Tipo">{{$imovel->tipo}}</td>
                                        <td title="Pretensão">{{$imovel->pretensao}}</td>
                                        <td title="Quantidade" id="center">{{$imovel->titulo}}</td>
                                        <td title="Titulo" id="center">{{$imovel->detalhes}}</td>
                                        <td title="Quartos" id="center">{{$imovel->quartos}}</td>
                                        <td title="Valor">R$ {{number_format($imovel->valor, 2,',','.')}}</td> 
                                        
                                        <td id="center">
                                            <a href="{{route('imovel.edit', $imovel->id)}}" 
                                               data-toggle="tooltip" 
                                               data-placement="top"
                                               title="Alterar"><i class="fa fa-pencil"></i></a>
                                            &nbsp;<form style="display: inline-block;" method="POST" 
                                                        action="{{route('imovel.destroy', $imovel->id)}}"                                                        
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Excluir" 
                                                        onsubmit="return confirm('Confirma exclusão?')">
                                                {{method_field('DELETE')}}{{ csrf_field() }}                                                
                                                <button type="submit" style="background-color: #fff">
                                                    <a><i class="fa fa-trash-o"></i></a>                                                    
                                                </button></form></td>               
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{URL::asset('img/subir.png')}}" 
                 id="up" 
                 style="display: none;" 
                 alt="Ícone Subir ao Topo" 
                 title="Subir ao topo?">
            </body>
            </html>