<?php
function start_page($title)
{
    echo ' <!DOCTYPE html><html
    lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL;

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
    echo ' <form method="post" >
        <input type="text" name="Identifiant"/>    
        <input type="radio"/>
        <input type="text" name="e-mail"/>
        <input type="password"/>
        <input type="password"/>
        <select>
         <option value="France">France</option>
         <option value="Espagne">Espagne</option>
         <option value="Allemagne">Allemagne</option>
         
         </select>
        <input type="checkbox"/>
        <input type="submit" />
    </form>';

}
?>

<?php
function end_page()
{
    echo '</body>' . PHP_EOL .'</html>';
}
?>
