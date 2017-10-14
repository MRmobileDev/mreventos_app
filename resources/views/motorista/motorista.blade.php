@extends('layouts.principal')
@section('titulo') 
    <a class="navbar-brand" href="#">Motoristas</a>
@stop
@section('conteudo')

<div class="row">    


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">O que você deseja fazer?</h4>
                                    <p class="category">Selecione uma opção abaixo</p>
                                </div>
                                <div class="card-content">
                                    <h5><b>Manutenção de cadastros</b></h5>
                                    <ul>
                                        <li>Visualizar todos os motoristas</li>
                                    </ul>
                                    <h5><b>Relatórios</b></h5>
                                    <ul>                                        
                                        <li>Listar os motoristas que nunca fizeram uma corrida</li>
                                        <li>Listar os motoristas que não fazem uma corrida a mais de uma semana</li>
                                        <li>Listar os motoristas que se cadastraram neste mês</li>
                                        <li>Listar os motoristas que mais fazem corridas</li>
                                        <li>Listar a quantidade de motoristas por cidade</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

</div>
@stop