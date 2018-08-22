<?php 
highlight_file(__FILE__); 
ini_set("display_error", false);  
error_reporting(0);  
$str = isset($_GET['A_A'])?$_GET['A_A']:'A_A'; 
if (strpos($_SERVER['QUERY_STRING'], "A_A") !==false) { 
    echo 'A_A,have fun'; 
} 
elseif ($str<9999999999) { 
    echo 'A_A,too small'."<br>"; 
} 
elseif ((string)$str>0) { 
    echo 'A_A,too big'."<br>"; 
} 
else{ 
    echo file_get_contents('flag.php');    
} 
 ?>