<?php
include_once "header.php";
unset($_SESSION['MySession']); // remove one session variable

// session_unset(); // removes all session variables
// session_destroy(); // destroy the session
?>

Session was killed

<?php
    include_once "footer.php";
?>