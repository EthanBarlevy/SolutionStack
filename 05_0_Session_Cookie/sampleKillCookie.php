<?php
include_once "header.php";
?>

<br />
Kill cookie: MyCookie

<?php
if (isset($_COOKIE["MyCookie"])){
    setcookie("MyCookie", "", time() - 10000); // instant expire
}    
?>