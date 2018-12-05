@include('header')
<body style="background-color:#eaeaea;text-align:center;">
    <div class="container-fluid align-middle" style="margin-top:20vh;">
        <div class="caixa-login">
            <div class="d-flex justify-content-center align-items-center member">
                <h4>Member login</h4>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <form class="form-group formulario" method="POST" action="">
                    @csrf
                    <input class="form-control" id="email" type="email" name="email" required="required" placeholder="Email"/>

                    <input class="form-control" id="senha"type="password" name="senha" required="required" placeholder="Senha"/>

                    <button type="submit" class="btn btn-primary botaologin">Entrar</button>
                </form>
            </div>
            <div class="d-flex justify-content-center align-items-center senha">
                <a href="redefinir">Esqueceu a senha?</a>
            </div>
        </div>
    </div>
</body>