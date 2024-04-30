<?php 
$partite = [
    [
        'casa' => 'Los Angeles Lakers',
        'ospiti'=> 'Boston Celtics',
        'pthome'=> '33',
        'ptaway'=> '77',
    ],
    [
        'casa'=> 'Golden State Warriors',
        'ospiti'=> 'Miami Heat',
        'pthome'=> '123',
        'ptaway'=> '99',
    ],   
    [
        'casa'=> 'San Antonio Spurs',
        'ospiti'=> 'Toronto Raptors',
        'pthome'=> '74',
        'ptaway'=> '85',
    ],   
    [
        'casa'=> 'Houston Rockets',
        'ospiti'=> 'Philadelphia 76ers',
        'pthome'=> '92',
        'ptaway'=> '112',
    ],   

]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="module" src="index.js"></script>
    <title> PHP Snack 1</title>
</head>
<body>
    <h1>PHP Snack 1</h1>
    <?php
    	foreach ($partite as $key) {
    		echo $key['casa'] . ' - ' . $key['ospiti'] . ' | ' . $key['pthome'] . ' - ' . $key['ptaway'] . '<br>';
    	}
    ?>
</body>
</html>