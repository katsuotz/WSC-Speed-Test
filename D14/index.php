<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<?php

function removeDuplicates($arr)
{
    $arr = array_unique($arr);
    echo implode(', ', $arr);
    echo '<br>';
}

removeDuplicates(['a', 'a', 'b', 'c', 'd']);
removeDuplicates(['another', 'array', 'array', 'with', 'strings']);
removeDuplicates(['b']);
removeDuplicates(['a', 'b']);
removeDuplicates(['a', 'aa', 'b']);
removeDuplicates(['a', 'z', 'z']);

?>

</body>
</html>