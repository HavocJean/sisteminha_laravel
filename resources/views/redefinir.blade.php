@include('header')
<body style="background-color:#eaeaea;"> 
@isset($msg)
    <ul>
        <li>{{ $assunto }}</li>
        <li>{{ $msg }}</li>
        <li><a href="trocarsenha/{{ $token }}">{{ $link }}</a></li><br>
        <li>{{ $cabecalho }}</li>
        
    </ul>
@else
    <div class="container-fluid" style="margin-top:20vh;">
        <div class="container caixa-login">
            <div class="d-flex justify-content-center align-items-center" style="margin-top:30px;margin-bottom:15px;">
                <h4>Enviar Redefinição</h4>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <form class="form-group formulario" method="POST" action="">
                    @csrf
                    <input class="form-control" type="email" name="email" required="required" placeholder="E-mail"/>

                    <input class="form-control" type="email" name="confirmar-email" required="required" placeholder="Confirmar E-mail"/>

                    <input class="form-control btn btn-primary botaologin"  type="submit" name="recuperar" value="Recuperar" />
                </form>
            </div>
        </div>
    </div>
</body>
@endisset
