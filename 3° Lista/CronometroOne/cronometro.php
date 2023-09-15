<?php


date_default_timezone_set("America/Sao_paulo");

if (isset($_POST['submit'])) {

    $dateAtual = new DateTime($_POST['date'] . $_POST['time']);
    $dateFuturo = new DateTime($_POST['dateFinal'] . $_POST['timeFinal']);
    $intervalo = $dateAtual->diff($dateFuturo);
    $format = $intervalo->format('%d dias  %H horas %i minutos');
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div>
    <?php print_r($format);?>
    <a href="index.php">Retornar para calcular um novo intervalo</a>
</div>

</body>

</html>