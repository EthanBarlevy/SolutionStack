<?php
include_once "header.php";
include_once "utils.php";
?>

<?php
if (session_status() == PHP_SESSION_ACTIVE){
    echo "<br /> we have (a) session(s)";
}
if (!isset($_SESSION['MySession'])){
    $_SESSION['MySession'] = '1';
}

DisplayMySession();

$_SESSION['MySession'] = '2';

DisplayMySession();
?>

<?php
include_once "footer.php";
?>