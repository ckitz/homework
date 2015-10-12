<?php

$numbers=array(1,2,3);
$numbers1=array(5,11,9);
$numbers2=array(7,0,0,4,5,6);

array_push($numbers,array_shift($numbers));
print_r($numbers);

?>

<?php

//Example from php site
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

function test_alter(&$item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
}

function test_print($item2, $key)
{
    echo "$key. $item2<br />\n";
}

echo "Before ...:\n";
array_walk($fruits, 'test_print');

array_walk($fruits, 'test_alter', 'fruit');
echo "... and after:\n";

array_walk($fruits, 'test_print');
?>