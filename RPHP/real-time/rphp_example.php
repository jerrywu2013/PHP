<?php
require('autoload.php');
echo "hello world";
use Kachkaev\PHPR\RCore;
use Kachkaev\PHPR\Engine\CommandLineREngine;

$r = new RCore(new CommandLineREngine('/usr/bin/R'));

$result = $r->run(<<<EOF
x = 1
y = 2
x + y
x + z
x - y
EOF
    );

echo $result;


?>

