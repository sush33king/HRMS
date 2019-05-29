
<?php
 
function celToFah(float $degrees)
{
    return $degrees * 1.8 + 32;
}
 
function fahToCel(float $degrees)
{
    return ($degrees - 32) / 1.8;
}
 
if (isset($_GET['cel'])) {
    $cel = floatval($_GET['cel']);
    $fah = celToFah($cel);
    $fahMsg = "$cel &deg;C = $fah &deg;F";
}
 
if (isset($_GET['fah'])) {
    $fah = floatval($_GET['fah']);
    $cel = fahToCel($fah);
    $celMsg = "$fah &deg;F = $cel &deg;C";
}
 
?>

<?php
function fahrenheit_to_celsius($temp)
{
    $celsius=5/9*($temp-32);
    return $celsius ;
}

function celsius_to_fahrenheit($temp)
{
    $fahrenheit=$temp*9/5+32;
    return $fahrenheit ;
}



?>

<!DOCTYPE html>
<html>
    <head>
        <title>Change Temperature</title>
        <style>
            #myForm {
    border: 1px solid grey;
    padding: 5px;   
    width: 600px;
}

.centered {
    width: 100%;
    text-align: center;
}


        </style>
    </head>
    <body>
    <div id="myForm">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">


            <label for="temperature">Temperature:</label>
            <select id="temperature" name="temperature" class="myDropdown">
                <option value="">Please select a temperature...</option>
                <option value="C">celsius to fahrenheit</option>
                <option value="F">fahrenheit to celsius</option>
            </select>

            <br><br>



            <br><br>

            <?php
            if ($temperature==="C"){

                    echo celsius_to_fahrenheit($_POST[$celsius]);
                }


            if ($teperature==="F"){
                echo fahrenheit_to_celsius($_POST[$temp]);

            }

            ?>

            <label for="temp">Enter your temperature:</label>
            <input type="text" id="temp" name="temp">




            <div class="centered">
                <input type="submit" value="Submit temperature">
            </div>

        </form>
    </div>

    </body>
</html> 