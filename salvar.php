<?php
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = sha1($_POST["senha"]);
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
    
    if(strlen($_POST["senha"])>0 && strlen($_POST["nome"])>0 && strlen($_POST["sobrenome"])>0 && strlen($_POST["email"])>0){
       $sql = "INSERT INTO usuario (nome, sobrenome, email, senha) VALUES ('".$nome."', '".$sobrenome."', '".$email."', '".$senha."')";
            
        if ($conn->query($sql) === TRUE) {
            header('Location: index.php?mensagem=Usuário cadastrado com sucesso!');
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close(); 
    } else{
        header('Location: cadastro.php?mensagem=Todos os campos são obrigatórios.');
        exit;
    }
    
?>