<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

if (!isset($_SESSION['numero_invii'])) {
    $_SESSION['numero_invii'] = 0;
    $_SESSION['voti'] = [];
    $_SESSION['ultimadata'] = '';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST['data'];
    $voto = $_POST['voto'];

    $_SESSION['numero_invii']++;

    $_SESSION['voti'][] = $voto;

    $_SESSION['ultimadata'] = $data;
}

header('Location: presentazione.html');
exit();
?>

</body>
</html>