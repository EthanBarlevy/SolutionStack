<?php
include_once "MyHeader.php";
?>

    Input a person index (int): &nbsp;
    <input type="text" id="personId" value="1"/>
    <button name="a" onclick="myClickEvent()">Submit</button>
<input type="submit" name="sgs" value="Click me" />
<p id="A"></p>
<p id="jsonData"></p>

<script>
   var request = new XMLHttpRequest();

    $(document).ready(function () {
        // alert("Ready"); // Use for debugging

    });
    // ---------------------------------
    // Click event
    function myClickEvent() {
         // alert("my click"); // Use for debugging
        // alert("data: " + document.getElementById("personId").value); // Use for debugging

        loadJson(document.getElementById("personId").value);
    }
    // ---------------------------------
            // Call the microservice and get the data
    function loadJson(id) {
        // alert("id: " + id); // Use for debugging
        request.open('GET', 'apiSqlQuery.php?personId=' + id);
        request.onload=loadComplete;
        request.send();
    }

    // Run when the data has been loaded
    function loadComplete(evt) {
        var myResponse;
        var myData;
        var myReturn = "<table><tr><td>First Name &nbsp;  &nbsp; </td><td>Last Name &nbsp;  &nbsp; </td><td>Cell Id &nbsp;  &nbsp; </td><td>Cell Number &nbsp;  &nbsp; </td></tr>";

        myResponse = request.responseText;
        //alert("A: " + myResponse); // Use for debugging
        //document.getElementById("A").innerHTML = myResponse; // Display the json for debugging
        myData = JSON.parse(myResponse);

        // alert(myData);

        // Loop through each json record and create the HTML
        for (index in myData) {
            myReturn += "<tr><td>" + myData[index].Fname + "</td><td>" +
                myData[index].Lname + "</td><td>" +
                myData[index].Cell_Id + "</td><td>" +
                myData[index].CellNumber + "</td></tr>";

        }
        myReturn += "</table>";
        document.getElementById("jsonData").innerHTML = myReturn; // Display table
    }


</script>

<?php
include_once "MyFooter.php";
?>