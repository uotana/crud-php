<!DOCTYPE html>
<html>
    <head>
        <title>Login de usuário</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/css/components/header.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="/css/components/footer.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="/css/components/title.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="/css/components/button.css" media="screen" />

        <link rel="stylesheet" type="text/css" href="/css/reset.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="/css/index.css" media="screen" />
        
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Montserrat:wght@500&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="container">
        <header>
            <div>
                <a href="index.php" class="logo">BDW</a>
            </div>
            <hr>
        </header>
        
        <main>
                <div id="login">
                    <div class="title">
                        <h1>Login</h1>
                    </div>
                    <div class="subtitle">
                        <p>Insira os dados para efetuar login.</p>    
                    </div>
                    <div class="big-form">
                        <form  action="validar_usuario.php" method="post">
                            <div>
                                <label for="email">Email  (Obrigatório)</label><br>
                                <input type="text" id="email" name="email" autofocus required>
                            </div>
                            <div>
                                <label for="senha">Senha  (Obrigatório)</label><br>
                                <input type="password" id="senha" name="senha" required>
                            </div>
                            <?php
                                if(isset($_GET["mensagem"])){
                                    echo "<div class=\"mensagem\">".$_GET["mensagem"]."</div>";
                                }
                            ?>
                        <button name="button" type="submit">Log In</button>
                    </form>
                    </div>
                    <hr>
                    <div class="footer-form">
                        <p>Ainda não possui uma conta? <a href="cadastro.php">Criar conta</a></p>
                    </div>
                </div>
        </main>
        
            <footer>
                <hr>
                <div>
                    <div class="social-media">
                        <a href="mailto:uotanacarvalho@gmail.com">Email</a>
                        <a href="https://www.linkedin.com/in/uotana/">LinkedIn</a>
                        <a href="https://github.com/uotana">Github</a>
                    </div>
                    <div>
                        <p>© 2022 Uotana Carvalho</p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>