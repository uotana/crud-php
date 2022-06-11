<?php
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $_SESSION["estaLogado"] = false;
    $_SESSION["email"] = $email;
    
    $servername = "localhost";
    $username = "id18708855_uotana";
    $password = "*tX6GazKi=lhmEo8";
    $dbname = "id18708855_bdweb";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql="SELECT id, nome, email, senha FROM usuario";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($row["email"]==$email && $row["senha"]==sha1($senha)) {
                $_SESSION["estaLogado"] = true;
                $_SESSION["nome"] = $row["nome"];
            }
        }
    } else {
      echo "0 results";
    }
    
    if($_SESSION["estaLogado"]){
        header('Location: home.php');
        exit;
    }else{
        header('Location: login.php?mensagem=Dados inválidos.');
        exit;
    }
    $conn->close();
?>
