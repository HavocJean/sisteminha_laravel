<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Contollers\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;

class PesoController extends Controller {

    public function treinoPeito(Request $r){
        $usuario = $r->session()->get('usuario');
        $id_usuario = $usuario['id_usuario'];

        if($r->isMethod('get')) {
            $db = DB::table('peitos')->JOIN('usuarios', 'peitos.id_usuario', '=', 'usuarios.id_usuario')->WHERE(['peitos.id_usuario'=>$id_usuario])->SELECT('peitos.*')->get();
            
            if(isset($db)){
                return view('peito', [
                    'usuario' => $usuario,
                    'db' => $db
                ]);
            } else {
                return view('adicionarpeito');
            } 
        }
    }


    public function adicionarPeito(Request $r){
        $usuario = $r->session()->get('usuario');
        $id_usuario = $usuario['id_usuario'];

        if($r->isMethod('get')) {
			return view('adicionarpeito',[
                    'usuario' => $usuario,
                    ]);
        }

            if($r->has('confirmar')){
                $id_usuario = $usuario['id_usuario'];
                $supino_reto = $r->input('supino_reto');
                $supino_declinado = $r->input('supino_declinado');
                $supino_inclinado = $r->input('supino_inclinado');
                $peck_deck = $r->input('peck_deck');
                $crucifixo = $r->input('crucifixo');
                $crucifixo_inclinado = $r->input('crucifixo_inclinado');
                $crucifixo_declinado = $r->input('crucifixo_declinado');
                $pullover = $r->input('pullover');
                $flexoes = $r->input('flexoes');
                $press = $r->input('press');
                $press_cabo = $r->input('press_cabo');
                
                $data = array('id_usuario'=>$id_usuario, 'supino_reto'=>$supino_reto, 'supino_declinado'=>$supino_declinado, 'supino_inclinado'=>$supino_inclinado, 'peck_deck'=>$peck_deck, 'crucifixo'=>$crucifixo, 'crucifixo_inclinado'=>$crucifixo_inclinado, 'crucifixo_declinado'=>$crucifixo_declinado, 'pullover'=>$pullover, 'flexoes'=>$flexoes, 'press'=>$press, 'press_cabo'=>$press_cabo);
                DB::table('peitos')->WHERE(['id_usuario'=>$usuario['id_usuario']])->INSERT($data);

                return view('adicionarpeito', [
                    'msg' => 'Treino foi adicionado com sucesso!',
                    'usuario' => $usuario
                ]);
            }
    }


    public function editarPeito(Request $r, $id_peito = 1){
        $usuario = $r->session()->get('usuario');
        $id_usuario = $usuario['id_usuario'];

        //$db = DB::table('peitos')->SELECT('*')->WHERE(['id_peito'=>$id])->first();
        //$db1 = DB::select('SELECT * FROM peitos WHERE id_peito = ?', [$id]);
        $db = DB::table('peitos')->SELECT('*')->WHERE(['id_peito'=> $id_peito])->first();
        

        if($r->isMethod('get')) {
            //$id_peito = DB::table('peitos')->first($id_peito);
			return view('editarpeito',[
                    'usuario' => $usuario,
                    'db'=> $db,
                    'id' => $id_peito
                    ]);
        }

            if($r->has('editar')){
                $id_usuario = $usuario['id_usuario'];
                $id_peito = $r->input('id_peito');
                $supino_reto = $r->input('supino_reto');
                $supino_declinado = $r->input('supino_declinado');
                $supino_inclinado = $r->input('supino_inclinado');
                $peck_deck = $r->input('peck_deck');
                $crucifixo = $r->input('crucifixo');
                $crucifixo_inclinado = $r->input('crucifixo_inclinado');
                $crucifixo_declinado = $r->input('crucifixo_declinado');
                $pullover = $r->input('pullover');
                $flexoes = $r->input('flexoes');
                $press = $r->input('press');
                $press_cabo = $r->input('press_cabo');

                $data = array('id_usuario'=>$id_usuario, 'id_peito'=>$id_peito, 'supino_reto'=>$supino_reto, 'supino_declinado'=>$supino_declinado, 'supino_inclinado'=>$supino_inclinado, 'peck_deck'=>$peck_deck, 'crucifixo'=>$crucifixo, 'crucifixo_inclinado'=>$crucifixo_inclinado, 'crucifixo_declinado'=>$crucifixo_declinado, 'pullover'=>$pullover, 'flexoes'=>$flexoes, 'press'=>$press, 'press_cabo'=>$press_cabo);

                $update = DB::table('peitos')->WHERE(['id_peito'=>$id_peito])->UPDATE($data);

                return view('editarpeito', [
                    'msg' => 'Treino foi editado com sucesso!',
                    'db' => $db,
                    'usuario' => $usuario
                ]);
            }
    }
    





