<?php
$dbLink = mysqli_connect(dbhost, dblogin, dbPass)
or die ('Erreur de connexion au serveur : '. mysqli_connect_error());
?>

<?php
mysqli_select_db($dbLink, dbBd)
or die ('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
?>


<?php
$query = 'SELECT id, email, date FROM user';
?>

<?php
if(!$dbResult = mysqli_query($dbLink, $query))
{
    echo 'Erreur de renquête<br/>';
    echo 'Erreur : ' .  mysqli_error($dbLink) . '<br/>';
    echo 'Requête : ' .$query . '<br/>';
    exit();
}
?>