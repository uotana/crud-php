<?php
    $servername = "localhost";
    $username = "id18708855_uotana";
    $password = "*tX6GazKi=lhmEo8";
    $dbname = "id18708855_bdweb";
    $id = $_POST['id'];
    
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
    
    $sql="DELETE from usuario WHERE id='".$id."'";
    
    if ($conn->query($sql)===TRUE) {
        header('Location: home.php?mensagem=Usuário removido com sucesso!');
        die();
    } else {
      echo "<br>Error: ".$sql."<br>" . $conn->error;
    }
    
    $conn->close();

?>