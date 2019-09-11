<?php
class Tables
{
    //$rs is data returned by querydb()
    function drawHTMLTable($rs, $tableId)
    {
        //create html table
        echo '<table id="' . $tableId . '">';
        $count = count(get_object_vars(($rs[0])));

        //Draw table header in first row
        echo "<tr>"; 
        foreach(($rs[0]) as $key => $value) 
        {
            
            echo "<th>";
            print " $key\n";
            echo "</th>"; 
        }
        echo "</tr>"; 

        //Create a new table row for each record
        for($i = 0; $i < count($rs); $i++)
        {
            echo "<tr>";
            //Create a new column for each field                         
            foreach(($rs[$i]) as $key => $value) 
            {            
                echo "<td>";
                echo $value;
                echo "</td>"; 
            }
            echo "</tr>";   
        }
        echo "</table>";
    }
}
?>