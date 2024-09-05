<?php
$i = 0;
while ($i < $num){
    $rs->data_seek($i);
    $row = $rs->fetch_assoc();
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["City"]."</td>";
    echo "<td>".$row["Temperature"]." °C"."</td>";
    echo "</tr>";
    $i++;
}
?>