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
    echo getenv('REMOTE_ADDR');
    echo getenv('HTTP_HOST');
    echo getenv('SERVER_SOFTWARE');
?>


<?php
function end_page()
{
    echo '</body>' . PHP_EOL .'</html>';
}
?>
