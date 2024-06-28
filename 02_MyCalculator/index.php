<?php // head
    include_once ("Header.php");
    include_once ("Utils.php");
?>

<?php // define global variables
    $fNum = "";
    $op = "";
    $sNum = "";
    $equation = "";
    $final = "";
    $hiddenFNum = "";
    $hiddenOp = "";
    $hiddenSNum = "";
?>

<?php // Get button values
    if(array_key_exists('numButton', $_POST)) // post is better because its more secure
    {
        if ($op != "")
        {
            $sNum = $_POST['numButton'];
        }
        else
        {
            $fNum = $_POST['numButton'];
        }
    }
    if (array_key_exists('opButton', $_POST)) // post is better because its more secure
    {
        $op = $_POST['opButton'];
    }

    if (array_key_exists('eqButton', $_POST))
    {
        if ($sNum != "")
        {
            switch($op)
            {
                case "+":
                    $final = $fNum + $sNum;
                    break;
                case "-":
                    $final = $fNum - $sNum;
                    break;
                case "*":
                    $final = $fNum * $sNum;
                    break;
                case "//":
                    $final = $fNum / $sNum;
                    break;
                default:
                    $final = "Unknown Operator";
                    break;
            }
        }
    }
    if (array_key_exists("firstNum", $_POST)) {
        $hiddenFNum = $POST['firstNum'];
    }
    if (array_key_exists("opVal", $_POST)) {
        $hiddenOp = $POST['opVal'];
    }
    if (array_key_exists("secondNum", $_POST)) {
        $hiddenSNum = $POST['secondNum'];
    }
    $equation = $hiddenFNum . $hiddenOp . $hiddenSNum . "$nbsp" . "=" . $final;
?>
<br />
Page Body
<br />
<?php 
    echo $equation;
?>
<br />
<form method="post">
    <input type="hidden" name="firstNum" value="<?php echo $fNum ?>" />
    <input type="hidden" name="opVal" value="<?php echo $op ?>" />
    <input type="hidden" name="secondNum" value="<?php echo $sNum ?>" />
    <br/>
    <?php WriteButton("numButton", "1", "1");?>
    <?php WriteButton("numButton", "2", "2");?>
    <?php WriteButton("numButton", "3", "3");?>
    <?php WriteButton("opButton", "+", "+");?>
    <?php WriteButton("opButton", "-", "-");?>
    <?php WriteButton("opButton", "*", "*");?>
    <?php WriteButton("opButton", "//", "//");?>
    <?php WriteButton("eqButton", "=", "=");?>
</form>
<br />


<?php
    require ("Footer.php"); // will throw an error if it does not exist
?>