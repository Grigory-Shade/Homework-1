<pre>
<?php
echo '<table border="1" style="border-collapse: collapse; margin: 0 auto" >';
for ($i=0; $i<10; $i++) {
    echo "<tr style='text-align: center; width: 30px; height: 30px'>";
    for ($j=0; $j<10; $j++) {
        $result = $i * $j;
        if (($i+1) % 2 == 1 && ($j+1) % 2 == 1) {
             echo "<td style='color: red'>[$result]</td>";
        } elseif (($i+1) % 2 == 0 && ($j+1) % 2 == 0) {
             echo "<td style='color: blue'>($result)</td>";
        } else {
            echo "<td style='color: green'>$result</td>";
        }
    }
    echo "</tr>";
}
echo '</table>';