    public function treinoTriceps(Request $r){
        $usuario = $r->session()->get('usuario');
        $id_usuario = $usuario['id_usuario'];

        if($r->isMethod('get')) {
            $db = DB::table('triceps')->JOIN('usuarios', 'triceps.id_usuario', '=', 'usuarios.id_usuario')->WHERE(['triceps.id_usuario'=>$id_usuario])->SELECT('triceps.*')->get();
            
            if(isset($db)){
                return view('triceps', [
                    'usuario' => $usuario,
                    'db' => $db
                ]);
            } else {
                return view('adicionartriceps');
            } 
        }
    }


    public function adicionarTriceps(Request $r){
        $usuario = $r->session()->get('usuario');
        $id_usuario = $usuario['id_usuario'];

        if($r->isMethod('get')) {
			return view('adicionartriceps',[
                    'usuario' => $usuario,
                    ]);
        }

            if($r->has('confirmar')){
                $id_usuario = $usuario['id_usuario'];
                $barra_paralela = $r->input('barra_paralela');
                $supino_fechado = $r->input('supino_fechado');
                $puxada_triceps = $r->input('puxada_triceps');
                $puxada_triceps_supe = $r->input('puxada_triceps_supe');
                $puxada_triceps_corda = $r->input('puxada_triceps_corda');
                $extensao_barra_deitado = $r->input('extensao_barra_deitado');
                $extensao_barra_sentado = $r->input('extensao_barra_sentado');
                $extensao_senta_halter = $r->input('extensao_senta_halter');
                $coice_halter = $r->input('coice_halter');
                $coice_corda = $r->input('coice_corda');
                $mergulho_banco = $r->input('mergulho_banco');
                $triceps_banco = $r->input('triceps_banco');
                $triceps_frances = $r->input('triceps_frances');
                $triceps_maquina = $r->input('triceps_maquina');
                
                $data = array('id_usuario'=>$id_usuario, 'barra_paralela'=>$barra_paralela, 'supino_fechado'=>$supino_fechado, 'puxada_triceps'=>$puxada_triceps, 'puxada_triceps_supe'=>$puxada_triceps_supe, 'puxada_triceps_corda'=>$puxada_triceps_corda, 'extensao_barra_deitado'=>$extensao_barra_deitado, 'extensao_barra_sentado'=>$extensao_barra_sentado, 'extensao_senta_halter'=>$extensao_senta_halter, 'coice_halter'=>$coice_halter, 'coice_corda'=>$coice_corda, 'mergulho_banco'=>$mergulho_banco, 'triceps_banco'=>$triceps_banco, 'triceps_frances'=>$triceps_frances, 'triceps_maquina'=>$triceps_maquina);
                DB::table('triceps')->WHERE(['id_usuario'=>$usuario['id_usuario']])->INSERT($data);

                return view('adicionartriceps', [
                    'msg' => 'Treino foi adicionado com sucesso!',
                    'usuario' => $usuario
                ]);
            }
    }


    public function editarTriceps(Request $r, $id_triceps = 1){
        $usuario = $r->session()->get('usuario');
        $id_usuario = $usuario['id_usuario'];

        $db = DB::table('triceps')->SELECT('*')->WHERE(['id_triceps'=> $id_triceps])->first();
        
        if($r->isMethod('get')) {
			return view('editartriceps',[
                    'usuario' => $usuario,
                    'db'=> $db,
                    'id' => $id_triceps
                    ]);
        }

            if($r->has('editar')){
                $id_usuario = $usuario['id_usuario'];
                $id_triceps = $r->input('id_triceps');
                $barra_paralela = $r->input('barra_paralela');
                $supino_fechado = $r->input('supino_fechado');
                $puxada_triceps = $r->input('puxada_triceps');
                $puxada_triceps_supe = $r->input('puxada_triceps_supe');
                $puxada_triceps_corda = $r->input('puxada_triceps_corda');
                $extensao_barra_deitado = $r->input('extensao_barra_deitado');
                $extensao_barra_sentado = $r->input('extensao_barra_sentado');
                $extensao_senta_halter = $r->input('extensao_senta_halter');
                $coice_halter = $r->input('coice_halter');
                $coice_corda = $r->input('coice_corda');
                $mergulho_banco = $r->input('mergulho_banco');
                $triceps_banco = $r->input('triceps_banco');
                $triceps_frances = $r->input('triceps_frances');
                $triceps_maquina = $r->input('triceps_maquina');

                $data = array('id_usuario'=>$id_usuario, 'id_triceps'=>$id_triceps, 'barra_paralela'=>$barra_paralela, 'supino_fechado'=>$supino_fechado, 'puxada_triceps'=>$puxada_triceps, 'puxada_triceps_supe'=>$puxada_triceps_supe, 'puxada_triceps_corda'=>$puxada_triceps_corda, 'extensao_barra_deitado'=>$extensao_barra_deitado, 'extensao_barra_sentado'=>$extensao_barra_sentado, 'extensao_senta_halter'=>$extensao_senta_halter, 'coice_halter'=>$coice_halter, 'coice_corda'=>$coice_corda, 'mergulho_banco'=>$mergulho_banco, 'triceps_banco'=>$triceps_banco, 'triceps_frances'=>$triceps_frances, 'triceps_maquina'=>$triceps_maquina);

                $update = DB::table('triceps')->WHERE(['id_triceps'=>$id_triceps])->UPDATE($data);

                return view('editartriceps', [
                    'msg' => 'Treino foi editado com sucesso!',
                    'db' => $db,
                    'usuario' => $usuario
                ]);
            }
    }




