<?php
include_once "css.php";
?>

<html>
<head>
    <title>
        Ethan's Website <?php echo "- ". $_SESSION['Page'] ?>
    </title>
</head>
<body>
    
    <?php
    echo "<h1>Ethan's Website - " . $_SESSION['Page'] . "</h1>";
    ?>

<?php
include_once "menu.php";
?>
