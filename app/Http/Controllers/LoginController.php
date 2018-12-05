<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Contollers\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller {
    
    public function login(Request $r){

        if($r->isMethod('get')) {
            return view('login');
        }
        $email = $r->input('email');
        $senha = $r->input('senha');

        if(null !== ($email) && !empty($senha)) {
            $checklogin = DB::table('usuarios')->WHERE(['email'=>$email, 'senha'=>md5($senha)])->first();
            
            if(isset($checklogin)){
                DB::table('usuarios')->SELECT('*')->WHERE(['email'=>$email])->UPDATE(['ip'=>request()->ip()]);
                
                //pegando id e colocando na session
                $usuario = $r->session()->put('usuario', [
                    'id_usuario'=>$checklogin->id_usuario,
                    'nome'=>$checklogin->nome
                ]);
                $usuario = $r->session()->get('usuario');

                return view('home', [
                    'usuario' => $usuario
                ]);
            }
        }
    }


    public function logado(Request $r){
        $usuario = $r->session()->get('usuario');

        if(!empty($usuario)){
            return view('home', [
                'usuario' => $usuario
            ]);
        } else {
            return view('login');
        }
    }


    public function deslogar(Request $r){
        $r->session()->flush();
        
        if(empty($usuario)){
            return view('login');
        }
    }


    public function redefinirSenha(Request $r){
        $email = $r->input('email');

        if(!empty($email)) {
            $db = DB::table('usuarios')->SELECT('*')->WHERE(['email'=>$email])->first();

            $id_usuario = $db->id_usuario;

            if(isset($db)){
                $token = md5(time().rand(0, 99999).rand(0, 99999));
                $tempo = Carbon::now()->addWeeks(1);
                $used = 0;

                $data = array('id_usuario'=>$id_usuario, 'hash'=>$token, 'used'=>$used, 'expira_em'=>$tempo);
                DB::table('usuarios_token')->INSERT($data);

                // $db = DB::table('usuarios_token')->INSERT(['id_usuario'=>$id_usuario, 'hash'=>$token, 'used'=>0, 'expira_em'=>Carbon::now(), strtotime('+1 months')]);
                //$db = DB::insert('INSERT INTO usuarios_token (id_usuario, hash, used, expira_em) VALUES (?)', [$id_usuario], [$token], [$used], [$tempo]);

                $link = "http://localhost/sisteminha_laravel/public/trocarsenha/".$token;
            
                $msg = "Clique no link para redefinir sua senha! ";
                $assunto = "Redefinição de senha";
                $cabecalho = "From: email@teste.com.br"."\r\n".'X-Mailer: PHP/'.phpversion();

                // mail($email, $assunto, $msg, $cabeçalho);
                return view('redefinir', [
                    'msg' => $msg,
                    'link' => $link,
                    'assunto' => $assunto,
                    'cabecalho' => $cabecalho,
                    'token' => $token
                    ]);
            }
        } else {
            return view('redefinir');
        }
    }


    public function trocarSenha(Request $r, $token){

        if($r->isMethod('get')) {
            if(!empty($token)){
                $mytime = Carbon::now();
                $checktoken = DB::table('usuarios_token')->SELECT('*')->WHERE(['hash'=>$token], ['expira_em','<=',$mytime])->first();
                
                if(isset($checktoken)){
                    $id_usuario = $checktoken->id_usuario;
                    $senha = $r->input('senha');
                
                return view('trocarsenha');
                }
            }
        }

        if($r->isMethod('post')){
            $trocasenha = DB::table('usuarios')->WHERE(['id_usuario'=>$id_usuario])->UPDATE(['senha'=>md5($senha)]);
            $tokenusado = DB::table('usuarios_token')->WHERE(['hash'=>$token])->UPDATE(['used'=>1]);

            return view('/');
        }
    }
    /*
    
    public function redefinir($token){
        $token = $_GET['token'];

        if(!empty($_GET['token'])) {        
        $sql = "SELECT * from usuarios_token WHERE hash = :hash AND used = 0 AND expira_em > NOW()";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":hash", $token);
        $sql->execute();

            if($sql->rowCount() > 0) {
                $sql = $sql->fetch();
                $id_usuario = $sql['id_usuario'];

                if(!empty($_POST['senha'])) {
                    $senha = $_POST['senha'];

                    $sql = "UPDATE usuarios SET senha = :senha WHERE id_usuario = :id_usuario";
                    $sql = $this->pdo->prepare($sql);
                    $sql->bindValue(":senha", md5($senha));
                    $sql->bindValue(":id_usuario", $id_usuario);
                    $sql->execute();

                    $sql = "UPDATE usuarios_token SET used = 1 WHERE hash = :hash";
                    $sql = $this->pdo->prepare($sql);
                    $sql->bindValue(":hash", $token);
                    $sql->execute();

                    header("Location: index.php");
                    exit;
                }
            }
        }
    } */
}