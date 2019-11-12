<?php

$year = $_GET['year'] ?? date('Y');
$month = $_GET['month'] ?? date('m');

$date_string = $year . '-' . $month . '-01';

$today = date('Y-m-d');

$firstDay = date('D', strtotime($date_string));

$month_name = date('F', strtotime($date_string));

$total_day = 0;

switch ($month) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $total_day = 31;
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $total_day = 30;
        break;
    case 2:
        $total_day = $year % 4 == 0 ? 29 : 28;
        break;
}

switch ($firstDay) {
    case 'Mon':
        $firstDay = 0;
        break;
    case 'Tue':
        $firstDay = 1;
        break;
    case 'Wed':
        $firstDay = 2;
        break;
    case 'Thu':
        $firstDay = 3;
        break;
    case 'Fri':
        $firstDay = 4;
        break;
    case 'Sat':
        $firstDay = 5;
        break;
    case 'Sun':
        $firstDay = 6;
        break;
}

$last_date_string = $year . '-' . $month . '-' . $total_day;
$lastDay = date('D', strtotime($last_date_string));

switch ($lastDay) {
    case 'Mon':
        $lastDay = 5;
        break;
    case 'Tue':
        $lastDay = 4;
        break;
    case 'Wed':
        $lastDay = 3;
        break;
    case 'Thu':
        $lastDay = 2;
        break;
    case 'Fri':
        $lastDay = 1;
        break;
    case 'Sat':
        $lastDay = 0;
        break;
    case 'Sun':
        $lastDay = 6;
        break;
}


?>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="calendar.css">
</head>

<body>


<div class="custom-calendar-wrap">
  <div class="custom-inner">
    <div class="custom-header clearfix">
      <nav>
        <a href="index.php?year=<?= $month == 1 ? $year - 1 : $year ?>&month=<?= $month == 1 ? 12 :$month - 1 ?>" class="custom-btn custom-prev"></a>
        <a href="index.php?year=<?= $month == 12 ? $year + 1 : $year ?>&month=<?= $month == 12 ? 1 : $month + 1 ?>" class="custom-btn custom-next"></a>
      </nav>
      <h2 id="custom-month" class="custom-month"><?= $month_name ?></h2>
      <h3 id="custom-year" class="custom-year"><?= $year ?></h3>
    </div>
    <div id="calendar" class="fc-calendar-container">
      <div class="fc-calendar fc-five-rows">
        <div class="fc-head">
          <div>Sun</div>
          <div>Mon</div>
          <div>Tue</div>
          <div>Wed</div>
          <div>Thu</div>
          <div>Fri</div>
          <div>Sat</div>
        </div>
        <div class="fc-body">
            <?php $cDay = 0 ?>
            <?php for ($i = 0; $i <= $total_day + $firstDay + $lastDay; $i++): ?>
                <?php $cDay++ ?>
                <?php $cDate = $year . '-' . $month . '-' . ($i - $firstDay); ?>
                <?php if ($i % 7 == 0 || $i == 0): ?>
                <div class="fc-row">
                <?php endif ?>
              <div class="<?= $today == $cDate ? 'fc-today' : '' ?>"><span
                  class="fc-date"><?= $i > $firstDay && $i <= $total_day + $firstDay ? $i - $firstDay : '' ?></span></div>
                <?php if ($i > 0 && $cDay % 7 == 0): ?>
                </div>
                <?php endif ?>
            <?php endfor ?>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

</html>
