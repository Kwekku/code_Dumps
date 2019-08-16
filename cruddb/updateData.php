<?php
    require_once("Include/db.php");
    $SearchQueryParameter = $_GET["id"];
    if(isset($_POST["Submit"])){

        $EmpName = $_POST["EmpName"];
        $SSN = $_POST["SSN"];
        $Dept = $_POST["Dept"];
        $Salary = $_POST["Salary"];
        $HomeAddress = $_POST["HomeAddress"];
        $ConnectingDB;

        //Use Sql to set the column name to varibales
        $sql = "UPDATE emp_record SET empname='$EmpName', ssn='$SSN', dept='$Dept', salary='$Salary',
        homeaddress='$HomeAddress' WHERE id='$SearchQueryParameter'";

        //Use Query Method to Update the records
        $Execute=$ConnectingDB->query($sql);

        //Execute the data into Database..
        if($Execute)
        {
          //Use JavaScript to open the form
          echo '<script>window.open("viewFormData.php?id=Record Updated Successfully","_self")</script>';
        }
      }

 ?>

<!DOCTYPE html>
<html>
<head>
<title>Update Data</title>
<link rel="stylesheet" href="Include/style.css"
</head>
<body>

  <!--Update the form using the ID from the Database -->
<?php
  global $ConnectingDB;
  $sql = "SELECT * FROM emp_record WHERE id='$SearchQueryParameter'";
  $stmt=$ConnectingDB->query($sql);
  while ($DataRows = $stmt->fetch()){
    $id = $DataRows["id"];
    $EmpName = $DataRows["empname"];
    $SSN = $DataRows["ssn"];
    $Dept = $DataRows["dept"];
    $Salary = $DataRows["salary"];
    $HomeAddress = $DataRows["homeaddress"];
  }

?>

<div>
    <form class="" action="updateData.php?id=<?php echo $SearchQueryParameter;?>" method="post">
        <fieldset>
          <span class=FieldInfo>Employee Name:</span><br>
          <input type="text" name="EmpName" value="<?php echo $EmpName; ?>"><br><br>

          <span class=FieldInfo>Social Security:</span><br>
          <input type="text" name="SSN" value="<?php echo $SSN; ?>"><br><br>

          <span class=FieldInfo>Department:</span><br>
          <input type="text" name="Dept" value="<?php echo $Dept; ?>"><br><br>

          <span class=FieldInfo>Salary:</span><br>
          <input type="text" name="Salary" value="<?php echo $Salary; ?>"><br><br><br>

          <span class=FieldInfo>Home Address:</span><br>
          <textarea name="HomeAddress" rows="5" cols="30"><?php echo $HomeAddress; ?></textarea><br><br>
          <input type="submit" name="Submit" value="Submit Your Data"><br>

        </fieldset>
      </form>

</div>


</body>
</html>
