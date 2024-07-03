<?php
    header("Content-Type: text/css; charset:UTF-8;") // this is html stuff
?>

<?php
$myColor = "";   

// get color from database, cookie, session var

// set default 
if (strlen($myColor) < 1){
    $myColor = "peach";
}

?>

.test-class {
    width: 100px;
    height: 100px;
    background-color: <?php echo $myColor ?>
}