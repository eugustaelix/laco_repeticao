
    <?php
    // Receber o Valor do Formulário
    $numero = $_POST['numero'];

    // Contador
    $contador = 1;

    while ($contador <= 10) {
        $result = $numero * $contador;
        echo "$numero × $contador = $result <br>";
        $contador++;
    }
    ?>

