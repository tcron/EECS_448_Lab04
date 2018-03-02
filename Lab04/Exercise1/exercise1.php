<?php

$cols = 11;
$rows = 11;


echo "<table border=\"1\">";

        for ($r =1; $r < $rows; $r++){

            echo'<tr>';

            for ($c = 1; $c < $cols; $c++)
                echo '<td>' .$c*$r.'</td>';
           echo '</tr>'; // close tr tag here

        }

  echo"</table>";

?>