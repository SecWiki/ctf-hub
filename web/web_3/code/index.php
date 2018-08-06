<?php
$str = addslashes($_GET['option']);
$file = file_get_contents('option.php');
$file = preg_replace('|\$option=\'.*\';|', "\$option='$str';", $file);
file_put_contents('option.php', $file);
highlight_file(__FILE__);
?>
