<?php
/**
 * 
 */
class Pagination
{
    
    function drawPagination($rs, $pageSize, $pageNo=1, $divCSSClass="", $activePageClass="", $eventType = "click")
    {
        $totalRecords = count($rs);
        $totalPages = ceil($totalRecords / $pageSize);  
        
        echo '<div class="' . $divCSSClass . '">';
        echo ' <a id="pgPrev" href="#">&laquo;</a>';
        echo '<script>document.getElementById("pgPrev").addEventListener("' . $eventType . '", pgClick)</script>';

        for($i = 1; $i <= $totalPages; $i++)
        {
            if($i == $pageNo)
            {
                echo '<a id="pg' . $i . '" href="#" class="' . $activePageClass . '">' . $i .'</a>';
            }
            else
            {
                echo '<a id="pg' . $i . '" href="#">' . $i .'</a>';
            }
            
            echo '<script>document.getElementById("pg' . $i . '").addEventListener("' . $eventType . '", pgClick)</script>';
        }

        echo '<a id="pgNext" href="#">&raquo;</a>';
        echo '<script>document.getElementById("pgNext").addEventListener("' . $eventType . '", pgClick)</script>';
        echo '</div>';
    }    
}

?>