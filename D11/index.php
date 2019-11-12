<?php
$data = json_decode(file_get_contents('data.json'));

$page = $_GET['page'] ?? 1;
$per_page = 5;

$total_page = ceil(count($data) / $per_page);

$before_page = $page > 2 ? 2 : $page - 1;
$after_page = $total_page - $page > 2 ? 2 : -($page - $total_page);

if ($before_page < 2) {
    $after_page = 5 - $before_page - 1;
}
if ($after_page < 2) {
    $before_page = 5 - $after_page - 1;
}

?>

<link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.css">

<div class="container-fluid">

  <div class="row">
      <?php for ($i = $per_page * ($page - 1); $i < $page * $per_page; $i++): ?>
          <?php if (@$data[$i]): ?>
          <div class="col-4 py-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?= $data[$i]->name ?></h5>
                <p>Age: <?= $data[$i]->age ?></p>
                <p>Gender: <?= $data[$i]->gender ?></p>
                <p>Company: <?= $data[$i]->company ?></p>
                <p>Email: <?= $data[$i]->email ?></p>
                <p>Phone: <?= $data[$i]->phone ?></p>
                <p>Address: <?= $data[$i]->address ?></p>
              </div>
            </div>
          </div>
          <?php endif ?>
      <?php endfor ?>
  </div>

  <div class="pagination justify-content-center">
    <div class="page-item <?= $page == 1 ? 'disabled' : '' ?>"><a href="index.php?page=<?= $page - 1 ?>"
                                                                  class="page-link">Previous</a></div>
      <?php for ($i = $before_page;
                 $i > 0;
                 $i--): ?>
        <div class="page-item"><a href="index.php?page=<?= $page - $i ?>" class="page-link"><?= $page - $i ?></a></div>
      <?php endfor ?>
    <div class="page-item active"><a href="index.php?page=<?= $page ?>" class="page-link"><?= $page ?></a></div>
      <?php for ($i = 0;
                 $i < $after_page;
                 $i++): ?>
        <div class="page-item"><a href="index.php?page=<?= $i + $page + 1 ?>"
                                  class="page-link"><?= $i + $page + 1 ?></a>
        </div>
      <?php endfor ?>
    <div class="page-item <?= $page == $total_page ? 'disabled' : '' ?>"><a href="index.php?page=<?= $page + 1 ?>"
                                                                            class="page-link">Next</a></div>
  </div>
</div>
