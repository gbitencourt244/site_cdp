<?php
$servername = "localhost";
$database = "site_cdp";
$username = "root";
$password = "";
# Cria a conexão
$conn = mysqli_connect($servername, $username, $password, $database);
# Verifica a conexão
if (!$conn) {
    die("A conexão falhou: " . mysqli_connect_error());
}
echo "Conectado com sucesso!!";
mysqli_close($conn);
?>