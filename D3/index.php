<!DOCTYPE html>
<html>
<head>
  <title>PHP Array Comparing</title>
</head>
<body>

<?php

// return a new array containing the common elements of the given two arrays.
function myFunction($a)
{
//    return 1;
}

function compareArrays($a1, $a2)
{
    $a3 = [];

    foreach ($a1 as $k => $item) {
        $a3[$k] = [];
        foreach ($a2 as $item2) {
          if ($item == $item2) {
              $a3[$k] = $item;
          }
        }
    }

    foreach ($a3 as $k => $value) {
        if (!is_string($value)) {
            unset($a3[$k]);
        }
    }

    return implode(', ', $a3) . '<br/>';
}

echo(compareArrays(['red', 'green', 'yellow'], ['red', 'green', 'black']));
echo(compareArrays(['a', 'b', 'c', 'd', 'e'], ['a', 'b', 'c', 'd', 'e']));
echo(compareArrays(['a'], ['a', 'b']));
echo(compareArrays(['a'], ['a', 'c']));
echo(compareArrays(['a', 'ac', 'eb'], ['a', 'ca', 'be']));
echo(compareArrays(['a', 'b', 'c'], ['a', 'b', 'c']));

?>

</body>
</html>
