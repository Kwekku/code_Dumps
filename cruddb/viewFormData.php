<?php
    require_once("Include/db.php");
 ?>

<!DOCTYPE html>
<html>
<head>
<title>View Data from Database</title>
<link rel="stylesheet" href="Include/style.css">
</head>

<body>
  <!-- Send the Success messsage to the form -->
  <h3 class=success> <?php echo @$_GET["id"]; ?></h3>

  <!--table that will show data -->
  <table width="1000" border="5" align="center">
    <caption> View From Database</caption>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>SSN</th>
      <th>Department</th>
      <th>Salary</th>
      <th>Home Address</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>
          <!--fetching data from DB -->
        <?php
            global $ConnectingDB;
            $sql = "SELECT * FROM emp_record";
            $stmt = $ConnectingDB->query($sql);
            while($DataRows=$stmt->fetch()){
              $id = $DataRows["id"];
              $EmpName = $DataRows["empname"];
              $SSN = $DataRows["ssn"];
              $Dept = $DataRows["dept"];
              $Salary = $DataRows["salary"];
              $HomeAddress = $DataRows["homeaddress"];

          ?>
        <!-- Echo the data into variables -->
        <tr>
          <td><?php echo $id; ?></td>
          <td><?php echo $EmpName; ?></td>
          <td><?php echo $SSN; ?></td>
          <td><?php echo $Dept; ?></td>
          <td><?php echo $Salary; ?></td>
          <td><?php echo $HomeAddress; ?></td>
          <td><a href="updateData.php?id=<?php echo $id;?>">Update</a></td>
          <td><a href="deleteData.php?id=<?php echo $id;?>">Delete</a></td>
        </tr>

        <!--iterate every single data item enetered into DB -->
        <?php } ?>

      </table>

  <div>

  </div
</body>
</html>
