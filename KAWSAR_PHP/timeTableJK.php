<?php
$i = 0;
while ($i < $num){
    $rs->data_seek($i);
    $row = $rs->fetch_assoc();
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["City"]."</td>";
    echo "<td>".$row["Local_PrayerTime"]." "."</td>";
    echo "<td>".$row["Prayer_Name"]." "."</td>";
    echo "</tr>";
    $i++;
}
?>