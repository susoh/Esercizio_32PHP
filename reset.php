<?php
session_start();

// Distruggi tutte le variabili di sessione
session_unset();

// Distruggi la sessione
session_destroy();

// Redirect alla pagina di presentazione
header('Location: presentazione.html');
exit();
?>
