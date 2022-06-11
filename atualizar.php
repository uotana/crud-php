<?php
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = sha1($_POST["senha"]);
    $id = $_POST['id'];
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
    
    if($_POST['opcao']=='cancelar'){
        header('Location: home.php?');
        die();
    }
    
    if(strlen($_POST["senha"])>0){
        $sql = "UPDATE usuario SET nome='".$nome."', sobrenome='".$sobrenome."', email = '".$email."', senha = '".$senha."' WHERE id = ". $id;    
    }else{
        $sql = "UPDATE usuario SET nome='".$nome."', sobrenome='".$sobrenome."', email = '".$email."' WHERE id = ". $id;    
    }   
    
            
    if ($conn->query($sql) === TRUE) {
        header('Location: home.php?mensagem=Usuário atualizado com sucesso!');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>