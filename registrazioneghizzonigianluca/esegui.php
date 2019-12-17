<?php
$option= 1;
switch ($option){
	case 1:
//login e password statico//
$login=$_GET["login"];
$password=$_GET["password"];
$nomeutentegiusto='gianluca';
$passwordgiusta='123';
if ($login!=$nomeutentegiusto)
    echo " il nome utente e' sbagliato";
elseif ($password!=$passwordgiusta)
    echo "la password e' sbagliata";
else 
    echo "benvenuto $login";
break;
 
 case 2:
//login e password preso da session//
session_start();
$login= $_POST["login"];
$password=$_POST["password"];
$_SESSION[$loginn]=[$_POST["login"],password_hash($password ,PASSWORD_DEFAULT)];
if(password_verify($password, $_SESSION[$loginn][1]))
echo '$_SESSION[$loginn]';
?>