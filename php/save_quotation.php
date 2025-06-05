<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cotation_generate";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}else{
    echo "Conexão bem-sucedida!<br>";
}


// Obter os dados do formulário
$descriptions = (array)$_POST['description'];
$maintenance_types = (array)$_POST['maintenance_type'];
$prices = (array)$_POST['price'];

// Preparar a query SQL
$sql = "INSERT INTO quotations (description, maintenance_type, price) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Erro ao preparar statement: " .$conn->error);
}

for ($i = 0;$i < count($descriptions);$i++) {
    $description = $descriptions[$i];
    $maintenance_type = $maintenance_types[$i];
    $price = floatval($prices[$i]);
    $stmt->bind_param("ssd", $description,$maintenance_type, $price);


    if (!$stmt->execute()) 
        die("Erro na execução: " .$stmt->error);
    }

// Fechar conexão
$stmt->close();
$conn->close();

echo "<script>
window.alert('Salvo com Sucesso');
window.location.href = '../index.html';
</script>";


?>