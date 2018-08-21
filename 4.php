<pre>
<?php
$day = rand(0, 10);
echo 'Порядковый номер дня недели: ' .$day .PHP_EOL;
switch ($day) {
    case $day >= 1 && $day <=5:
        echo 'Это рабочий день';
        break;
    case $day == 6 || $day == 7:
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
}
