<!-- Passare come parametri GET name, mail ed age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if (empty($name && $mail && $age)) {
    $message = 'Non hai inserito tutti i dati';
} else {
    $checkAll = strlen($name) > 3 && strpos($mail,'@') > -1 && strpos($mail,'.') > -1 && ctype_digit($age);
    $checkAll ? $message = 'Accesso riuscito' : $message = 'Accesso negato';
}
echo $message;
?>

<!-- Confronta: intval, is_numeric, is_int, (int)$var.
Nota: is_nan verifica solo che l'espressione non sia un particolare valore di tipo float denominato NaN, il quale non può essere rappresentato/interpretato come numero reale. Non fornisce info sul tipo di dato. Ecco perché restituisce false con una stringa o anche con true/false booleani -->