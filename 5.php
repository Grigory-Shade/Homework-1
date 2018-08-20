<pre>
<?php
$bmw = array(
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
);
$toyota = array(
    'model' => 'RAV4',
    'speed' => 130,
    'doors' => 5,
    'year' => '2013'
);
$opel = array(
    'model' => 'Astra',
    'speed' => 110,
    'doors' => 4,
    'year' => '2016'
);
$car['bmw'] = array('X5', 120, 5, '2015');
$car['toyota'] = array('RAV4', 130, 5, '2013');
$car['opel'] = array('ASTRA', 110, 4, '2016');
$name = array_keys($car);
echo 'CAR ' .$name[0] .PHP_EOL .$car['bmw'][0] .' '.$car['bmw'][1] .' '.$car['bmw'][2] .' '.$car['bmw'][3] .PHP_EOL
.'<br>';
echo 'CAR ' .$name[1] .PHP_EOL .$car['toyota'][0] .' '.$car['toyota'][1] .' '.$car['toyota'][2] .' '.$car['toyota'][3]
.'<br>';
echo PHP_EOL .'CAR ' .$name[2] .PHP_EOL .$car['opel'][0] .' '.$car['opel'][1] .' '.$car['opel'][2] .' '.$car['opel'][3];
