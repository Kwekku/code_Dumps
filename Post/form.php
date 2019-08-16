
<?php
if(isset($_POST["Submit"]))
{
    $username=$_POST["txtUsername"];
    $password=$_POST["txtPassword"];
    if($username=="kay" && $password="ethan")
    {
        echo "<h2>Welcome:{$_POST["txtUsername"]}<h2>";
    }
    else
    {
        echo "<h2>Account Does not Exist! |Try Aagain</h2>";
    }
}
else{ echo "<h2>Login Required!</h2>";
}

?>

<html>
    
    <head>
         <title>  </title>
    </head>
    <body>
        
        <?php ?>
        <fieldset>
            <legend> HTML 5</legend>
            <form action="form.php" method="post">
                <label for="Username">Username:</label>
                <input id="Username" type="text" name="txtUsername"><br><br>
                <label for="Password">Password:</label>
                &nbsp;<input id="Password" type="Password" name="txtPassword"><br><br>
                <input type="Submit" name="Submit" value="Submitted">
                
                                            
            </form>
            
        </fieldset>  
        
    </body>
    
</html>