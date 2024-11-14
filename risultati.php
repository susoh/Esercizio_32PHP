<?php
session_start();

$numero_invii = $_SESSION['numero_invii'] ?? 0;
$ultimadata = $_SESSION['ultimadata'] ?? 'Nessuna recensione';
$voti = $_SESSION['voti'] ?? [];

$media = 0;
if ($numero_invii > 0) {
    $media = array_sum($voti) / $numero_invii;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati Recensioni</title>
</head>
<body>
    <h1>Risultati Recensioni</h1>
    
    <h2>Statistiche</h2>
    <table>
        <tr>
            <th style="border= 1 px solid black">Numero di invii</th>
            <th style="border= 1 px solid black">Ultima data inviata</th>
        </tr>
        <tr>
            <td style="border= 1 px solid black"><?php echo $numero_invii; ?></td>
            <td style="border= 1 px solid black"><?php echo $ultimadata; ?></td>
        </tr>
    </table>

    <h2>Voti delle recensioni</h2>
    <ul>
        <?php foreach ($voti as $voto): ?>
            <li><?php echo $voto; ?></li>
    </ul>

    <h3>Media recensioni: <?php echo number_format($media, 2); ?></h3>

    <p><a href="presentazione.html">Torna alla pagina di presentazione</a></p>
</body>
</html>
