<?php // head
    include_once ("Header.php");
    include_once ("Utils.php");
?>

<?php // define global variables
    $fNum = isset($_POST['firstNum']) ? $_POST['firstNum'] : "";
    $op = isset($_POST['opVal']) ? $_POST['opVal'] : "";
    $sNum = isset($_POST['secondNum']) ? $_POST['secondNum'] : "";
    $equation = "";
    $final = "";
?>

<?php // Get button values
    if(array_key_exists('numButton', $_POST)) // post is better because its more secure
    {
        if ($op != "") // is the operator defined for ths equation
        {
            $sNum = $sNum . $_POST['numButton'];
        }
        else // if it is not, then its the first number
        {
            $fNum = $fNum . $_POST['numButton'];
        }
    }
    if (array_key_exists('opButton', $_POST)) // set the operator (this way only allows for single operation equations)
    {
        $op = $_POST['opButton'];
    }
    if (array_key_exists('eqButton', $_POST)) // do the math
    {
        if ($sNum != "")
        {
            switch($op)
            {
                case "+":
                    $final = intval($fNum) + intval($sNum);
                    break;
                case "-":
                    $final = intval($fNum) - intval($sNum);
                    break;
                case "*":
                    $final = intval($fNum) * intval($sNum);
                    break;
                case "/":
                    $final = intval($fNum) / intval($sNum);
                    break;
                default:
                    $final = "Unknown Operator";
                    break;
            }
        }
    }
    if (array_key_exists('clear', $_POST)) // remove all of the numbers
    {
        $fNum = "";
        $op = "";
        $sNum = "";
        $final = "";
    }
?>
<br />
Calculator app
<br />

<form method="post">
    <input type="hidden" name="firstNum" value="<?php echo $fNum ?>" />
    <input type="hidden" name="opVal" value="<?php echo $op ?>" />
    <input type="hidden" name="secondNum" value="<?php echo $sNum ?>" />
    <?php
    $equation = $fNum . " " . $op . " " . $sNum . " " . "=" . " " . $final;
    echo $equation;
    ?>
<br />
    <br/>
    <table>
        <tr>
            <th><?php WriteButton("numButton", "1", "1"); ?></th>
            <th><?php WriteButton("numButton", "2", "2"); ?></th>
            <th><?php WriteButton("numButton", "3", "3"); ?></th>
        </tr>
        <tr>
            <th><?php WriteButton("numButton", "4", "4"); ?></th>
            <th><?php WriteButton("numButton", "5", "5"); ?></th>
            <th><?php WriteButton("numButton", "6", "6"); ?></th>
        </tr>
        <tr>
            <th><?php WriteButton("numButton", "7", "7"); ?></th>
            <th><?php WriteButton("numButton", "8", "8"); ?></th>
            <th><?php WriteButton("numButton", "9", "9"); ?></th>
        </tr>
    </table>
    <?php WriteButton("opButton", "+", "+");?>
    <?php WriteButton("opButton", "-", "-");?>
    <?php WriteButton("opButton", "*", "*");?>
    <?php WriteButton("opButton", "/", "/");?>
    <?php WriteButton("eqButton", "=", "=");?>
    <?php WriteButton("clear", "clear", "clear");?>
</form>
<br />


<?php
    require ("Footer.php"); // will throw an error if it does not exist
?>