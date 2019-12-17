<?php
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
 
?>