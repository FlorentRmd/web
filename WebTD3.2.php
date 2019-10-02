
<?php
include 'date.txt';
$rub1 = 'Rubrique 1';
$rub1addr = 'page1.hmtl';


// echo '<a href="'.$rub1addr.'">'.$rub1.'</a>';

//$html = "<a href=\"{$rub1addr}\">{$rub1}</a>";


?>

<a href="<?php echo $rub1addr; ?>"><?php echo $rub1; ?></a>

