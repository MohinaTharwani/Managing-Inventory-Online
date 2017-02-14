<?php
/**
 * Created by PhpStorm.
 * User: Mohina Tharwani
 * Date: 02-Nov-16
 * Time: 6:37 PM
 */
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <title>
Mid Term - Create New Record
</title>
  <!-- Style -- Can also be included as a file usually style.css -->
  <style type="text/css">
    table.table-style-three {
    font-family: verdana, arial, sans-serif;
      font-size: 11px;
      color: #333333;
      border-width: 1px;
      border-color: #3A3A3A;
      border-collapse: collapse;
    }
    table.table-style-three th {
    border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #FFA6A6;
      background-color: #D56A6A;
      color: #ffffff;
    }
    table.table-style-three a {
    color: #ffffff;
    text-decoration: none;
    }

    table.table-style-three tr:hover td {
    cursor: pointer;
}
    table.table-style-three tr:nth-child(even) td{
    background-color: #F7CFCF;
    }
    table.table-style-three td {
    border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #FFA6A6;
      background-color: #ffffff;
    }
</style>

</head>
<body>

  <?php
    //require_once("config.php");

    echo '<form name="createNewRecord" action="createNewRecord_DBINSERT.php" method="post">
  <!-- Table goes in the document BODY -->
  <table class="table-style-three">
      <thead>
      <!-- Display CRUD options in TH format -->
      <tr>
        <th>First_Name</th>
        <td><input type="text" name="First_Name" value=""></td>
      </tr>

      <tr>
        <th>Last_Name</th>
        <td><input type="text" name="Last_Name" value=""></td>
      </tr>

      <tr>
        <th>Address</th>
        <td><input type="text" name="Address" value=""></td>
      </tr>

      <tr>
        <th>Contact_No</th>
        <td><input type="int" name="Contact_No" value=""></td>
      </tr>

      <tr>
        <th>Email_Id</th>
        <td><input type="text" name="Email_Id" value=""></td>
      </tr>

      <tr>
        <th>Book_Name</th>
        <td><input type="text" name="Book_Name" value=""></td>
      </tr>
      
      <tr>
        <th>Date_Issued</th>
        <td><input type="datetime-local" name="Date_Issued" value=""></td>
      </tr>
      
      <tr>
        <th>Return_Date</th>
        <td><input type="date" name="Return_Date" value=""></td>
      </tr>
      
      <tr>
        <th>Availability</th>
        <td><input type="boolean" name="Availability" value=""></td>
      </tr>

      <tr>
        <td><input type="submit" name="submit" value="Submit"></td>
      </tr>
      </thead>
    </table>
  </form>
</body>
</html>';


