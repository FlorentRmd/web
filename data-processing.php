

<?php

$action = $_POST['action'];
$email = $_POST['Email'];
$password = $_POST['Mdp'];

$message = 'Voici vos identifiants d\'inscription :' .PHP_EOL;
$message .='Email : ' .$email . PHP_EOL;
$message .= 'Mot de passe : ' . PHP_EOL . $password;
?>

<?php
    if ($action =='mailer')
    {
        echo $message;
    }
    else
    {
        echo '<br/><strong>Bouton non géré !</strong><br/>';
    }
    ?>