    public function treinoCostas(Request $r){
        $usuario = $r->session()->get('usuario');
        $id_usuario = $usuario['id_usuario'];

        if($r->isMethod('get')) {
            $db = DB::table('costas')->JOIN('usuarios', 'costas.id_usuario', '=', 'usuarios.id_usuario')->WHERE(['costas.id_usuario'=>$id_usuario])->SELECT('costas.*')->get();
            
            if(isset($db)){
                return view('costas', [
                    'usuario' => $usuario,
                    'db' => $db
                ]);
            } else {
                return view('adicionarcostas');
            } 
        }
    }


    public function adicionarCostas(Request $r){
        $usuario = $r->session()->get('usuario');
        $id_usuario = $usuario['id_usuario'];

        if($r->isMethod('get')) {
			return view('adicionarcostas',[
                    'usuario' => $usuario,
                    ]);
        }

            if($r->has('confirmar')){
                $id_usuario = $usuario['id_usuario'];
                $remada_serrote_uni = $r->input('remada_serrote_uni');
                $remada_cabo = $r->input('remada_cabo');
                $remada_smith = $r->input('remada_smith');
                $remada_banco_incli = $r->input('remada_banco_incli');
                $pull_down = $r->input('pull_down');
                $barra_fixa = $r->input('barra_fixa');
                $puxada_frente = $r->input('puxada_frente');
                $puxada_tras = $r->input('puxada_tras');
                $puxada_triangulo = $r->input('puxada_triangulo');
                $remada_curvada = $r->input('remada_curvada');
                
                $data = array('id_usuario'=>$id_usuario, 'remada_serrote_uni'=>$remada_serrote_uni, 'remada_cabo'=>$remada_cabo, 'remada_smith'=>$remada_smith, 'remada_banco_incli'=>$remada_banco_incli, 'pull_down'=>$pull_down, 'barra_fixa'=>$barra_fixa, 'puxada_frente'=>$puxada_frente, 'puxada_tras'=>$puxada_tras, 'puxada_triangulo'=>$puxada_triangulo, 'remada_curvada'=>$remada_curvada);
                DB::table('costas')->WHERE(['id_usuario'=>$usuario['id_usuario']])->INSERT($data);

                return view('adicionartriceps', [
                    'msg' => 'Treino foi adicionado com sucesso!',
                    'usuario' => $usuario
                ]);
            }
    }


    public function editarCostas(Request $r, $id_costas = 1){
        $usuario = $r->session()->get('usuario');
        $id_usuario = $usuario['id_usuario'];

        $db = DB::table('costas')->SELECT('*')->WHERE(['id_costas'=> $id_costas])->first();
        
        if($r->isMethod('get')) {
			return view('editarcostas',[
                    'usuario' => $usuario,
                    'db'=> $db,
                    'id' => $id_costas
                    ]);
        }

            if($r->has('editar')){
                $id_usuario = $usuario['id_usuario'];
                $id_costas = $r->input('id_costas');
                $remada_serrote_uni = $r->input('remada_serrote_uni');
                $remada_cabo = $r->input('remada_cabo');
                $remada_smith = $r->input('remada_smith');
                $remada_banco_incli = $r->input('remada_banco_incli');
                $pull_down = $r->input('pull_down');
                $barra_fixa = $r->input('barra_fixa');
                $puxada_frente = $r->input('puxada_frente');
                $puxada_tras = $r->input('puxada_tras');
                $puxada_triangulo = $r->input('puxada_triangulo');
                $remada_curvada = $r->input('remada_curvada');

                $data = array('id_usuario'=>$id_usuario, 'id_costas'=>$id_costas, 'remada_serrote_uni'=>$remada_serrote_uni, 'remada_cabo'=>$remada_cabo, 'remada_smith'=>$remada_smith, 'remada_banco_incli'=>$remada_banco_incli, 'pull_down'=>$pull_down, 'barra_fixa'=>$barra_fixa, 'puxada_frente'=>$puxada_frente, 'puxada_tras'=>$puxada_tras, 'puxada_triangulo'=>$puxada_triangulo, 'remada_curvada'=>$remada_curvada);

                $update = DB::table('costas')->WHERE(['id_costas'=>$id_costas])->UPDATE($data);

                return view('editarcostas', [
                    'msg' => 'Treino foi editado com sucesso!',
                    'db' => $db,
                    'usuario' => $usuario
                ]);
            }
    }

    


}