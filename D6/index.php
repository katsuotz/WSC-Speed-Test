<?php

$image = imagecreatefrompng('image.png');

$colors = [];

for ($i = 0; $i < imagesx($image); $i++) {
    for ($j = 0; $j < imagesy($image); $j++) {
        $rgb = imagecolorat($image, $i, $j);
        $r = ($rgb >> 16) & 0xFF;
        $g = ($rgb >> 8) & 0xFF;
        $b = ($rgb) & 0xFF;
        $id = '_' . $r . $g . $b;
        if (!@$colors[$id]) $colors[$id] = [
            'r' => $r,
            'g' => $g,
            'b' => $b,
            'value' => 0
        ];

        $colors[$id]['value']++;
    }
}

usort($colors, function ($a, $b) {
    return $b['value'] - $a['value'];
});

?>

<html>
<head>
  <title>Colors</title>
  <style>
    div {
      height: 200px;
      width: 200px;
        border: 2px solid #000;
        display: flex;
        justify-content: center;
        align-items: center;
    }
  </style>
</head>
<body>
<h4>3 predominant colors: </h4>
<?php for ($i = 0; $i < 3; $i++): $color = $colors[$i]?>
  <div style="background-color:rgb(<?= $color['r'] ?>,<?= $color['g'] ?>,<?= $color['b'] ?>);">rgb(<?= $color['r'] ?>,<?= $color['g'] ?>,<?= $color['b'] ?>)</div>
<?php endfor ?>
</body>
</html>
