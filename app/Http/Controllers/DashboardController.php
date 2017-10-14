<?php namespace mreventos_api\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller{
    public function lista(){
        
        $dashboard = array();                
        $dashboard['corridas_finalizadas'] = number_format(DB::table('corridas')->where('status',35)->count('uid'),0,",",".");         
        $dashboard['passageiros'] = number_format(DB::table('passageiros')->count('uid'),0,",",".");
        $dashboard['motoristas'] = number_format(DB::table('motoristas')->count('uid'),0,",",".");
        $dashboard['valor_medio_corrida'] = number_format(DB::table('corridas')->where('status',35)->avg('valor_realizado'),2,",",".");
        $dashboard['distancia_media_percorrida'] = number_format(DB::table('corridas')->where('status',35)->avg('distancia_realizada'),2,",",".");
        $dashboard['distancia_media_percorrida'] = number_format(DB::table('corridas')->where('status',35)->avg('distancia_realizada'),2,",",".");
        $dashboard['motoristas_top'] = DB::select(DB::raw('select mot.uid, mot.nome, dmot.cidade, (select count(*) from corridas where uid_motorista = mot.uid and status=35) as corridas
                                                    from motoristas mot, dados_motorista dmot
                                                    where mot.uid = dmot.uid
                                                    group by mot.uid, mot.nome, dmot.cidade
                                                    order by corridas desc
                                                    limit 5'));       
       
        return view('dashboard/dashboard')->with('dash',$dashboard);
    }
/*   
            
    -- Cidades number_format(DB::table('corridas')->where('status',35)->avg('distancia_realizada'),2,",",".");com menos de 10 corridas
    -- 10 Cidades com mais corridas
    -- 10 Cidades com menos corridas
    
    -- 10 motoristas que mais fazerm corridas
    -- 10 passageiros que mais fazem corridas
    -- Principais motivos de cancelamento
    
    -- Corridas realizadas hoje
    select count(uid) from corridas where status = 35 and created_at::date = now()::date
    -- Corridas realziadas no mês
    select count(uid) from corridas 
    where status = 35 
    and extract('year' from created_at) = extract('year' from now())
    and extract('month' from created_at) = extract('month' from now())

*/

}