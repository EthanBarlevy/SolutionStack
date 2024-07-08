<?php

// validate and display session
function DisplayMySession(){
    if (isset($_SESSION["MySession"])) {
        echo "value = " . $_SESSION["MySession"];
    }

}
?>