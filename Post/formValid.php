<?php
//Declaring the variables
$NameError="";
$EmailError="";
$GenderError="";
$WebsiteError="";

    if(isset($_POST['Submit']))
    {
        //validating fileds
        if(empty($_POST["txName"]))
        {
            $NameError="Name is Required";
        }
        else
        {
           $Name=Test_User_Input($_POST["txName"]);
           if(!preg_match("/^[A-Za-z. ]*$/",$Name))
           {
            $NameError="Only Letters and White  spaces Allowed";
           }
        }


        if(empty($_POST["txEmail"]))
        {
            $EmailError="Email is Required";
        }
        else
        {
           $Email=Test_User_Input($_POST["txEmail"]);
           if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2}/",$Email))
           {
            $EmailError="Kindly Enter a Valid Email Address";
           }
        }


        if(empty($_POST["rdGender"]))
        {
            $GenderError="Gender is Required";
        }
        else
        {
           $Gender=Test_User_Input($_POST["rdGender"]);
        }

        if(empty($_POST["txWebsite"]))
        {
            $WebsiteError="Website is Required";
        }
        else
        {
           $Website=Test_User_Input($_POST["txWebsite"]);
           if(!preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~'!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~'!]*/",$Website))
           {
            $WebsiteError="Enter a Valid Website Address";
           }
        }
           //showing the details of Submitted Data
           if(!empty($_POST["txName"])&&!empty($_POST["txEmail"])&&!empty($_POST["rdGender"])&&!empty($_POST["txWebsite"]))
                if((preg_match("/^[A-Za-z. ]*$/",$Name)==true)&&(preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2}/",$Email)&&(!preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~'!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~'!]*/",$Website))))
                {
                    {
                     echo "<h2> The Following Are The Details Submitted</h2><br>";
                     echo "Name: ".ucwords ($_POST["txName"])." <br>";
                     echo "Email: {$_POST["txEmail"]}<br>";
                     echo "Gender: {$_POST["rdGender"]}<br>";
                     echo "Website: {$_POST["txWebsite"]}<br>";
                     echo "Comment: {$_POST["txComment"]}<br>";
                    }
                }
                else
                {echo "<span class='error'>Kindly Check Your Input and Try Again</span>";}

                
    }



    //This is Global function whic will be used by all fileds
    function Test_User_Input($Data)
    {
        return $Data;
    }

?>

<!DOCTYPE>
<html>

    <head>
         <title> FORM VALIDATON </title>
    </head>
    <style type="text/css">
    input[type="text"],input[type="email"],textarea
    {
        border: solid_dashed;
        background-color:rgb(221,216,212);
        width:300px;
        height:;
        padding:;
        font-size:1.0em;
    }
    .error
    {
      color:red;
    }

    </style>

    <body>

        <?php ?>
        <form action="formValid.php" method="post">
        <fieldset>
            <legend> KINDLY FILL OUT THE FORM</legend>

                Name:<br>
                <input class="input" type="text" name="txName" value=""><span class="error">*<?php echo $NameError;?></span><br>
                Email:<br>
                <input class="input" type="text" name="txEmail" value=""><span class="error">*<?php echo $EmailError;?></span><br>
                Gender:<br>
                <input class="radio" type="radio" name="rdGender" value="Male">Male<span class="error">*</span><?php echo $GenderError;?>
                <input class="radio" type="radio" name="rdGender" value="Female">Female<span class="error">*</span><?php echo $GenderError;?></span><br>
                Website:<br>
                <input class="input" type="text" name="txWebsite" value=""><span class="error">*<?php echo $WebsiteError;?></span><br>
                Comment:</span><br>
                <textarea name="txComment" rows="5" cols="25" ></textarea>
                <br><br>
                <input type="submit" name="Submit" value="Submit Your Details">

        </fieldset>


        </form>


    </body>

</html>
