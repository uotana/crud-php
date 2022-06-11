<!DOCTYPE html>
<html>
    <head>
        <title>Criar nova conta</title>
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
            <div id="signup">
                <div class="title">
                    <h1>Crie uma conta</h1>
                </div>
                <div class="subtitle">
                    <p>Insira os dados para criar uma nova conta.</p>
                </div>
                <div class="big-form">
                    <form action="/salvar.php" method="post">
                        <div>
                           <label for="nome">Nome (Obrigatório)</label>
                            <input type="text" id="nome" name="nome" autofocus required>
                        </div>
                        <div>
                           <label for="nome">Sobrenome (Obrigatório)</label>
                            <input type="text" id="sobrenome" name="sobrenome" required>
                        </div>
                        <div>
                            <label for="email">Email (Obrigatório)</label>
                            <input type="text" id="email" name="email" required>
                        </div>
                        <div>
                            <label for="senha">Senha (Obrigatório)</label>
                            <input type="password" id="senha" name="senha" required>
                        </div>
                        <?php
                            if(isset($_GET["mensagem"])){
                                echo "<div class=\"mensagem\">".$_GET["mensagem"]."</div>";
                            }
                        ?>
                        <button name="button" type="submit">Criar conta</button>
                    </form>
                </div>
                <hr>
                <div class="footer-form">
                    <p>Já possui uma conta? <a href="login.php">Log In</a></p>
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