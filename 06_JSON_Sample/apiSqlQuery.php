

<?php
include_once "dbConnector.php";

header('Content-Type: application/json');

$myJSON = "";
$row = null;
$myGet = "";

// Process if there is a parameter (id)
if (array_key_exists("personId", $_GET) == TRUE) {
    // Get the db connection
    // Get the data
    $myDbConn = ConnGet();
    $myGet = $_GET["personId"];
    // Get the records
    $dataSet = MyJoinWhereGet($myDbConn, $myGet);

    // If the data exists, format the values
    if ($dataSet) {
        // $myJSON = "[";
        if ($row = mysqli_fetch_array($dataSet)) {
            $myJSON = '[{"Fname":"' . $row['Fname'] . '","Lname":"' . $row['Lname'] . '","Cell_Id":"' . $row['Cell_Id'] . '","CellNumber":"' . $row['CellNumber'] . '"}]';
        }
    }
    mysqli_close($myDbConn);
}

echo $myJSON;

?>


