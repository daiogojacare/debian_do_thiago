<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Website Icon" type="png" href="../fotos/cantinalogo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Debian do Thiago</title>
</head>

<body>
    <div>
        <div>
            <h3><a>Logar</a></h3>
        </div>
        <div>
            <div>
                <form class="form_cadastro" action="testLogin.php" method="POST">
                    <input type="email" class="input" id="user_email" autocomplete="off" placeholder="Email"
                        name="email" required>
                    <div class="password-container">
                        <input type="password" class="input" id="user_senha" autocomplete="off" placeholder="Senha"
                            name="senha" required>
                        <span class="password-toggle" id="password_toggle"
                            onclick="togglePasswordVisibility()">👁</span>
                    </div>
                    <input type="submit" class="button" name="submit" value="Entrar">
                    <div>
                    <p>Não possui uma conta?</p>
                    <p><a href="cadastro.php">Cadastre aqui</a></p>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>