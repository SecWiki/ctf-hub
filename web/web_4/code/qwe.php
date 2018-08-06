<?php
$cookie = @$_COOKIE["door"];
if ($cookie == 1){
    highlight_file("beef.php",false);
    $flag = "flag{Welcome_to_WEB}";
}else{
    echo "error";
}
?>