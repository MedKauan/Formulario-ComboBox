
<!-- Configura a conexão para o banco de dados -->

<?php
    $servidor = "localhost";
    $dbname = "estudo";
    $dbusuario = "root";
    $dbsenha = "";

    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

    if (!$conn){
        die("Conexão falhou: " . mysqli_connect_error());
    }
?>