<?php
$rows = 10; // Number of rows in the table
$columns = 10; // Number of columns in the table

echo "<style>
    table {
        border-collapse: collapse;
    }
    td {
        border: 1px solid black;
        padding: 10px;
    }
</style>";

echo "<table>";
for ($i = 1; $i <= $rows; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $columns; $j++) {
        $result = $i / $j;
        echo "<td>$i / $j = $result</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>