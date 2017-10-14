<?php namespace mreventos_api\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MotoristaController extends Controller{

    public function dashboard(){
        return view('motorista/motorista');
    }
    /*
    Exibir um pequeno Dash
        - Total de motoristas cadastrados
        - Total de motoritas cadastrados esse mês
        - Total de motoristas cadastrados nessa semana

    O que você deseja fazer?

    Visualizar todos os motoristas
        
    Listar os motoristas que nunca fizeram uma corrida
    Listar os motoristas que não fazem uma corrida a mais de uma semana
    Listar os motoristas que se cadastraram neste mês
    Listar os motoristas que mais fazem corridas
    Listar a quantidade de motoristas por cidade


    Visualizar um relatório
*/

}