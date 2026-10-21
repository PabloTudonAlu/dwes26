<table border 1px>
<?php 
$a = $_GET["numero"];
echo "<thead>";
    echo "<th>a</th>";
    echo "<th>*</th>";
    echo "<th>b</th>";
    echo "<th>=</th>";
    echo "<th>a*b</th>";
echo "</thead>";
echo "<tbody>";
for ($i=1; $i <= 10; $i++) { 
    echo "<tr>";
        echo "<td>$a</td>";
        echo "<td>*</td>";
        echo "<td>$i</td>";
        echo "<td>=</td>";
        echo "<td>" . $a * $i . "</td>";
    echo "</tr>";
}
echo "</tbody>";

?>
</table>