<?php
/**
 * Created by PhpStorm.
 * User: Mohina Tharwani
 * Date: 02-Nov-16
 * Time: 6:14 PM
 */

//print_r($_POST);

require_once("config.php");

// Assigning $_POST values to individual variables for reuse.
$First_Name = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$Address = $_POST['Address'];
$Contact_No = $_POST['Contact_No'];
$Email_Id = $_POST['Email_Id'];
$Book_Name = $_POST['Book_Name'];
$Date_Issued = $_POST['Date_Issued'];
$Return_Date = $_POST['Return_Date'];
$Availability = $_POST['Availability'];


var_dump($_POST);


//Creating a variable to hold the "@return boolean value returned by function createNewUser - is boolean 1 with
//successfull and 0 when there is an error with executing the query .

$newuser = createNewUser($First_Name, $Last_Name, $Address, $Contact_No, $Email_Id, $Book_Name, $Date_Issued, $Return_Date);

//display the result that was returned by the createNewUser function - in this case we usually get a 1 when the
//insert is completed successfully.
//echo $newuser;
?>
