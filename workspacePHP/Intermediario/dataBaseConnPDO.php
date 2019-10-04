<?php

    // Instancia a classe mysqli passando os dados de conexão
    $db = new mysqli('localhost', 'root', '', 'php-intermediario');

    // Define qual é a codificação de caracteres utilizada pela base de dados
    $db->set_charset('utf8');

    // Verifica se houve algum erro durante a conexão
    if($db->connect_errno > 0) {
        die('Não foi possível realizar a conexão [' . $db->connect_error . ']');
    }

    // Realiza a primeira consulta ao banco de dados
    $sql = 'SELECT id, nome, email FROM funcionario';

    if( ! $resultado = $db->query($sql)) {
        die('Erro ao executar a query [' . $db->error . ']');
    }

?>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>E-mail</td>
    </tr>
    <?php while($campo = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?=$campo['id'];?></td>
            <td><?=$campo['nome'];?></td>
            <td><?=$campo['email'];?></td>
        </tr>
    <?php endwhile ?>
</table>

<?php

$sql = 'CALL match_animal(?, ?)';
$stmt = $conn->prepare($sql);

$second_name = "Rickety Ride";
$weight = 0;

$stmt->bindParam(1, $second_name, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 32);
$stmt->bindParam(2, $weight, PDO::PARAM_INT, 10);

print "Values of bound parameters _before_ CALL:\n";
print "  1: {$second_name} 2: {$weight}\n";

$stmt->execute();

print "Values of bound parameters _after_ CALL:\n";
print "  1: {$second_name} 2: {$weight}\n";
?>