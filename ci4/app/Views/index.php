<?= $this->extend('layout/template'); ?>
<?= $this->section('dasbord'); ?>

<div class="container">

  <div class="row text-center">
    <div class="col">
      <div class="card ">
        <div class="card-header bg-primary text-light">
          <h3>Loket 1</h3>
        </div>
        <div class="card-body">
          <h1 class="card-title">A1</h1>
        </div>
        <div class="card-footer bg-primary text-light">
          <h4>Jam</h4>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <div class="card-header bg-success  text-light">
          <h3>Loket 2</h3>
        </div>
        <div class="card-body">
          <h1 class="card-title">B1</h1>
        </div>
        <div class="card-footer bg-success text-light">
          <h4>Jam</h4>
        </div>
      </div>
    </div>


    <div class="col">
      <table class="table text-center border table-hover">
        <thead class="bg-secondary text-light">
          <tr>
            <th>No</th>
            <th>Nomor Antrian</th>
          </tr>
        </thead>
    <?php
    $n = 1;
      foreach($antrian as $row => $values) :
    ?>
        <tbody >
          <tr>
            <td><?= $n++; ?></td>
            <td><?= $values->kode ?></td>
          </tr>
        </tbody>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>