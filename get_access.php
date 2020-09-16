<!-- Passare come parametri GET name, mail ed age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if (empty($name && $mail && $age)) {
    $message = 'Non hai inserito tutti i dati';
} else {
    $checkAll = strlen($name) > 3 && strpos($mail,'@') > -1 && strpos($mail,'.') > -1 && ctype_digit($age);
    if ($checkAll) {
        $message = 'Accesso riuscito';
    } else {
        $message = 'Accesso negato';
    }
}
echo $message;
?>

<!-- Nota: confronta intval, is_numeric, is_int, (int)$var -->