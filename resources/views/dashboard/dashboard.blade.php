@extends('layouts.principal')
@section('titulo') 
    <a class="navbar-brand" href="#">Dashboard</a>
@stop
@section('conteudo')

<div class="row">    
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="green">
                <i class="material-icons">directions_car</i>
            </div>
            <div class="card-content"
                <p class="category">Corridas</p>
                <h3 class="title">{{$dash['corridas_finalizadas']}}</h3>                
            </div>
            <div class="card-footer">
                <div class="stats">
                   <i class="material-icons">date_range</i> Finalizadas até hoje
                </div>
             </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="blue">
                <i class="material-icons">person_pin</i>
            </div>
            <div class="card-content"
                <p class="category">Passageiros</p>
                <h3 class="title">{{$dash['passageiros']}}</h3>                
            </div>
            <div class="card-footer">
                <div class="stats">
                   <i class="material-icons">date_range</i> Até hoje
                </div>
             </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="red">
                <i class="material-icons">people</i>
            </div>
            <div class="card-content"
                <p class="category">Motoristas</p>
                <h3 class="title">{{$dash['motoristas']}}</h3>                
            </div>
            <div class="card-footer">
                <div class="stats">
                   <i class="material-icons">date_range</i> Até hoje
                </div>
             </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="orange">
                <i class="material-icons">attach_money</i>
            </div>
            <div class="card-content"
                <p class="category">R$ médio</p>
                <h3 class="title">{{$dash['valor_medio_corrida']}}</h3>                
            </div>
            <div class="card-footer">
                <div class="stats">
                   <i class="material-icons">date_range</i> Valor das corridas até hoje
                </div>
             </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="yellow">
                <i class="material-icons">cached</i>
            </div>
            <div class="card-content"
                <p class="category">KM média</p>
                <h3 class="title">{{$dash['distancia_media_percorrida']}}</h3>                
            </div>
            <div class="card-footer">
                <div class="stats">
                   <i class="material-icons">date_range</i> Distância até hoje
                </div>
             </div>
        </div>
    </div>
</div>                    
<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="orange">
                <h4 class="title">Motoristas TOP 5</h4>
                <p class="category">Que mais fizeram corridas</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead class="text-warning">
                        <th>Nome</th>
                        <th>Cidade</th>
                        <th>Corridas</th>                        
                    </thead>
                    <tbody>
                        @foreach($dash['motoristas_top'] as $p)
                        <tr>
                            <td>{{$p->nome}}</td>
                            <td>{{$p->cidade}}</td>
                            <td>{{$p->corridas}}</td>                            
                        </tr>
                        @endforeach                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop