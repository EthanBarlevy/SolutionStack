<?php
    function WriteButton($name, $value, $text) // send over a button with a name, value, and text
    {
        echo "<button name='$name' value='$value'>$text</button>";
    }
?>