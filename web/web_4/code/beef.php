<?php
 $a = @$_POST['a'];
 $b = @$_POST['b'];
 setcookie("door",0, time()+3600*24);
 if (!(isset($a)) && !(isset($b))){
     echo "You have no value";
     die();
 }

 if (strlen($a) > 11){
     echo "to long";
     die();
 }

 $hack = @$_GET['hack'];
 $rep = @$_GET['rep'];

 if ((strlen($hack) >=6) || (strlen($rep) >=6 )){
     echo "h OR r No,worng!<br />";
     die();
 }
 $str1 = hash('md5',$a,false);

 $str2 = strstr(hash('md5',$b,false),$hack,$rep);

 echo "str1:".$str1;

 echo '<br />';

 echo "str2:".$str2;

 echo '<br />';

 if (($str1 == $str2) && !($a == $b) ) {
     include('qwe.php');
     echo "flag:".$flag;
 }
?>