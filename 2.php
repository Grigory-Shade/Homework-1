<pre>
<?php
const all = 80;
echo 'Всего нарисовано ' .all. ' рисунков,' .PHP_EOL;
const marker = 23;
echo 'из них '.marker. ' нарисовано фломастерами,' .PHP_EOL;
const pencil = 40;
echo pencil. ' карандашами, а остальные красками.'.PHP_EOL. 'Сколько рисунков выполнено красками?'.PHP_EOL;
const paint = all - marker - pencil;
echo 'ОТВЕТ: ' .paint. ' рисунков.';