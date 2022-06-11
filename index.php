<!DOCTYPE html>
<html>
    <head>
        <title>Banco de dados para Web</title>
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
                    <?php
                        if(isset($_GET["mensagem"])){
                            echo "<div id=\"msg-logout\"><div class=\"mensagem\">".$_GET["mensagem"]."</div></div>";
                        }
                    ?>
                <div id="index">
                    <div class="title">
                        <h1>Banco de Dados<br>para Web</h1>
                    </div>
                   <div class="subtitle">
                       <p>Sistema desenvolvido para componente curricular Banco de dados para Web do Bacharelado em Ciências e Tecnologia da UFRN, semestre 2022.1.</p>
                   </div>
                    <div class="buttons">
                        <div>
                            <form method="get" action="/login.php">
                                <button type="submit">Log In</button>
                            </form>
                        </div>
                        <div>
                            <form method="get" action="/cadastro.php">
                            <button type="submit">Sign Up</button>
                        </form> 
                        </div>
                        
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