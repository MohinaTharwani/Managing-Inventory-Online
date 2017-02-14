<?php
/**
 * Created by PhpStorm.
 * User: Mohina Tharwani
 * Date: 02-Nov-16
 * Time: 7:04 PM
 */

//Retrieve information for all users

function fetchAllUsers() {
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
    "SELECT
		First_Name,
		Last_Name,
		Address,
		Contact_No,
		Email_Id,
		Book_Name,
		Date_Issued,
		Return_Date,
		Availability

		FROM " . $db_table_prefix . "system"
  );
  $stmt->execute();
  $stmt->bind_result(
    $First_Name,
    $Last_Name,
    $Address,
    $Contact_No,
    $Email_Id,
    $Book_Name,
    $Date_Issued,
    $Return_Date,
    $Availability
  );

  while ($stmt->fetch()) {
    $row [] = array(
      'First_Name'              => $First_Name,
      'Last_Name'               => $Last_Name,
      'Address'                 => $Address,
      'Contact_No'              => $Contact_No,
      'Email_Id'                => $Email_Id,
      'Book_Name'               => $Book_Name,
      'Date_Issued'             => $Date_Issued,
      'Return_Date'             => $Return_Date,
      'Availability'            => $Availability
    );
  }
  $stmt->close();
  return ($row);
}




//Create a new user

/**
 * @param $First_Name
 * @param $Last_Name
 * @param $Address
 * @param $Contact_No
 * @param $Email_Id
 * @param $Book_Name
 * @param $Date_Issued
 * @param $Return_Date
 * @return bool
 *
 */
function createNewUser($First_Name, $Last_Name, $Address, $Contact_No, $Email_Id, $Book_Name, $Date_Issued, $Return_Date)
{
    global $mysqli;
           $stmt = $mysqli->prepare(
                "INSERT INTO system (
		First_Name,
		Last_Name,
		Address,
		Contact_No,
		Email_Id,
		Book_Name,
		Date_Issued,
		Return_Date,
		Availability
		)
		VALUES (
		?,
		?,
		?,
		?,
		?,
		?,
        ?,
        ?,
        1
		)"
            );
            $stmt->bind_param("ssssssss", $First_Name, $Last_Name, $Address, $Contact_No, $Email_Id, $Book_Name, $Date_Issued, $Return_Date);
            $result = $stmt->execute();
            $stmt->close();
            echo "<br>The above User has been successfully added to the Database<br/>";
            return $result;
        }



