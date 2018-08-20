<pre>
<?php
const ALL = 80;
echo 'Всего нарисовано ' .ALL. ' рисунков,' .PHP_EOL;
const MARKER = 23;
echo 'из них '.MARKER. ' нарисовано фломастерами,' .PHP_EOL;
const PENCIL = 40;
echo PENCIL. ' карандашами, а остальные красками.'.PHP_EOL. 'Сколько рисунков выполнено красками?'.PHP_EOL;
const PAINT = ALL - MARKER - PENCIL;
echo 'ОТВЕТ: ' .PAINT. ' рисунков.';
