<pre>
<?php
echo '<table border="1" style="border-collapse: collapse; margin: 0 auto" >';
for ($i=1; $i<11; $i++) {
    echo "<tr style='text-align: center; width: 30px; height: 30px'>";
    for ($j=1; $j<11; $j++) {
        $result = $i * $j;
        if ($i % 2 == 1 && $j % 2 == 1) {
             echo "<td style='color: red'>[$result]</td>";
        } elseif ($i % 2 == 0 && $j % 2 == 0) {
             echo "<td style='color: blue'>($result)</td>";
        } else {
            echo "<td style='color: green'>$result</td>";
        }
    }
    echo "</tr>";
}
echo '</table>';
