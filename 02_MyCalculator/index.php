<?php // head
    include_once ("Header.php");
    include_once ("Utils.php");
?>

<?php // Get button values
    if(array_key_exists('numButton', $_POST))
    {
        echo '<br /> numButton: ' . $_POST['numButton'].'<br />';
    }
?>
<br />
Page Body
<form method="post">
    <input type="hidden" name="firstNum" value="<?php echo $fNum?>" />
    <br/>
    <?php WriteButton("numButton", "1", "1");?>
    <?php WriteButton("numButton", "2", "2");?>
    <?php WriteButton("numButton", "3", "3");?>
</form>
<br />


<?php
    require ("Footer.php"); // will throw an error if it does not exist
?>