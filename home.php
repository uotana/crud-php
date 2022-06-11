<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Banco de dados para Web</title>        
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
                    
                        echo "<div id=\"home\">";
                        
                            $servername = "localhost";
                            $username = "id18708855_uotana";
                            $password = "*tX6GazKi=lhmEo8";
                            $dbname = "id18708855_bdweb";
                        
                            if($_SESSION["estaLogado"]== true){
                                
                                echo "<div class=\"bemvindo\">";
                                
                                if(isset($_GET["mensagem"])){
                                    echo "<div class=\"mensagem\">" . $_GET["mensagem"]."</br></div>";
                                }
                                
                                echo "<p>Seja bem vindo, ".$_SESSION["nome"]."</p>";
                                echo "<form action='/logout.php'>
                                        <button class=\"logout-button\" type='submit'>Log Out</button>
                                      </form></div>";
                            
                                
                            
                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                
                                // Check connection
                                if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                                }
                            
                                $sql="SELECT id, nome, sobrenome, email FROM usuario";
                                $result = $conn->query($sql);
                                
                                // echo "<div id=\"home\">";
                                echo "<div class=\"title\"><h1>Lista de usuários</h1></div>";
                                
                                if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                                    echo "<div class=\"usuario\">
                                            <div>
                                                <div>id: " . $row["id"]. "<br>
                                                    Nome: " . $row["nome"]. "<br>
                                                    Sobrenome: " . $row["sobrenome"]. "<br>
                                                    Email: " . $row["email"]. " 
                                                </div>
                                                <div>
                                                    <a href='editar.php?id=".$row["id"]."'>
                                                        <img src=\"/images/edit_icon.png\"/ style='height:25px;' alt='Editar'> 
                                                    </a> 
                                                    <a href='confirmarDelete.php?id=".$row["id"]."'><img src=\"/images/delete_icon.png\"/ style='height:25px;' alt='Excluir'> 
                                                    </a>
                                                </div>
                                            </div>
                                            <hr>
                                            </div>";
                                  }
                                } else {
                                  echo "0 results";
                                }
                                $conn->close();
                        }else{
                            echo "Usuário não logado.";
                        }
                    ?>
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