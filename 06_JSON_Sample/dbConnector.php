<?php

// Create constants
//DEFINE ('DB_USER', 'MyUser');
//DEFINE ('DB_PSWD', 'talasIV');
DEFINE('DB_USER', 'root');
DEFINE('DB_PSWD', 'admin');
DEFINE('DB_SERVER', 'localhost'); // could be remote database
DEFINE('DB_NAME', 'mytestdb');

// ///////////////////////////////////////////////////
// Get db connection
function ConnGet()
{
    // $dbConn will contain a resource link to the database
    // @ Don't display error
    $dbConn = @mysqli_connect(DB_SERVER, DB_USER, DB_PSWD, DB_NAME, 3306)
        or die('Failed to connect to MySQL ' . DB_SERVER . '::' . DB_NAME . ' : ' . mysqli_connect_error()); // Display messge and end PHP script

    return $dbConn;
}
// ///////////////////////////////////////////////////
// Get one record
function MyJoinWhereGet($dbConn, $id)
{

    $query = "SELECT per.Fname, per.Lname, cel.Cell_Id, cel.CellNumber
   FROM Person per LEFT JOIN Cell cel
   ON per.Cell_Id = cel.Cell_Id where per.id = " . $id . " limit 1;";

    return @mysqli_query($dbConn, $query);
}
// ///////////////////////////////////////////////////
// Get all the records as a json objects
function MyJoinJsonGet($dbConn)
{

    $query = "SELECT JSON_OBJECT(
        'jFname', per.Fname,
        'jLname', per.Lname,
        'jCell_id', cel.Cell_Id,
        'jCellnumber', cel.CellNumber) as Json1
        FROM Person per LEFT JOIN Cell cel
        ON per.Cell_Id = cel.Cell_id;";

    return @mysqli_query($dbConn, $query);
}
?>