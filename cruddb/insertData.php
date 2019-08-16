<?php
    require_once("Include/db.php");
    if(isset($_POST["Submit"])){
      if(!empty($_POST["EmpName"])&&!empty($_POST["SSN"]))
      {
        $EmpName = $_POST["EmpName"];
        $SSN = $_POST["SSN"];
        $Dept = $_POST["Dept"];
        $Salary = $_POST["Salary"];
        $HomeAddress = $_POST["HomeAddress"];
        $ConnectingDB;

        //Prevent Sql Injection
        $sql ="INSERT INTO emp_record(empname,ssn,dept,salary,homeaddress)
        VALUES(:empnamE,:ssN,:depT,:salarY,:homeaddresS)";

        //Bind the real Values
        $stmt = $ConnectingDB->prepare($sql);
        $stmt->bindValue(':empnamE',$EmpName);
        $stmt->bindValue(':ssN',$SSN);
        $stmt->bindValue(':depT',$Dept);
        $stmt->bindValue(':salarY',$Salary);
        $stmt->bindValue(':homeaddresS',$HomeAddress);

        //Execute the data into Database..
        $Execute = $stmt->execute();
        if($Execute)
        {
          echo '<span class=fieldInfoMsg> Record Has been  Added Successfully</span>';
        }
      }
      else{
        echo '<span class=fieldInfoMsg> Name And Social Security Number is required</span>';
      }

    }


 ?>

<!DOCTYPE html>
<html>
<head>
<title>Insert Data</title>
<link rel="stylesheet" href="Include/style.css"
</head>
<body>
<?php ?>
<div>
<form class="" action="insertData.php" method="post">
<fieldset>
  <span class=FieldInfo>Employee Name:</span><br>
  <input type="text" name="EmpName" value=""><br><br>

  <span class=FieldInfo>Social Security:</span><br>
  <input type="text" name="SSN" value=""><br><br>

  <span class=FieldInfo>Department:</span><br>
  <input type="text" name="Dept" value=""><br><br>

  <span class=FieldInfo>Salary:</span><br>
  <input type="text" name="Salary" value=""><br><br><br>

  <span class=FieldInfo>Home Address:</span><br>
  <textarea name="HomeAddress" rows="5" cols="30"></textarea><br><br>
  <input type="submit" name="Submit" value="Submit Your Data"><br>


</fieldset>


</form>

</div>


</body>
</html>
