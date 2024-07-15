<?php
include_once "header.php";
?>

<?php
$myVar = "food";
?>

<p id="A">stuff</p>
<br />
<p id="B">things</p>
<br />
<p id="jsonData">No Data</p>

<script>

    var request = new XMLHttpRequest();
    
    window.onload = function() {
        //alert("onload worked");
        loadJson();
    }

    // Call the microservice and get the data
    function loadJson() {
        request.open('GET', 'apiJsonQuery.php');
        request.onload = loadComplete;
        request.send();
    }

    // Run when the data has been loaded
    function loadComplete(evt) {
        var myResponse;
        var myData;
        // create a table for display
        var myReturn = "<table><tr><td>First Name &nbsp;  &nbsp; </td><td>Last Name &nbsp;  &nbsp; </td><td>Cell Id &nbsp;  &nbsp; </td><td>Cell Number &nbsp;  &nbsp; </td></tr>";

        myResponse = request.responseText;
        //alert("A: " + myResponse); // Use for debug
        //document.getElementById("A").innerHTML = myResponse; // Display the json for debugging
        myData = JSON.parse(myResponse);

        // Loop through each json record and create the HTML
        for (index in myData) {
            myReturn += "<tr><td>" + myData[index].jFname + "</td><td>" +
                myData[index].jLname + "</td><td>" +
                myData[index].jCell_id + "</td><td>" +
                myData[index].jCellnumber + "</td></tr>";

        }
        myReturn += "</table>";
        document.getElementById("jsonData").innerHTML = myReturn; // Display table
}

</script>

<?php
include_once "footer.php";
?>