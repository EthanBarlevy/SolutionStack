<?php
session_start();
?>

<html>
<head>
    <title>
        Ethan's Website <?php isset($_SESSION['Page']) ? "- ". $_SESSION['Page'] : ""?>
    </title>
</head>
<body>
