<?php
function start_page($title)
{
    echo ' <!DOCTYPE html><html lang="fr"><head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>' . PHP_EOL . $title . '</title>
    </head>
    <body>' . PHP_EOL;
};
?>

<?php
    start_page('titre');
?>


<?php
//    echo getenv('REMOTE_ADDR');
//    echo getenv('HTTP_HOST');
//    echo getenv('SERVER_SOFTWARE');
//?>

<?php
function form()
{
    echo ' <form method="post" action="data-processing.php" >
        <input type="text" placeholder="Identifiant"/><br/>

        <input id="optSexeH" type="radio" name="sexe" value="H"/>
            <label for="optSexeH"> Homme </label>

        <input id="optSexeF" type="radio" name="sexe" value="F"/>
            <label for="optSexeF"> Femme </label>

        <br/>
        <input type="text" placeholder="e-mail" name="Email"/><br/>
        <input type="password" placeholder="Mot de passe" name="Mdp"/><br/>
        <select id="Choix" name="Pays">
         <option value="France">France</option>
         <option value="Espagne">Espagne</option>
         <option value="Allemagne">Allemagne</option>
        </select>
        <input type="checkbox" value="CG"/>
            <label for="CG">Conditions générales</label><br/>

        <input type="submit" name="action" value="mailer"/>
        <input type="submit" name="action" value="rec"/>

    </form>';

}
?>

<?php
function end_page()
{
    echo '</body>' . PHP_EOL .'</html>';
}
?>
