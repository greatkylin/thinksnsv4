<?php 
//phpinfo();
$foo = 5 + "10 Small Pigs";
echo $foo . PHP_EOL;

echo true;

$foo = 'DB';
$foo[0] = 'M';
echo $foo . PHP_EOL;

var_dump(0 === $foo);

$array = array(
	1 => 'a',
	"1" => 'b',
	1.5 => 'c',
	true => 'd',
);

var_dump($array);
?>