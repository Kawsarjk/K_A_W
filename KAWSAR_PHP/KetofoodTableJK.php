<?php
$i = 0;
while ($i < $num){
    $rs->data_seek($i);
    $row = $rs->fetch_assoc();
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["country"]."</td>";
    echo "<td>".$row["ketofood"]."</td>";
    echo "<td>".$row["price"]."</td>";
    echo "</tr>";
    $i++;
}
?>