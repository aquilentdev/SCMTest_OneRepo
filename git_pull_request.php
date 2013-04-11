<?php

$date = date('m/d/Y h:i:s a', time());

exec('git pull');

$file = fopen( 'gitpull.log', 'a+' );
fwrite($file, 'pull initiated on: '.$date.PHP_EOL.PHP_EOL);
fclose( $file );

echo "hey";?>

