<html>
<head>
    <title> IF Statements </title>
</head>
<body>
<?php
$weather = "Slippery";
if ($weather =="Sunny"){
    
    echo "Wetaher is Sunny <br>";
}
elseif($weather == "Rainy"){
    echo "Weather is rainy <br>";
}
elseif($weather =="Cloudy"){
    echo "Cloudy weather";
}else{
    echo "Its hard to determine weather";
}
?> <hr>

<?php
$soled_product =false;
if($soled_product){
    echo "<h1>Thank You!</h1>";
    echo"<p>Your Product will be dispatched";
}
else{
    echo "<h1>Please Wait</h1>";
    echo "<p>Your Payment is being Processed</p>";
}

?>

</body>

</html>