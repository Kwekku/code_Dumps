
<html>

<body>
<?php

$color = "red";
$shirt = "longsleeve with cufflinks";
$combination = $color." ".$shirt;
echo "$combination <br>";
?>
<?php

$firstname ="Rowland";
$lastname="Jones";
$combinationn = $firstname;
$combinationn.=$lastname;
$combinationn2 = $firstname." ".$lastname;
//echo "Fullname is : $combinationn <br>";
echo "Fullname is : $combinationn2 <br>";
?> <hr>

uppercase first: <?php echo ucfirst($combinationn2); ?> <br>
uppercase first: <?php echo ucwords($combinationn2); ?> <br>
uppercase first: <?php echo strtolower($combinationn2); ?> <br>
uppercase first: <?php echo strtoupper($combinationn2); ?> <br>

</body>

</html>