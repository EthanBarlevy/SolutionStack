<?php // head
    include_once ("Header.php");
    include_once ("Utils.php");
?>
<br />
Demo try/cath
<?php
try {
    $zero = 0;
    if ($zero == 0) {
        throw new Exception("Testing");
    }
} catch (Exception $ex) {
    // fix it lol
    echo "<br /> Catch";
} finally {
    echo "<br /> Finally";
}
?>

<?php
    require ("Footer.php"); // will throw an error if it does not exist
?>