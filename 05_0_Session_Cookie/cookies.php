<?php
include_once "header.php";
?>

<br />
do cookie things i guess

<?php
$cookie = "";
if (!isset($_COOKIE["MyCookie"])) {
    $cookie = "3";
    setcookie("MyCookie", $cookie, time() + 3600); // number in seconds - you will probably need more because this does server time but the connected pc checks their time
}
else{
    $cookie = $_COOKIE["MyCookie"] . "4";
    setcookie("MyCookie", $cookie, time() + 3600);
}

echo "<br /> <br />" . $cookie
?>

<?php
include_once "footer.php";
?>